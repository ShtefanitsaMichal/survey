<?php
    class SESSION_CHECK
    {
        public function __construct()
        {   

            global $session_id, $servername, $username, $password, $dbname;

            $sql = "select * from smp_communication_survey.employee where session_id = '$session_id'";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            
            $check = $conn -> prepare( $sql );
            $check -> bindParam(1, $_GET['id'], PDO::PARAM_INT);
            $check -> execute();
            $row = $check -> fetch(PDO::FETCH_ASSOC);
            if ( !$row )
            {
                false;
                echo 'sesja z danym indytyficatorem nie istnieje' ;
            } 
                else
            {
                true;
                echo 'sesja z danym indytyficatorem <b>' . $row['session_id'] .  '</b> istnieje' ;
            }
        }    
    }    
 ?>



