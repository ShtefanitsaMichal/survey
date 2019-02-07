<?php require_once "./head.php" ?>


<?php require_once __ROOT__."/controller/dbConnect.php";?>
<?php require_once __ROOT__."/view/navbar.view.php" ?>
<?php require_once __ROOT__."/controller/GetController.php" ?>

<?php $_SESSION['source_number'] = 1 ?>

<?php 
      if(isset($_SESSION["source1"]))
      {
        require_once (__ROOT__."/view/alerts/already_done.php");
        die;
      } 
    ?>


<?php 
    $get_main_source = new Get();
    $get_main_source -> source();
?>

<?php global $FirstMainSource, $SecondMainSource; ?>

<?php  
    $_SESSION['main_source_1'] = $get_main_source -> main_source_1();
    $_SESSION['main_source_2'] = $get_main_source -> main_source_2();
?>

    <div class="container" style="margin: 5vh auto;">
        <div class="card border-secondary mb-3" style="max-width: 100%;">
            <div class="card-header">
                <?php include(__ROOT__."/templates/CardHeader.html.php")?>
            </div>
        <div class="card-body text-secondary">

        <?php 
        /* 
            Attention!!! current string must be the same like in get_main_source.view.php -> line-12  
        * 
        */
            if ($get_main_source -> main_source_1() == 4) 
                { 
                    require_once __ROOT__."/templates/Apps.html.php" ; 
                } 
            else 
                { 
                    require_once __ROOT__."/templates/Tools.html.php" ; 
                }  
        ?>

        </div>
    </div>

    <script>
        new Vue({
        el: '#choose_source',
        data: {
            source1: "<?php echo $get_main_source -> main_source_1(); ?>",
            source2: "<?php echo $get_main_source -> main_source_2(); ?>"
            }
        })
    </script>



