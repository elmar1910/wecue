<?php

class Test extends CI_Controller
{
      function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_views', 'views');
            $this -> load -> model('wc_trainers', 'trainers');
            $this -> load -> model('wc_categories', 'categories');
        }
        
      function index()
      {
	  $this -> template -> load('index', 'content_index');
      }
      
      function get( $trainer_id )
      {
          $result = $this -> trainers -> get_trainer($trainer_id);
          echo '<pre>';
          print_r($result);
          echo '</pre>';
      }
      
      function search( $search )
      {
          $data = array
            (
                'page'  => 0,
                'limit' => 25,
                'like'  => $search
            );
          $this -> trainers -> get_trainers($data);
      }
      
      function pay()
      {
          $url = $this -> trainers -> pay_color(1, '0021');          
          redirect($url);
      }
      
      function paid( $trx_id )
      {
          if( $this -> trainers -> set_paid($trx_id, 'product_promotion') )
          {
              $this -> log -> add_message('U heeft betaald!');
          }
          echo $this -> log -> show_messages();
      }
}
?>
