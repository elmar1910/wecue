<?php
    class wc_ideal extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function start_pay( $data = array() )
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