<?php
    class Trainers extends CI_Controller
    {
	function __construct()
	{
	    parent::__construct();
	    $this -> load -> model('wc_trainers', 'trainers');
	    $this -> load -> model('wc_views', 'views');
	}
	
	function index()
	{
	    $search = array
		    (
			'limit'	=> 25,
			'page'	=> 0
		    );
	    $result = $this -> trainers -> get_trainers($search);
	    if( $result )
	    {
		$data['trainers'] = $result;		
	    }
	    
	    $data['active'] = 'trainers';
	    $this -> template -> load('template', 'trainers_table', $data);
	}
	
	 function profile( $trainer = null )
        {
            $result = $this -> trainers -> get_trainer( $trainer );
            if( !$result )
            {
                $this -> log -> add('er is een fout opgetreden.');
                redirect('trainers');
            }
            $data['trainer'] = $result;
            if( !$this -> views -> check_ip($trainer, $this->input->ip_address()) )
            {
                redirect('trainers');
            }
            
            $this -> template -> load('template', 'trainer_profile', $data);
        }
    }
?>