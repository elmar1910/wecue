<?php
    class Wc_ideal extends CI_Model
    {
        private $start_url    = 'https://www.targetpay.com/ideal/start';
        private $check_url  = 'https://www.targetpay.com/ideal/check';
        
        function __construct()
        {
            parent::__construct();
        }
        
        function start_payment( $data = array() )
        {
            echo 'Start betaling<br />';
            if( !$data )
            {
                $this -> log -> add_message('Geen gegevens opgegeven');
                echo 'Geen gegevens<br />';
                return false;
            }
            
            $response = $this -> send_request($data, $this -> start_url);
            if( !$response )
            {
                echo 'Fout bij versturen<br />';
                $this -> log -> add_message('Fout bij versturen van verzoek naar betaalserver');
                return false;
            }
            
            $status = explode(' ', $response);
            if( $status[0] != '000000')
            {
                echo 'Foutcode' . $status[0] . '<br />';
                $this -> log -> add_message('Er is iets misgegaan; foutcode: ' . $status[0]);
                return false;
            }
            
            //$user = $_SESSION['wc_login']['user_id'];
            $trx_url = explode('|', $status[1]);
            // Store transaction id in db
            return $trx_url;
        }
        
        function check_payment( $trx_id )
        {
            
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