<?php require_once "head.php" ?>
<?php require_once "db_connection.php";?>
<?php $_SESSION['source_number'] = 1 ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 
 
<?php  global $FirstMainSource, $SecondMainSource; ?>

<div class="ap"> 

    <!-- Które <php>systemy informatyczne<php> najczęściej wykorzystujesz w pracy ? -->
    <div class="card border-secondary mb-3" style="max-width: 100%;">
        <div class="card-header">
           <div id="choose_source">
                <h5 v-if="source === 'zarządem SMP' ">zarządem SMP </h5>
                <h5 v-else-if="source == 'bezpośrednim przyłożonym'">bezpośrednim przyłożonym </h5>
                <h5 v-else-if="source == 'swoim działem'">swoim działem </h5>
                <h5 v-else-if="source == 'pracownikami innego działu SMP'">pracownikami innego działu SMP </h5>
                <h5 v-else="source == 'systemy informatyczne'">Które systemy informatyczne najczęściej wykorzystujesz w pracy ? </h5> 
            </div>
        </div>
    <div class="card-body text-secondary">
                        
                <!-- Attention!!! current string must be the same like in get_main_source.view.php -> line-12  -->
                <?php 
                    if (main_source_1() == 'systemy informatyczne') 
                        { require "view/get_apps.view.php" ; } 
                    else 
                        { require "view/get_tools.view.php" ; }  
                ?>
                <!------------------------END------------------------>

            </div>
        </div>
    </div>

    <script>
        new Vue({
        el: '#choose_source',
        data: {
            source: '<?php print main_source_1()?>'
            }
        })
    </script>



