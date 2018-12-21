<?php 

    class dbConnect{
        
        public function __construct(){

            $servername = "localhost";
            $username = "m.sztefanica";
            $password = "UphCF4YJj8FAkukh";
            $dbname = "smp_communication_survey";

            try{
                $conn = new pdo( "mysql:host=$servername;dbname=$dbname", $username, $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                die(json_encode(array('outcome' => true)));

                
            }

                catch(PDOException $ex)
            
            {
                die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
            }
        }
    }
    