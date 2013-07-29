<?php
    class Wc_categories extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function add_category( $cat_name = false )
        {
            if( !$cat_name )
            {
                $this -> log -> add_message('Geen naam opgegeven');
                return false;
            }
            
            $this -> db -> where('category_name', $cat_name);
            $result = $this -> db -> get('categories');
            if( $result -> num_rows() )
            {
                $this -> log -> add_message('Categorie bestaat al. Kies een andere naam.');
                return false;
            }
            
            $output = array
                    (
                        'category_name'     => $cat_name
                    );
            
            if( !$this -> db -> insert('categories', $output) )
            {
                $this -> log -> add_message('Fout bij toevoegen categorie aan database');
                return false;
            }
            
            return true;
        }
        
        function delete_category( $cat_id = false )
        {
            if( !$cat_id )
            {
                $this -> log -> add_message('Geen categorie-id opgegeven');
                return false;
            }
            
            $this -> db -> where('id', $cat_id);
            $result = $this -> db -> get('categories');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Categorie bestaat niet, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $cat_id);
            if( !$this -> db -> delete('categories') )
            {
                $this -> log -> add_message('Fout bij verwijderen categorie uit database, probeer het opnieuw');
                return false;
            }
            
            return true;
        }
        
        function update_category( $data = array() )
        {
            if( !$data )
            {
                $this -> log -> add_message('Geen data meegegeven');
                return false;
            }
            
            $this -> db -> where('id', $data['id']);
            $result = $this -> db -> get('categories');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Categorie niet gevonden, probeer opnieuw');
                return false;
            }
            
            if( !$this -> db -> update('categories', $data) )
            {
                $this -> log -> add_message('Fout bij updaten categorie in database, probeer opnieuw');
                return false;
            }
            
            return true;
        }
        
        function update_trainer_categories( $user_id = false, $categories = false )
	{
	    if( !$categories || !$user_id )
	    {
		$this -> log -> add_message('Geen data meegegeven');
		return false;
	    }
	    
	    if( !$this ->remove_trainer_categories($user_id) ) return false;
	    
	    if( !$this -> db -> insert_batch('trainer_categories', $categories) )
	    {
		$this -> log -> add_message('Fout bij updaten database, probeer opnieuw');
		return false;
	    }
	    
	    return true;
	}
	
	function remove_trainer_categories( $user_id = false )
	{
	    $this -> db -> where('trainer_id', $user_id);
	    if( !$this -> db -> delete('trainer_categories') )
	    {
		$this -> log -> add_message('Fout bij verwijderen records uit database, probeer opnieuw');
		return false;
	    }
	    
	    return true;
	}
    }
?>