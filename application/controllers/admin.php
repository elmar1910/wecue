<?php
    class Admin extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_trainers', 'trainers');
	    $this -> load -> model('wc_categories', 'categories');
            
        }
        
        function index()
        {
            $this -> user -> access(10);
        }
	
	function login( $send = false )
	{
	    if( $send )
	    {
		if( !$this -> user -> do_login($_POST) )
		{
		    echo 'Er is een fout opgetreden bij het inloggen';
		}
		redirect(base_url());
	    }
	}
	
	function logout( $send = false )
	{
	    if( $send )
	    {
		if( !$this -> user -> kill_session() )
		{
		    redirect(base_url());
		}
	    }
	}
    }
?>