<?php

    class Gebruiker
    {
     
        public $geb_id;
        public $geb_voornaam;
        public $geb_achternaam;
        
        public function __construct($id, $voornaam, $achternaam)
        {
            $this->geb_id = $id;
            $this->geb_voornaam = $voornaam;
            $this->geb_achternaam = $achternaam;
        }
         
        public static function get_gebruikers()
        {
            require ('database.class.php');
            $db = new database("wsphp");
            $db->doSQL("SELECT * FROM gebruikers");
            $result = $db->getRecord();
            
            $gebruikers = array();
            
            while($row = $result->fetch_assoc())
            {
             
                $gebruikers[] = new Gebruiker($row['geb_id'], $row['geb_voornaam'], $row['geb_achternaam']);
                
            }
            
            return $gebruikers;
            
        }
        
         public static function getGebruikerById($id)
        {
            require ('database.class.php');
            $db = new database("wsphp");
            
            $db->doSQL("SELECT * FROM gebruikers WHERE id = $id");
            $result = $db->getRecord();
            
            $gebruikers = array();
            
            while($row = $result->fetch_assoc())
            {
             
                $gebruikers[] = new Gebruiker($row['geb_id'], $row['geb_voornaam'], $row['geb_achternaam']);
                
            }
            
            return $gebruikers;
            
        }
        
        
    }

?>