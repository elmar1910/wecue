<?php

 class Wc_views extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function get_remaining_views( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('geen trainer geselecteerd');
                return false;
            }
                           $this -> db -> select('available_views');
                           $this -> db -> where('trainer_id', $trainer_id);
            if( !$result = $this -> db -> get('trainers') )
            {
                 $this -> log -> add_message('kon geen verbinding maken met de database');
                 return false;
            }
            
            if( !$result -> num_rows())
            {
                $this -> log -> add_message('de trainer is niet gevonden');
                return false;
            }
            
            return $result -> row() -> available_views;
            
        }
        
        function add_views( $data = false )
        {
            
        }
        
        function delete_views( $trainer_id )
        {
            
        }
        
        function check_ip( $trainer_id )
        {
            
        }
        
    }
?>
