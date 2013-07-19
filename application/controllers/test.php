<?php

class Test extends CI_Controller
{
      function __construct()
        {
            parent::__construct();
            $this -> load -> model('wc_views', 'views');
        }
        
      function views()
      {
          $this -> views -> get_remaining_views(1);
      }
}
?>
