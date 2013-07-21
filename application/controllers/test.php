<?php

class Test extends CI_Controller
{
      function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_views', 'views');
            $this -> load -> model('wc_trainers', 'trainers');
        }
        
      function views()
      {
          $this -> views -> get_remaining_views(1);
      }
      
      function add()
      {
          $data = array
            (
                'email'             => 'elmar@scriptmotion.nl',
                'password'          => md5('testwachtwoord'),
                'name'              => 'Elmar Puts',
                'address'           => 'Eikenlaan 23',
                'city'              => 'Sint Odilienberg',
                'phone'             => '06521777896',
                'website'           => 'www.google.nl',
                'photo'             => 'foto.jpg',
                'description'       => '',
                'short_description' => 'Blabla',
                'salary'            => '7,50'
            );
          
          $this -> wtainers -> add_trainer($data);
      }
      
      function delete( $trainer_id )
      {
          $this -> trainers -> delete_trainer($trainer_id);
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
}
?>
