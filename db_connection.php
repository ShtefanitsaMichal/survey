<?php
    function globals(){
	 global $username, $servername, $password, $dbname, $conn;	
    };

    $servername = "localhost";
    $username = "m.sztefanica";
    $password = "UphCF4YJj8FAkukh";
    $dbname = "smp_communication_survey";
 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );    

?>



  
	
  
  
  