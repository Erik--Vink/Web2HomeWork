<?php

    class Database
    {  
        private $conn;
        private $result;

        public function __construct($database)
        {
            require_once('config.inc.php');
            $this->conn = new mysqli($server, $user, $password, $database);
            if($this->conn->connect_errno != 0)
            {
                die("Probleem bij het leggen van connectie of selecteren van database");   
            }      

        }

        public function doSQL($sql)
        {
            $this->result = $this->conn->query($sql)
            or die($this->conn->error.__LINE__);
        }

        public function getRecord()
        {
         return $this->result;
        }
               
    }

?>