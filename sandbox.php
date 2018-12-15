
<?php 

class SESSION_CHECK 
{
    public function __construct(){

        require "db_connection.php";
        require "head.php";

        $sql = "select * from smp_communication_survey.employee where session_id = '$session_id'";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
        $stmt = $conn -> prepare( $sql );
        $stmt -> bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);

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

new SESSION_CHECK;   


