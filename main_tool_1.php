<?php require_once "head.php" ?>
<?php require_once "db_connection.php";?>
<?php $_SESSION['source_number'] = 1 ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 
 


<?php  global $FirstMainSource, $SecondMainSource; ?>

<div class="ap"> 

<?php 

    /*  
    
    function change_name($main_source_1()) {
            switch ($main_source_1()) {
            case "Zarząd" :echo "Intranet portal"; break;
            case "Przełożony" :echo  "Sanden Vision"; break;
            case "Dział" :echo  "Comarch ECM"; break;
            case "Inny Dział" :echo "BPCS"; break;
            case "System informatyczny" :echo "Które <php>systemy informatyczne<php> najczęściej wykorzystujesz w pracy ?"; break;   
        }
    } 
    
    */

?>
    <!-- Które <php>systemy informatyczne<php> najczęściej wykorzystujesz w pracy ? -->
    <h5>Które<b><?php print main_source_1() ?></b> najczęściej wykorzystujesz w pracy ? </h5>
    
    <hr>

    <?php 
            // Condition: If main_source_1() == 'systems' load view with applications
            
            // Attention !!! current string must be the same like in get_main_source.view.php -> line-12 
            if (main_source_1() == 'systemy informatyczne') 
                {
                    require "view/get_apps.view.php" ;
                } 
            else 
                { 
                    require "view/get_tools.view.php" ;
                }
    ?>
</div>    
       
      



