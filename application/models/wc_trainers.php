<?php
    class Wc_trainers extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_ideal', 'ideal'); 
        }
        
        function add_trainer( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Er is iets misgegaan. Probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('email', $data['email']);
            $result = $this -> db -> get('trainers');
            if( $result -> num_rows() )
            {
                $this -> log -> add_message('Gebruiker bestaat reeds, vul een ander emailadres in');
                return false;
            }
            
            $output = array 
                (
                    'email'             => $data['email'],
                    'password'          => md5($data['password']),
                    'name'              => $data['name'],
                    'address'           => $data['address'],
                    'city'              => $data['city'],
                    'phone'             => $data['phone'],
                    'website'           => $data['website'],
                    'photo'             => $data['photo'],
                    'description'       => $data['description'],
                    'short_description' => $data['short_description'],
                    'salary'            => $data['salary'],
                    'wecue'             => '0',
                    'total_views'       => '0',
                    'available_views'   => '5',
                    'trx_id'            => '',
                    'level'             => '10'
                );
            
            if( !$this -> db -> insert('trainers', $output ) )
            {
                $this -> log -> add_message('Fout bij updaten database, probeer opnieuw');
                return false;
            }
            
            return true;
        }
        
        function delete_trainer( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            $result = $this -> db -> get('trainers');
            if( !$result -> num_rows() )
            {
                $this -> db -> add_message('Er is geen gebruiker met dit id gevonden');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            if( !$this -> db -> delete('trainers') )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
            
            return true;
        }
        
        function update_trainer( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $data['id']);
            if( !$this -> db -> update('trainers', $data) )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
            return true;
        }
        
        function get_trainer( $trainer_id = false )
        {
            if( !$trainer_id )
            {
                $this -> log -> add_message('Er is iets misgegaan, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            $result = $this -> db -> get('trainers');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Gebruiker niet gevonden');
                return false;
            }
            
            $row = $result -> result();
            return $row;
        }
        
        function get_trainers( $search = array() )
        {
            if( isset($search['like']) )
            {
                $this -> db -> like('name', $search['like']);
                $this -> db -> or_like('email', $search['like']);
                $this -> db -> or_like('address', $search['like']);
                $this -> db -> or_like('city', $search['like']);
            }
            
            $result = $this -> db -> get('trainers', $search['limit'], $search['page']*$search['limit']);
            $output = $result -> result();
            return $output;
        }
        
        function pay_views( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Geen data meegegeven voor betaling. Probeer het opnieuw.');
                return false;
            }
            
            $output = array
                    (
                        'rtlo'          => $data['rtlo'],
                        'bank'          => $data['bank'],
                        'description'   => $data['description'],
                        'amount'        => $data['amount'],
                        'returnurl'     => 'http://localhost/wecue/ideal.php'
                    );
            
            $response = $this -> ideal -> start_payment($output);
            if( !$response )
            {
                return false;
            }
            
            return $response;
        }
        
        function set_paid( $trx_id = false, $product = false )
        {
            if( !$trx_id || !$product )
            {
                $this -> log -> add_message('Geen transactie-id of product meegegeven');
                return false;
            }
            
            $data = array
                (
                    $product     => date('Y-m-d H:i:s')
                );
            
            $this -> db -> where('trx_id', $trx_id);
            if( !$this -> db -> update('trainers', $data) )
            {
                $this -> log -> add_message('Er is iets misgegaan bij het updaten van de database');
                return false;
            }
        }
    }
?>
