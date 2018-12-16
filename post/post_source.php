    <?php 
        require "../head.php";
        require "../db_connection.php";
    ?>

    <?php
        function post_source(){
            try {
            global $conn, $session_id;

            $zarzad = $_POST['zarzad'];
            $przylozony = $_POST['przylozony'];  
            $dzial = $_POST['dzial'];
            $inny_dzial = $_POST['inny_dzial'];
            $baza_danych = $_POST['baza_danych'];
            $total = $_POST['total'];


            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("INSERT INTO source ( session_id ,zarzad, przylozony, dzial, inny_dzial, baza_danych, total)  
                                    VALUES ( '$session_id' ,'$zarzad', '$przylozony', '$dzial', '$inny_dzial', '$baza_danych', '$total')");
        
            $sql->execute(array(    
                "session_id" => $session_id, 
                "zarzad" => $zarzad,
                "przylozony" => $przylozony,
                "dzial" => $dzial, 
                "inny_dzial" => $inny_dzial,
                "baza_danych" => $baza_danych,
                "total" => $total)); 
        
            }
                catch(PDOException $e)
            {
                print_r($sql) . "<br>" . $e->getMessage();
            }
                $conn = null;
        }

        if (isset($_POST['send'])) { post_source();}  
        else { echo "error";}     
    ?>


    <?php echo "<script> window.location = '../source_rate.php'</script>"; ?>
