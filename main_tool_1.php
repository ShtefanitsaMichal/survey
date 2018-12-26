<<<<<<< HEAD
<?php require_once "./head.php" ?>


<?php require_once __ROOT__."/db_connection.php";?>
<?php require_once __ROOT__."/view/navbar.view.php" ?>
<?php require_once __ROOT__."/controller/GetController.php" ?>

<?php $_SESSION['source_number'] = 1 ?>

=======
<?php require_once "head.php" ?>
<?php require_once "db_connection.php";?>
<?php $_SESSION['source_number'] = 1 ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 
 
<?php  global $FirstMainSource, $SecondMainSource; ?>
>>>>>>> master

<?php 
    $get_main_source = new Get();
    $get_main_source -> get_main_source();
?>

<<<<<<< HEAD
<?php  global $FirstMainSource, $SecondMainSource; ?>

<?php   
        $main_source1 = new GET();
        $_SESSION['main_source_1'] = $main_source1 -> main_source_1();
        $main_source2 = new GET();
        $_SESSION['main_source_2'] = $main_source2 -> main_source_2();
?>

    <div class="container" style="margin: 5vh auto;">
        <div class="card border-secondary mb-3" style="max-width: 100%;">
            <div class="card-header">
               <div id="choose_source">
                    <h5 v-if="source === 'zarządem SMP' ">zarządem SMP </h5>
                    <h5 v-else-if="source == 'bezpośrednim przyłożonym'">bezpośrednim przyłożonym </h5>
                    <h5 v-else-if="source == 'swoim działem'">swoim działem </h5>
                    <h5 v-else-if="source == 'pracownikami innego działu SMP'">pracownikami innego działu SMP </h5>
                    <h5 v-else-if="source == 'systemy informatyczne'">Które systemy informatyczne najczęściej wykorzystujesz w pracy ? </h5> 
                    <h5 v-else><span class="text-warning"> Żródło nie istnieje!!! </span></h5> 
                </div>
            </div>
        <div class="card-body text-secondary">

        <?php 
        /* 
            Attention!!! current string must be the same like in get_main_source.view.php -> line-12  
        * 
        */
            if ($main_source1 -> main_source_1() == 'systemy informatyczne') 
                { require_once __ROOT__."/view/get_apps.view.php" ; } 
            else 
                { require_once __ROOT__."/view/get_tools.view.php" ; }  
        ?>

        </div>
    </div>
=======
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
                        
                <!-- Attention !!! current string must be the same like in get_main_source.view.php -> line-12  -->
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
<<<<<<< HEAD
    
</div>

<script>
    new Vue({
      el: '#choose_source',
      data: {
        source: '<?php print main_source_1()?>'
        }
    })
</script>    

       
      
=======
>>>>>>> master

    <script>
        new Vue({
        el: '#choose_source',
        data: {
<<<<<<< HEAD
            source: '<?php echo $main_source1 -> main_source_1()?>'
            }
        })
    </script>
=======
            source: '<?php print main_source_1()?>'
            }
        })
    </script>
>>>>>>> smp2
>>>>>>> master



