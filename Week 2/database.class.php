<?php



class Database
{
    
    
    private $conn="";

    public function __construct($database)
    {
        require_once('config.inc.php');
        $this->conn = new mysqli($server, $user, $password, $database);
        if($this->conn->connect_errno != 0)
        {
            die("Probleem bij het leggen van connectie of selecteren van database");   
        }      
       
    }
    
    public function __destruct()
    {
        
    }
    
    public function doSQL($sql)
    {
        $result = $this->conn->query($sql);
        return $result; 
    }

}

?>