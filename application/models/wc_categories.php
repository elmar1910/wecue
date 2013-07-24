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
        
        function assign_category( $trainer_id = false, $category_id = false )
        {
            if( !$trainer_id || !$category_id )
            {
                $this -> log -> add_message('Geen id opgegeven');
                return false;
            }
            
            $this -> db -> where('id', $trainer_id);
            $result = $this -> db -> get('trainers');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Ongeldig trainer-id opgegeven, probeer opnieuw');
                return false;
            }
            
            $this -> db -> where('id', $category_id);
            $result = $this -> db -> get('categories');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Ongeldig categorie-id opgegeven, probeer opnieuw');
                return false;
            }
            
            //Kijken of bewuste categorie al aan trainer is toegewezen
            $this -> db -> where('trainer_id', $trainer_id);
            $result = $this -> db -> get('trainer_categories');
            $row = $result -> row();
            if( $row -> category_id == $category_id )
            {
                $this -> log -> add_message('Categorie is reeds aan deze trainer toegewezen!');
                return false;
            }
            
            $output = array
                    (
                        'trainer_id'    => $trainer_id,
                        'category_id'   => $category_id
                    );
            
            if( !$this -> db -> insert('trainer_categories', $output) )
            {
                $this -> log -> add_message('Er is een fout opgetreden bij het updaten van de database');
                return false;
            }
            
            return true;
        }
        
        function unassign_category( $trainer_id = false, $category_id = false )
        {
            if( !$trainer_id || !$category_id )
            {
                $this -> log -> add_message('Geen id opgegeven');
                return false;
            }
            
            $this -> db -> where('trainer_id', $trainer_id);
            $result = $this -> db -> get('trainer_categories');
            if( !$result -> num_rows() )
            {
                $this -> log -> add_message('Ongeldig trainer-id opgegeven, probeer opnieuw');
                return false;
            }
            
            $cat_found = false;
            foreach( $result -> result() as $row )
            {
                echo '<pre>';
                print_r($row);
                echo '</pre>';
                if( $row -> category_id == $category_id )
                {
                    $cat_found = true;
                    break;
                }
            }
            
            if( !$cat_found )
            {
                $this -> log -> add_message('Categorie niet bij deze trainer aangetroffen');
                return false;
            }
            
            $where = array
                    (
                        'trainer_id'    => $trainer_id,
                        'category_id'   => $category_id
                    );
            
            $this -> db -> where($where);
            if( !$this -> db -> delete('trainer_categories') )
            {
                $this -> log -> add_message('Fout bij verwijderen categorie bij deze trainer');
                return false;
            }
            
            return true;
        }
    }
?>