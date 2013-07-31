<?php
    class Wc_ideal extends CI_Model
    {
        private $start_url  = 'https://www.targetpay.com/ideal/start';
        private $check_url  = 'https://www.targetpay.com/ideal/check';
	private $rtlo	    = 99323;
	private $return_url = 'http://localhost/wecue/ideal.php';
        
        function __construct()
        {
            parent::__construct();
        }
        
        function start_payment( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Geen gegevens opgegeven');
                return false;
            }
            
            $response = $this -> send_request($data, $this -> start_url);
            if( !$response )
            {
                $this -> log -> add_message('Fout bij versturen van verzoek naar betaalserver');
                return false;
            }
           
            $status = explode(' ', $response);
            if( $status[0] != '000000')
            {
                $this -> log -> add_message('Er is iets misgegaan; foutcode: ' . $status[0]);
                return false;
            }
            
            $output = explode('|', $status[1]);
            return $output;
        }
        
        function check_payment( $trx_id )
        {
            if( !$trx_id )
            {
                $this -> log -> add_message('Er is geen transactie-id meegegeven');
                return false;
            }
            
            $data = array
                    (
                        'rtlo'      => $this -> rtlo,
                        'trxid'     => $trx_id,
                        'once'      => 1,
                        'test'      => 1
                    );
            
            $response = $this -> send_request($data, $this -> check_url);
            if( !$response )
            {
                $this -> log -> add_message('Fout bij versturen van verzoek naar betaalserver');
                return false;
            }
            
            $status = explode(' ', $response);
            if( $status[0] != '000000' )
            {
                $this -> log -> add_message('Er is iets misgegaan; foutcode: ' . $status[0]);
                return false;
            }
            
            return true;
        }
        
        function send_request( $data = array(), $url = false )
        {
            
            $curl = curl_init();
            
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }
    }
?>