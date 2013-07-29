<?php
    class Trainers extends CI_Controller
    {
	function __construct()
	{
	    parent::__construct();
	    $this -> load -> model('wc_trainers', 'trainers');
	    
	}
	
	function index()
	{
	    $search = array
		    (
			'limit'	=> 25,
			'page'	=> 0
		    );
	    $result = $this -> trainers -> get_trainers($search);
	    if( $result )
	    {
		$data['trainers'] = $result;		
	    }
	    
	    $data['active'] = 'trainers';
	    $this -> template -> load('template', 'trainers_table', $data);
	}
    }
?>