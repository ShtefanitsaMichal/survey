<?php 
<<<<<<< HEAD
include("../head.php");
include_once(__ROOT__."/controller/PostController.php");
=======
    require_once '../head.php'; 
    require_once '../db_connection.php';
    require_once '../view/get_main_source.view.php';

>>>>>>> master
?>



<<<<<<< HEAD
<?php

  if (isset($_POST['send'])) 
        { 
            $post = new Post();
            $post -> post_tools();

            if($_SESSION['source_number'] == 2) 
                {    
                    echo "<script> window.location = '../main_tool_2_rate.php'</script>";
                }
                else 
                {
                    echo "<script> window.location = '../main_tool_1_rate.php'</script>";
                }
        }
    else { echo "Forma nie została wysłana ponieważ - ponieważ wysyłanie nie zostało ukończone właściwy sposób";}
=======
    
<?php
>>>>>>> master

   
?>