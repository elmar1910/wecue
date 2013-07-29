<?php
    class Home extends CI_Controller
    {	
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_trainers', 'trainers');
        }
        
        function index()
        {
	    $this -> user -> access(10);
	    $data['active'] = 'dashboard';
	    $this -> load -> view('template', $data);
        }
	
	function login()
	{
	    $this -> load -> view('login');
	}
	
	function get( $trainer_id = false )
	{
	    if( $trainer_id )
	    {
		$this -> trainers -> get_trainer($trainer_id);
	    }
	}
    }
?>