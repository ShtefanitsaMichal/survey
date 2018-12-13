
    <?php  ?>
<?php 
    function session_check(){

        require "db_connection.php";
        require "head.php";

        $sql = "select * from smp_communication_survey.employee where session_id = '$session_id'";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
        $result = $conn->query($sql);

        echo '<br>';

        if ($result->num_rows > 0) {
            echo "at least 1 result";
            // while($row = $result->fetch_assoc()) {
            //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            // }
        } else {
            echo "0 results";
        }
        $conn->close();

    }

    session_check();
   
?>

<?php 
   // echo $_SERVER['DOCUMENT_ROOT'];
?>