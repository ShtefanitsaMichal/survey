<?php 
    require "../head.php";
    require "../db_connection.php";
?>

<?php
    function post_source_rate(){  
        try {
        global $conn, $session_id;

        $zarzad = $_POST['zarzad'];
        $przylozony = $_POST['przylozony'];  
        $dzial = $_POST['dzial'];
        $inny_dzial = $_POST['inny_dzial'];
        $baza_danych = $_POST['baza_danych'];

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO source_rate (session_id ,zarzad, przylozony, dzial, inny_dzial, baza_danych) VALUES ('$session_id', '$zarzad', '$przylozony', '$dzial', '$inny_dzial', '$baza_danych')");
     
        $sql->execute(array(
            "session_id" => $session_id,   
            "zarzad" => $zarzad,
            "przylozony" => $przylozony,
            "dzial" => $dzial, 
            "inny_dzial" => $inny_dzial,
            "baza_danych" => $baza_danych
        )); 

        }
            catch(PDOException $e)
        {
            print_r($sql) . "<br>" . $e->getMessage();  
        }
            $conn = null;
    }
    ?>

    <?php 
        if (isset($_POST['send'])) 
            { 
                //Przekierowanie do pliku 
                post_source_rate();
                echo "<script> window.location = '../main_tool_1.php'</script>";  
            }  
        else { echo "error";}  
    ?>

