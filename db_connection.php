<?php
    /**
    Data base datas for connection
    */
    
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "smp_communication_survey";
    /***
     *
     * PDO db connection
     *
     */
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);   

?>
