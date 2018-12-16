<?php 
    define('__ROOT__', dirname(dirname(__FILE__))); 
    
    require_once(__ROOT__.'/head.php');
    require_once(__ROOT__.'/db_connection.php');
    require_once(__ROOT__.'/view/get_main_source.view.php');
?>

<?php    
    try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
           
            $intranet = $_POST['intranet'];
            $comarch = $_POST['comarch'];  
            $bpcs = $_POST['bpcs'];
            $qms = $_POST['qms'];
            $sap = $_POST['sap'];
            $asseco = $_POST['asseco'];
            $sanden_vision = $_POST['sanden_vision'];
            $facebook = $_POST['facebook'];
            $smp_web_page = $_POST['smp_web_page'];
            $baza_sugestii = $_POST['baza_sugestii'];
            $sanden_month_news = $_POST['sanden_month_news'];
            $zmt = $_POST['zmt'];
            $parcel_warehouse = $_POST['parcel_warehouse'];
            $lessons_learned =$_POST['lessons_learned']; 
            $own_title =$_POST['own_title'];
            $own = $_POST['own'];
            $total = $_POST['total'];


        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO main_apps (`session_id` ,`intranet`, `comarch`, `bpcs`, `qms`, `sap`, `asseco`, `sanden_vision`, `facebook`, `smp_web_page`, `baza_sugestii`, `zmt`, `parcel_warehouse`, `lessons_learned`, `own_title` , `own`, `sanden_month_news`, `total` )  
                                VALUES ('$session_id' ,'$intranet', '$comarch', '$bpcs', '$qms', '$sap', '$asseco', '$sanden_vision', '$facebook', '$smp_web_page', '$baza_sugestii', '$zmt', '$parcel_warehouse', '$lessons_learned', '$own_title', '$own', '$sanden_month_news', '$total')");
     
            $sql->execute(array(
            "session_id" => $session_id,    
            "intranet" => $intranet,
            "comarch" => $comarch,
            "bpcs" => $bpcs, 
            "qms" => $qms,
            "sap" => $sap,
            "asseco" => $asseco,
            "sanden_vision" => $sanden_vision,
            "facebook" => $facebook,
            "smp_web_page" => $smp_web_page,
            "baza_sugestii" => $baza_sugestii,
            "sanden_month_news" => $sanden_month_news,
            "zmt" => $zmt,
            "parcel_warehouse" => $parcel_warehouse,
            "lessons_learned" => $lessons_learned,
            "own_title" => $own_title,
            "own" => $own,
            "total" => $total    
    )); 
    ?>
   
    <?php
        }
        catch(PDOException $e)
        {
            print_r($sql) . "<br>" . $e->getMessage();
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

