<?php 
    require_once "../db_connection.php";
    require_once "../view/get_main_source.view.php";
?>

<?php    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
        if($_SESSION['source_number'] == '1')
            {
                $main_source = main_source_1();
            } 
        else 
            {
                $main_source = main_source_2();
            }
        
        //var_dump($main_source);

        $phone = $_POST['phone'];  
        $write = $_POST['write'];
        $face_to_face = $_POST['face_to_face'];
        $dept_meet = $_POST['dept_meet'];
        $prod_meet = $_POST['prod_meet'];
        $proj_meet = $_POST['proj_meet'];
        $budget_meet = $_POST['budget_meet'];
        $smp_d = $_POST['smp_d'];
        $smp_w = $_POST['smp_w'];
        $cs = $_POST['cs'];
        $unformal_meet = $_POST['unformal_meet'];
        $own = $_POST['own'];
        $own_title = $_POST['own_title'];
        $total = $_POST['total'];
     
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO main_tools (`session_id`,`main_source`, `write`, `phone`, `face_to_face`, `dept_meet`, `prod_meet`, `proj_meet`, `budget_meet`, `smp_d`, `smp_w`,`cs`, `unformal_meet`, `own`, `own_title`, `total` )  
                                VALUES ('$session_id','$main_source' , '$write', '$phone', '$face_to_face', '$dept_meet', '$prod_meet', '$proj_meet', '$budget_meet', '$smp_d', '$smp_w','$cs' ,'$unformal_meet', '$own', '$own_title', '$total')");

        $sql->execute(array(
         
            
            "session_id" => $session_id,
            "main_source" => $main_source,    
            "write" => $write,
            "phone" => $phone,
            "face_to_face" => $face_to_face, 
            "dept_meet" => $dept_meet,
            "prod_meet" => $prod_meet,
            "proj_meet" => $proj_meet,
            "budget_meet" => $budget_meet,
            "smp_d" => $smp_d,
            "smp_w" => $smp_w,
            "cs" => $cs,
            "unformal_meet" => $unformal_meet,
            "own_title" => $own_title,
            "own" => $own,
            "total" => $total,
            
        ));       
        //var_dump($sql);    
        ?>

    <?php
        }
            catch(PDOException $e)
        {
            //var_dump($sql) . "<br>" . $e->getMessage();
                print_r($sql) . "<br>" . $e->getMessage();
            //require_once "alert.php";
        }
            $conn = null;

    ?>



    
<?php

    if($_SESSION['source_number'] == 2) 
    {    
        echo "<script> window.location = '../main_tool_2_rate.php'</script>";
    }
    else 
    {
        echo "<script> window.location = '../main_tool_1_rate.php'</script>";
    }
?>