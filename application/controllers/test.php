<?php
class Test extends CI_Controller
    {	
        function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_trainers', 'trainers');
            $this -> load -> model('wc_payments', 'payments');
        }
        
        function index()
        {
            
            
            $data = array(
                'amount'      => 50,
                'bank'        => '0021',
                'rate'        => 0.10,
                'trainer_id'  => 1
            );
            $result = $this -> payments ->  buy_views( $data );   
            if( !result )
            {
                $this -> log -> add_message('er is een fout opgetreden');
                return false;
            }
            
            redirect($result[1]);
        }
        
        function buy_color()
        {
            $data = array(
                'bank'       => '0021',
                'trainer_id' => 6,
                'time'       => 6,
                'product'    => 'color',
                'rate'       => 100
            );
            $result = $this -> payments -> buy_time( $data );
            echo $this -> log -> show_messages();
            if( !$result )
            {
                return false;
            }
            
            redirect($result[1]);
        
        }
        
        function buy_promotion()
        {
            $data = array(
                'bank'       => '0021',
                'trainer_id' => 1,
                'time'       => 7,
                'product'    => 'promotion',
                'rate'       => 100
            );
            $result = $this -> payments -> buy_time( $data );
            echo $this -> log -> show_messages();
            if( !$result )
            {
                return false;
            }
            
            redirect($result[1]);
        }
        
        function buy_frontpage()
        {
            $data = array(
                'bank'       => '0021',
                'trainer_id' => 1,
                'time'       => 7,
                'product'    => 'frontpage',
                'rate'       => 100
            );
            $result = $this -> payments -> buy_time( $data );
            echo $this -> log -> show_messages();
            if( !$result )
            {
                return false;
            }
            
            redirect($result[1]);
        }
        
        function paid_color( $trx_id = false )
        {
             $result = $this -> payments -> check_payment_time_products( $trx_id, 'color' );
             echo $this -> log -> show_messages();
             if( $result ) echo 'transactie geslaagd';
        }
        
        function paid_views( $trx_id = false )
        {
             $this -> payments -> check_payment_views( $trx_id );
             echo $this -> log -> show_messages();
        }
        
        function paid_promotion ($trx_id = false)
        {
             $result = $this -> payments -> check_payment_time_products( $trx_id, 'promotion' );
             echo $this -> log -> show_messages();
             if( $result ) echo 'transactie geslaagd';
        }
        
         function paid_frontpage ($trx_id = false)
        {
             $result = $this -> payments -> check_payment_time_products( $trx_id, 'frontpage' );
             echo $this -> log -> show_messages();
             if( $result ) echo 'transactie geslaagd';
        }
        
    }
?>
