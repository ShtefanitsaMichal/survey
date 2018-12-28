<?php  
    require('../head.php');
    require('../db_connection.php') ;
    require('../view/get_main_source.view.php'); 
?> 

<?php 
        if($_SESSION['source_number'] == 1)
        {
            $source = main_source_1();   
        } 
        else 
        { 
            $source = main_source_2(); 
        }
        
        if ($source == 'systemy informatyczne') 
        {
            $db_source = 'main_apps_rate';
        } 
        else 
        {  
            $db_source = 'main_tools_rate'; 
        }
        
?> 

<?php global $main_tool; ?>

<?php
    function post_source_rate(){    
        try {
            global $servername, $dbname, $username, $password, $conn, $source, $db_source, $session_id;

            $opcja_1 = $_POST['opcja_1'];
            $opcja_2 = $_POST['opcja_2'];  
            $opcja_3 = $_POST['opcja_3'];
            $opcja_4 = $_POST['opcja_4'];
            $opcja_5 = $_POST['opcja_5'];

            $opcja_1_title = $_POST['opcja_1_title'];
            $opcja_2_title = $_POST['opcja_2_title'];  
            $opcja_3_title = $_POST['opcja_3_title'];
            $opcja_4_title = $_POST['opcja_4_title'];
            $opcja_5_title = $_POST['opcja_5_title'];


            // set the PDO error mode to exception
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("INSERT INTO $db_source (session_id, source ,opcja_1, opcja_2, opcja_3, opcja_4, opcja_5, opcja_1_title, opcja_2_title, opcja_3_title, opcja_4_title, opcja_5_title)  
                                VALUES ('$session_id','$source' , '$opcja_1', '$opcja_2', '$opcja_3', '$opcja_4', '$opcja_5', '$opcja_1_title', '$opcja_2_title', '$opcja_3_title', '$opcja_4_title', '$opcja_5_title')");
        
            $sql->execute(array(
                "session_id" => $session_id,
                "source" => $source,   
                "opcja_1" => $opcja_1,
                "opcja_2" => $opcja_2,
                "opcja_3" => $opcja_3, 
                "opcja_4" => $opcja_4,
                "opcja_5" => $opcja_5,
                "opcja_1_title" => $opcja_1_title,
                "opcja_2_title" => $opcja_2_title,
                "opcja_3_title" => $opcja_3_title, 
                "opcja_4_title" => $opcja_4_title,
                "opcja_5_title" => $opcja_5_title, 
            )); 
        
        }
            catch(PDOException $e) { print_r($sql) . "<br>" . $e->getMessage(); }
        
        $conn = null;
    }
    
    if (isset($_POST['send'])) { post_source_rate(); }  
    else { echo "error";}   
    
    ?>



    <?php
         if($_SESSION['source_number'] == 2) 
        { echo "<script> window.location = '../main_source_expect.php'</script>"; }
        else 
        { echo "<script> window.location = '../main_tool_2.php'</script>"; } 
    ?>
