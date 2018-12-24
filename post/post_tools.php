<?php 
    require_once '../head.php'; 
    require_once '../db_connection.php';
    require_once '../view/get_main_source.view.php';

?>



    
<?php

   

    if($_SESSION['source_number'] == 2) 
    {    
        echo "<script> window.location = '../main_tool_2_rate.php'</script>";
    }
    else 
    {
        echo "<script> window.location = '../main_tool_1_rate.php'</script>";
    }
?>