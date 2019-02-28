<?php 

    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";
    
    class dbConnect{
        
        public function __construct(){

                global $servername, $username, $password, $dbname;

            try{

                $conn = new pdo( "mysql:host=$servername;dbname=$dbname", $username, $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
               
            }

                catch(PDOException $ex)
            
            {
                die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
            }
             

        }
        
    }
    
