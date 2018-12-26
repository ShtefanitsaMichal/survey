  <?php 
         include ("../head.php");
         include_once (__ROOT__."/controller/PostController.php");
    ?>

    <?php 
        if (isset($_POST['send'])) 
            { 
                $post = new Post();
                $post -> post_source_rate();
                echo "<script> window.location = '../main_tool_1.php'</script>";  
            }  
        else { echo "error";}  
    ?>

