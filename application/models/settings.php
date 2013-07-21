<?php
/**
 * Created by Paul du Long
 * ScriptMotion - http://www.scriptmotion.nl - pauldulong@gmail.com
 */

class Settings extends CI_Model{

	var $setting_cache = array();
	var $edited = 0;

	function __construct()
	{
		parent::__construct();
	}

	function background( $files = array() )
	{
		$config['upload_path'] 	 = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']		 = '300';
		$config['encrypt_name']	 = 1;

		$this -> load -> library('upload', $config);

		if ( !$this -> upload -> do_upload() )
		{
			$this -> log -> add_message($this -> upload -> display_errors());
			return false;
		}

		$data = $this -> upload -> data();
		list($width, $height) = getimagesize($data['full_path']);

		if( $width < 1000 )
		{
			$this -> log -> add_message('De breedte van de afbeelding moet minimaal 1.000px zijn');
			return false;
		}

		return $this -> edit(array('key' => 'login_background', 'value' => $data['file_name']));

	}
	
	function get_active_plugins()
	{
		$this -> db -> where('active', 1);
		$result = $this -> db -> get('plugins');
		
		if( !$result->num_rows() )
			return false;
			
		$output = array();
		foreach( $result->result() as $row )
		{
			$output[$row->key] = $row;
		}
		
		return $output;
	}
	
	function get_plugin_state( $key = false )
	{
		if( !$key )
		{
			return false;
		}
		
		$this -> db -> where('key', $key);
		$this -> db -> where('active', 1);
		$result = $this -> db -> get('plugins');
		if( !$result -> num_rows() )
		{
			return false;
		}
		
		return true;
	}

	function background_delete()
	{
		return $this -> edit(array('key' => 'login_background', 'value' => '0'));
	}

	function edit( $data = array() )
	{
		$input_resource = $data;
		$minimal_input = true;
		$required_input = array('key','value');
		foreach( $required_input as $row )
		{
			if( array_key_exists($row, $input_resource) )
			{
				if( $minimal_input && !strlen($input_resource[$row]) )
					$invalid_input = $row;
			}else $invalid_input = $row;
		}

		if( isSet($invalid_input) )
		{
			$this -> log -> add_message('[Instellingen] Verzoek is incompleet (1)');
			return false;
		}

		if( !strlen($data['value']) )
		{
			$this -> log -> add_message('[Instellingen] Verzoek is incompleet (2)');
			return false;
		}

		$this -> db -> where('key', $data['key']);
		if( !$this -> db -> get('settings') -> num_rows() )
		{
			$this -> log -> add_message('Setting doesn\'t exists');
			return false;
		}

		if( array_key_exists('numeric_check', $data) )
		{
			if( $data['numeric_check'] )
			{
				if( !is_numeric($data['value']) )
				{
					$this -> log -> add_message('Must be a numeric input');
					return false;
				}

				if( $data['value'] < 0 )
				{
					$this -> log -> add_message('Value cant be below zero');
					return false;
				}

				$data['value'] = round($data['value']);
			}
		}

		$sql = array(
			'value' => $data['value']
		);

		$this -> db -> where('key', $data['key']);
		if( $this -> db -> update('settings', $sql) )
		{
			$this -> setting_cache[$data['key']] = $data['value'];
			return true;
		}else{
			$this -> log -> add_message( $this -> lang -> line('ui_error_db_error') );
			return false;
		}

	}

	function save( $data = array(), $numeric_check = false )
	{
		foreach( $data as $key => $value )
		{
			if( $value != $this -> setting($key) )
			{
				if( !$this -> edit(array('key' => $key, 'value' => $value, 'numeric_check' => $numeric_check )) )
				{
					$this -> log -> add_message('Error saving settings ['.$key.']');
					return false;
				}else $this -> edited = $this -> edited + 1;
			}
		}

		return true;
	}

	function setting( $key = false )
	{

		if( array_key_exists($key, $this -> setting_cache) )
		{
			return $this -> setting_cache[$key];
		}else{
			$this -> db -> where('key', $key);

			$response = $this -> db -> get('settings');

			if( $response -> num_rows() )
			{
				$data = $response -> row_array();
				$this -> setting_cache[$key] = $data['value'];
				return $data['value'];
			}else{
				return false;
			}
		}
	}

}