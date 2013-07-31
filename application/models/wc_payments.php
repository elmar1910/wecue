<?php
 class Wc_payments extends CI_Model
    {
        function __construct()
        {
            parent::__construct(); 
            $this -> load -> model('wc_trainers', 'trainers');
            $this -> load -> model('wc_ideal', 'ideal');
        }
        
        function buy_time( $data = array() )
        {
            /*
             * $data = array(
             *      'bank'       => '0021',
                    'trainer_id' => 6,
                    'time'       => 6,          ||time in days
                    'product'    => 'color',    
                    'rate'       => 100         ||price per day
             * )
             * 
             * available products:
             *      -color
             *      -promotion
             *      -frontpage
             */
            
            if( !$data )
            {
                $this -> log -> add_message('geen gegevens meegegeven');
                return false;
            }
            
            if( empty( $data['trainer_id'] ) || empty( $data['time'] ) || empty( $data['product'] ) || empty( $data['bank'] ) || empty($data['rate']) )
            {
                $this -> log -> add_message('geen gegevens meegegeven');
                return false;
            }
            
            $result = $this -> trainers -> get_trainer($data['trainer_id']);
            if( !$result ) return false;
            
            $product = $data['product'];
            $price = $data['rate'] * $data['time'];
            
            
            $product_field = 'product_'.$product;
            $old_time = $result['trainer'] -> $product_field;
            if( $old_time < date("U") )
            {
                $old_time = date("U");
            }
            
            $new_time = $old_time + 86400*$data['time'];
            
            $ideal_data = array(
                'rtlo'          => '99323',
                'bank'          => $data['bank'],
                'description'   => "wecue $product",
                'amount'        => $price,
                'returnurl'     => "http://localhost/ideal.php?token=$product"
            );
            
          
            $ideal_result = $this -> ideal -> start_payment( $ideal_data );
            if( !$ideal_result ) return false;
            
            $update_data = array(
              'id'                 => $data['trainer_id'],
              'trx_id'             => $ideal_result[0],
              "bought_$product"    => $new_time
            );
            
            if( !$this -> trainers -> update_trainer2( $update_data ) ) return false;
            
            return $ideal_result;
        }
        
        function buy_views( $data = array() )
        {
            /*
             * $data[]
             *      amount
             *      bank
             *      rate
             *      trainer_id
             *      
             */
            if( !$data )
            {
                $this -> log -> add_message('geen gegevens meegegeven');
                return false;
            }
            
            $price = $data['amount'] * $data['rate'] * 100;
            
            $result = $this -> trainers -> get_trainer($data['trainer_id']);
            if( !$result ) return false;
            
            $ideal_data = array(
                'rtlo'          => '99323',
                'bank'          => $data['bank'],
                'description'    => 'wecue page views',
                'amount'        => $price,
                'returnurl'    => 'http://localhost/ideal.php?token=views'
            );
            
            $ideal_result = $this -> ideal -> start_payment( $ideal_data );
            if( !$ideal_result ) return false;
            
            $update_data = array(
              'id'              => $data['trainer_id'],
              'trx_id'          => $ideal_result[0],
              'bought_views'    => $data['amount']
            );
            
            if( !$this -> trainers -> update_trainer2( $update_data ) ) return false;
            
            return $ideal_result;
        }
        
        function check_payment_views( $trx_id )
        {
            $trainer = $this -> get_trainer_trx_id($trx_id);
            
            $this -> load -> model('wc_views', 'views');
            
            
            $data = array(
              'trainer_id' => $trainer -> id,
              'amount'     => $trainer -> bought_views
                
            );
            
            if( !$this -> views -> add_views($data) ) return false;
            
            return true;
            
        }
        
        function get_trainer_trx_id( $trx_id = false )
        {
            if( !$trx_id )
            {
                $this -> log -> add_message('geen transactie id opgegeven');
                return false;
            }
            
            if( !$this -> ideal -> check_payment( $trx_id ) ) return false;
            
            $this -> db -> where('trx_id', $trx_id);
            $response = $this -> db -> get('trainers');
            
            if( !$response -> num_rows() )
            {
                $this -> log -> add_message('Gebruiker niet gevonden.');
                return false;
            }
            
           return $response -> row();
        }
        
        function check_payment_time_products( $trx_id, $product )
        {
             if( !$product )
             {
                 $this -> log -> add_message('geen product geselecteerd');
                 return false;
             }
             
             $trainer = $this -> get_trainer_trx_id($trx_id);
             $bought_product = 'bought_'.$product;
             $data = array(
               'id'             => $trainer -> id,
               "bought_$product"   => 0,
               "product_$product"  => $trainer -> $bought_product
             );
             
             if( !$this -> trainers -> update_trainer2( $data ) ) return false;
            
             return true;
        }
       
        
    }
?>
