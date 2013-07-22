<?php
    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function index( $send = false )
        {
            if( $send )
            {
                $data = array
                    (
                        'email'     => 'henk@test.nl',
                        'password'  => 'wachtwoord'
                    );
                
                session_start();
                if( $this -> user -> do_login($data) )
                {
                    $this -> log -> add_message('U bent succesvol ingelogd!');
                    redirect('profile');
                }
            }
        }
        
        function logout( $send = false )
        {
            if( $send )
            {
                $this -> user -> kill_session();
                echo '<pre>';
                print_r($_SESSION);
                echo '</pre>';
            }
        }
    }
?>