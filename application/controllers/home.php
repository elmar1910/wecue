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
            $search = array
                    (
                        'limit'     => 25,
                        'page'      => 0
                    );
            
            echo '<pre>';
            print_r($this -> trainers -> get_trainers($search));
            echo '</pre>';
        }
    }
?>