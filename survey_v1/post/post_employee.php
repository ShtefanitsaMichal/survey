<?php
    require_once "../head.php";
    require_once (__ROOT__."/controller/dbConnect.php"); 
    require_once (__ROOT__."/controller/PostController.php");



        
    // if form was posted run function post_employee()
    $post_employee = new Post;
    

    if (
        isset($_POST['send'])) 
        { 
            $post_employee -> post_employee();
            echo "<script> window.location = '../source.php'</script>";
        }
    else 
        { 
            echo "Forma nie została wysłana ponieważ - ponieważ wysyłanie nie zostało ukończone właściwy sposób";
        }     

?>

