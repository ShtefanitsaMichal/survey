<?php define('__ROOT__', dirname(dirname(__FILE__)));  ?>
<?php require_once(__ROOT__."/head.php"); ?> 
<?php require_once(__ROOT__."/db_connection.php"); ?>
<?php require_once(__ROOT__."/controller/GetController.php") ?>

<?php
    //Ktore z narzedzi / form informowania najczęściej wykorzystujesz w komunikacji z   

?>


<?php 
    $get_main_source = new Get();
    $get_main_source -> get_main_source();

?>



