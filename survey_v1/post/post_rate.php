<?php  
    require('../head.php');
    require_once(__ROOT__.'/controller/dbConnect.php');
    require_once(__ROOT__.'/controller/GetController.php');

    $source = new Get;

?> 

<?php 
    $source_num = $_SESSION['source_number'];
        
        if($_SESSION['source_number'] == 1)
        {
            $source = $source -> main_source_1();

            $_SESSION['source1'] = array(
                $_POST['opcja_1_title'] => intval($_POST['opcja_1']) ,
                $_POST['opcja_2_title'] => intval($_POST['opcja_2']) ,
                $_POST['opcja_3_title'] => intval($_POST['opcja_3']) ,
                $_POST['opcja_4_title'] => intval($_POST['opcja_4']) ,
                $_POST['opcja_5_title'] => intval($_POST['opcja_5']) ,
            );
        }


        else 
        { 
            $source = $source -> main_source_2();

              $_SESSION['source2'] = array(
                $_POST['opcja_1_title'] => intval($_POST['opcja_1']) ,
                $_POST['opcja_2_title'] => intval($_POST['opcja_2']) ,
                $_POST['opcja_3_title'] => intval($_POST['opcja_3']) ,
                $_POST['opcja_4_title'] => intval($_POST['opcja_4']) ,
                $_POST['opcja_5_title'] => intval($_POST['opcja_5']) ,
            );
           
        }

            if ($source == 4) 
        {
            $db_source = 'main_apps_rate';
            $gr = 2;
        }

            else
        {
            $db_source = 'main_tools_rate'; 
            $gr = 1;
        }

?> 


<?php global $main_tool; ?>

<?php
    function post_source_rate(){ 
        try {
            global $source, $db_source, $session_id, $gr;
            $source_num = $_SESSION['source_number'];

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
            $db = DB::getInstance();
            DB::setCharsetEncoding();
            

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $db->prepare("INSERT INTO $db_source (session_id, source, source_num, opcja_1, opcja_2, opcja_3, 
                                            opcja_4, opcja_5, opcja_1_title, opcja_2_title, 
                                            opcja_3_title, opcja_4_title, opcja_5_title)  
                                VALUES ('$session_id','$source', '$source_num', '$opcja_1', '$opcja_2', 
                                        '$opcja_3', '$opcja_4', '$opcja_5', '$opcja_1_title', 
                                        '$opcja_2_title', '$opcja_3_title', '$opcja_4_title', '$opcja_5_title')");
            $sql->execute(array(
                "session_id" => $session_id,
                "source" => $source,
                "source_num" => $source_num,   
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
           $db = null;
        }

        if (isset($_POST['send'])) { post_source_rate(); }  
        else { echo "error";} 
        
        $db = DB::getInstance();
        DB::setCharsetEncoding();

        $sql = $db->prepare("UPDATE user SET grade$source_num = $gr WHERE session_id like '$session_id'");
        $sql->execute(array( "session_id" => $session_id));
    ?>

    <?php
         if($_SESSION['source_number'] == 2) 
        { 
            echo "<script> window.location = '../main_source_expect.php'</script>"; 
        }
        else 
        { 
            echo "<script> window.location = '../main_tool_2.php'</script>"; 
        } 
    ?>
