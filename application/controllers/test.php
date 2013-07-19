<?php

class Test extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this -> load -> model('wc_views', 'views');
            $this -> views -> check_ip( 1, $this -> input -> ip_address() );
      }
        
      function index()
      {
          echo 'nothing to see here';
          
      }
      
      function views()
      {
          echo $this -> log -> show_messages();
          echo $this -> views -> get_views(1) -> available_views;
      }
      
      function add_views()
      {
          $data = array(
            'trainer_id' => 1,
            'amount'     => 50
          );
          $this -> views -> add_views($data);
          echo $this -> log -> show_messages();
          echo $this -> views -> get_views(1) -> available_views;
      }
      
}
?>
