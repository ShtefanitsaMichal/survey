<?php

//require_once "head.php"; 

	function glob_vars(){
     global $username, $servername, $password, $dbname, $conn;	
	} ;
	

	$servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "smp_communication_survey";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
?>



  
	
  
  
  