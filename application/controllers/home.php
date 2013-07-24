<?php
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_trainers', 'trainers');
	    session_start();
	    if( $this -> user -> get_login_data() )
	    {
		echo 'U bent ingelogd!';
	    }
	    echo '<pre>';
	    print_r($_SESSION);
	    echo '</pre>';
        }
        
        function index()
        {
            $this -> template -> load('index', 'content_index');
        }
	
	function logout()
	{
	    $this -> user -> kill_session();
	}
    }
?>