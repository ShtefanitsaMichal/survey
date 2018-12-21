    <?php 
         include("../head.php");
         include_once(ROOT."/controller/PostController.php");
    ?>

     
    <?php
        if (isset($_POST['send'])) 
                { 
                    $post = new Post;
                    $post -> post_source();
                }  
        else { echo "error";}
    ?>


   
