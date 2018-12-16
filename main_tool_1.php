<?php require_once "head.php" ?>
<?php $_SESSION['source_number'] = 1 ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 



<?php  global $FirstMainSource, $SecondMainSource; ?>

<div class="ap"> 
    <h5>Ktore z form informowania najczęściej wykorzystujesz w komunikacji z <b> <?php print main_source_1() ?> ? </b></h5>
    <hr>
    <?php 
            if (main_source_1() == 'bazą danych') {
                require "view/get_apps.view.php";
            } else { require "view/get_tools.view.php" ;}
    ?>
</div>    
       
      



