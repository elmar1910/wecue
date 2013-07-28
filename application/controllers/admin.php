<?php
    class Admin extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_trainers', 'trainers');
            session_start();
            //$this -> user -> access(10);
        }
        
        function index()
        {
            //$this -> load -> view();
            echo 'Nog geen view gemaakt!';
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
	
	function load_view( $page = 'index.php')
	{
	    $this -> load -> view($page);
	}
        
        /*function add( $send = false )
        {
            if( $send )
            {
                if( $this -> trainers -> add_trainer($_POST) )
                {
                    $this -> log -> add_message('Trainer succesvol toegevoegd!');
		}
            }
        }
        
        function delete( $send = false )
        {
            if( $send )
            {
                if( $this -> trainers -> delete_trainer($_POST['id']) )
                {
                    $this -> log -> add_message('Trainer succesvol verwijderd!');
                }
            }
        }
        
        function update( $send = array() ) 
        {
            if( $send )
            {
                if( $this -> trainers -> update($_POST) )
                {
                    $this -> log -> add_message('Trainer succesvol veranderd!');
                }
            }
        }*/
        
        function get( $limit = 25, $page = 0 )
        {
            $data = array
                    (
                        'limit' => $limit,
                        'page'  => $page
                    );
            
            $result = $this -> trainers -> get_trainers($data);
            if( $result )
            {
                echo '<pre>';
                print_r($result);
                echo '</pre>';
            }
        }
    }
?>