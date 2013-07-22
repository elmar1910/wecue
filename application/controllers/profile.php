<?php
    class Profile extends CI_Controller
    {
        var $user_id = false;
        
        function __construct()
        {
            parent::__construct();
            
            $this -> load -> model('wc_trainers', 'trainers');
            
            session_start();
            if( !$this -> user -> access(1) )
            {
                //redirect();
            }
            
            $login = $this -> user -> get_login_data();
            $this -> user_id = $login['userid'];
            
            echo '<pre>';
            print_r($this -> trainers -> get_trainer($this -> user_id));
            echo '</pre>';
        }
        
        function index()
        {
            
        }       
    }
?>