<?php
    class Wc_trainers extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_ideal', 'ideal'); 
        }
        
        function add_trainer( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Er is iets misgegaan. Probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('email', $data['email']);
            $result = $this -> db -> get('trainers');
            if( $result -> num_rows() )
            {
                $this -> log -> add_message('Gebruiker bestaat reeds, vul een ander emailadres in');
                return false;
            }
            
            $sql = array 
                (
                    'email'             => $data['email'],
                    'password'          => md5($data['password']),
                    'name'              => $data['name'],
                    'address'           => $data['address'],
                    'city'              => $data['city'],
                    'phone'             => $data['phone'],
                    'website'           => $data['website'],
                    'photo'             => $data['photo'],
                    'description'       => $data['description'],
                    'short_description' => $data['short_description'],
                    'salary'            => $data['salary'],
                    'available_views'   => '5',
                    'level'             => '10'
                );
            
            if( !$this -> db -> insert('trainers', $sql ) )
            {
                $this -> log -> add_message('Fout bij updaten database, probeer opnieuw');
                return false;
            }
            
            return true;
        }
        
        function delete_trainer( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            $result = $this -> db -> get('trainers');
            if( !$result -> num_rows() )
            {
                $this -> db -> add_message('Er is geen gebruiker met dit id gevonden');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            if( !$this -> db -> delete('trainers') )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
            
            return true;
        }
        
        function update_trainer( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
	    
	    $sql = array
		    (
			'id'		    => $data['id'],
			'email'		    => $data['email'],
			'password'	    => md5($data['password']),
			'name'		    => $data['name'],
			'address'	    => $data['address'],
			'city'		    => $data['city'],
			'phone'		    => $data['phone'],
			'website'	    => $data['website'],
			'photo'		    => $data['photo'],
			'description'       => $data['description'],
			'short_description' => $data['short_description'],
			'salary'            => $data['salary'],
			'available_views'   => $data['available_views']
		    );
            
            $this -> db -> where('id', $sql['id']);
            $result = $this -> db -> get('trainers');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Trainer niet gevonden, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $sql['id']);
            if( !$this -> db -> update('trainers', $sql) )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
	    
            return true;
        }
        
        function get_trainer( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('trainers.id', $trainer_id);
	    $this -> db -> from('trainers');
	    $this -> db -> join('trainer_categories', 'trainer_categories.trainer_id = trainers.id');
	    $this -> db -> join('categories', 'categories.id = trainer_categories.category_id');
            $result = $this -> db -> get();
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Gebruiker niet gevonden');
                return false;
            }
	    
	    foreach( $result -> result() as $row )
	    {
		$output['categories'][] = $row -> category_name;
		$output['trainer']	= $row;
	    }
	    
            return $output;
        }
        
        function get_trainers( $search = array() )
        {
            if( isset($search['like']) )
            {
                $this -> db -> like('name', $search['like']);
                $this -> db -> or_like('email', $search['like']);
                $this -> db -> or_like('address', $search['like']);
                $this -> db -> or_like('city', $search['like']);
            }
            
            $result = $this -> db -> get('trainers', $search['limit'], $search['page']*$search['limit']);
	    if( !$result -> num_rows() )
	    {
		$this -> log -> add_message('Geen trainers gevonden');
		return false;
	    }
	    
            $output = $result -> result();
            return $output;
        }
        
        function pay_views( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Geen data meegegeven voor betaling. Probeer opnieuw.');
                return false;
            }
            
            $output = array
                    (
                        'bank'          => $data['bank'],
                        'description'   => $data['description'],
                        'amount'        => $data['amount'],
                    );
            
            $response = $this -> ideal -> start_payment($output);
            if( !$response )
            {
                return false;
            }
            
            return $response;
        }
        
        function set_paid( $trx_id = false, $product = false, $amount = false )
        {
            if( !$trx_id || !$product )
            {
                $this -> log -> add_message('Geen transactie-id of product meegegeven');
                return false;
            }
            
            $data = array
                (
                    $product     => date('Y-m-d H:i:s')
                );
            
            $this -> db -> where('trx_id', $trx_id);
            if( !$this -> db -> update('trainers', $data) )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
	    
	    $this -> db -> where('trx_id', $trx_id);
	    $result = $this -> db -> get('trainers');
	    $row = $result -> row();
	    
	    $sql = array
		    (
			'user_id'   => $row -> id,
			'product'   => $product,
			'amount'    => $amount
		    );
	    
	    if( !$this -> db -> insert('payments', $sql))
	    {
		$this -> log -> add_message('Fout bij updaten database');
		return false;
	    }
        }
    }
?>
