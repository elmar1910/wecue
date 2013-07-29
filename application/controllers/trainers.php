<?php
    class Trainers extends CI_Controller
    {
	function __construct()
	{
	    parent::__construct();
	    session_start();
	    if( $this -> user -> get_login_data() )
	    {
		$this -> load -> model('wc_trainers', 'trainers');
		$search = array
			(
			    'limit'	=> 25,
			    'page'	=> 0
			);
		$result = $this -> trainers -> get_trainers($search);
		$data['trainers'] = $result;
		$this -> template -> load('trainers', 'trainers_table', $data);
	    }
	    else
	    {
		$this -> load -> view('login');
	    }
	}
	
	function index()
	{
	}
    }
?>