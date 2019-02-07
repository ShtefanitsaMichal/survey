<?php 
    require_once "../head.php";
    require_once (__ROOT__.'/controller/dbConnect.php');
    require_once (__ROOT__."/controller/PostController.php");

    $source_number = $_SESSION['source_number']
?>
<?php  

?>

<?php    
   
?> 


<?php 
    $expectation_post = new Post;
    $expectation_post -> post_expectation();


    $json_post = new Post;
    $json_post -> post_json();
?>

<?php  
    echo "<script> window.location = '../message.php'</script>"; 
?>