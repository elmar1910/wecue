<?php
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //$this -> load -> model('wc_trainers', 'trainers');
	    session_start();
	    if( $this -> user -> get_login_data() )
	    {
		$this -> load -> view('index');
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