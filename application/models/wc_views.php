<?php

 class Wc_views extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function get_views( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('geen trainer geselecteerd');
                return false;
            }
                           $this -> db -> select('available_views, total_views');
                           $this -> db -> where('id', $trainer_id);
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
            
            return $result -> row();
            
        }
        
        function add_views( $data = false )
        {
            
            if( !$data['trainer_id'] || !$data['amount'])
            {
                echo 'false';
                $this -> log -> add_message('niet alle gegevens zijn opgegeven.');
                return false;
            }
            
            if( !$old_views = $this -> get_views($data['trainer_id']) -> available_views ) return false;
            
            $new_views = (int)$old_views + $data['amount'];
            
            $update_data = array(
                'available_views' => $new_views
            );
            
                 $this -> db -> where('id', $data['trainer_id']);
            if( !$this -> db -> update('trainers', $update_data) )
            {
                $this -> log -> add_message('kon geen verbinding met database maken.');
                return false;
            }
            
            return true;
        }
        
        function delete_views( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('geen trainer geselecteerd');
                return false;
            }
            
           $views = $this -> get_views( $trainer_id );
           if( !$views ) return false;
           
           (int)$views -> available_views--;
           (int)$views -> total_views++;
           
           $data = array(
             'available_views' => $views -> available_views,
              'total_views'    => $views -> total_views
           );
           
                $this -> db -> where('id', $trainer_id);
           if( !$this -> db -> update('trainers', $data) )
           {
               $this -> log -> add_message('kon geen verbinding maken met database');
               return false;
           }
           
           return true;
        }
        
        function check_ip( $trainer_id = false, $ip_address = false )
        {
             if( !$trainer_id || !$ip_address )
            {
                $this -> log -> add_message('geen trainer geselecteerd');
                return false;
            }
            
            $this -> db -> where('trainer_id', $trainer_id);
            if( !$result=$this -> db -> get('views_ip') )
            {
                $this -> log -> add_message('kon geen verbinding met de database maken');
                return false;
            }
            
            if( !$result -> num_rows() )
            {
                 if( !$this -> delete_views( $trainer_id ) ) return false;
                 if( !$this -> add_ip( $trainer_id, $ip_address ) ) return false;
                 return true;
            }
            
            $ip_match = false;
            
            foreach($result -> result() as $row)
            {
                if( $row -> ip_address == $ip_address ) $ip_match = true;
            } 
                
            if( !$ip_match )
            {
                if( !$this -> delete_views( $trainer_id ) ) return false;
                if( !$this -> add_ip( $trainer_id, $ip_address ) ) return false;
            }
            
            return true;
        }
        
        function add_ip( $trainer_id= false, $ip_address = false )
        {
            if( !$trainer_id || !$ip_address )
            {
                $this -> log -> add_message('geen trainer geselecteerd');
                return false;
            }
            
             $data = array(
                 'trainer_id' => $trainer_id,
                 'ip_address' => $ip_address
             );
             
             if( !$this -> db -> insert('views_ip', $data) )
             {
                 $this -> log -> add_message('kan geen verbinding maken met database.');
                 return false;
             }
             
             return true;
        }
        
    }
?>
