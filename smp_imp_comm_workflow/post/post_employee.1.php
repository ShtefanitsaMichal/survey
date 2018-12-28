<?php
    require '../head.php';
    require_once (__ROOT__."/controller/dbConnect.php");

    function employee_session(){
        $_SESSION["survey_id"] = '';
        $_SESSION["source_number"] = 0;
        $_SESSION["employee"] = array(
                                    'typ' =>  $_POST['typ'], 
                                    'wiek' =>  $_POST['wiek'], 
                                    'stanowisko' =>  $_POST['stanowisko'], 
                                    'data' => date()
                                );
    }

    include_once(__ROOT__."/controller/PostController.php");

    $post = new Post;

    // if form was posted run method post_employee()
    if (
         isset($_POST['send'])) { $post -> post_employee();
             echo "<script> window.location = '../source.php'</script>";
         }
     else { echo "Forma nie została wysłana ponieważ - ponieważ wysyłanie nie zostało ukończone właściwy sposób";}     

?>

