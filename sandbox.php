
    <?php  ?>
<?php 

class SESSION_CHECK 
{
    public function session_check(){
        
        require "db_connection.php";
        require "head.php";

        $sql = "select * from smp_communication_survey.employee where session_id = '$session_id'";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
        $stmt = $conn -> prepare( $sql );
        $stmt -> bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);

        if ( ! $row )
        {
            die('nothing found');
        }
        echo 'sesja z danym indytyficatorem istnieje -> ' . $row['session_id'];
    }    
}

    $session_check = new SESSION_CHECK;   
    $session_check -> session_check();

?>
