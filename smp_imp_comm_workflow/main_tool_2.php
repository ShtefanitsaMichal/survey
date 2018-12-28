<?php require_once "head.php" ?>
<?php $_SESSION['source_number'] = 2 ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 


<?php  global $FirstMainSource, $SecondMainSource; ?>
<div class="app">
    <div class="card border-dark mb-3" style="max-width: 100%;">
        <div class="card-header">
            <h5>Ktore z form informowania najczęściej wykorzystujesz w komunikacji z <b><?php print main_source_2() ?></b> ?</h5>
        </div>

        <div class="card-body text-secondary">
            <?php 
                if (main_source_2() == 'podanymi poniżej systemami informatycznymi') 
                {
                    require "view/get_apps.view.php";
                }   
                else 
                { 
                    require "view/get_tools.view.php" ;
                }
            ?>
        </div>
    </div>      
</div>