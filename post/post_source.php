    <?php 
        require_once "../head.php";
        require_once "../db_connection.php";
    ?>

    <?php
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
  
        $zarzad = $_POST['zarzad'];
        $przylozony = $_POST['przylozony'];  
        $dzial = $_POST['dzial'];
        $inny_dzial = $_POST['inny_dzial'];
        $baza_danych = $_POST['baza_danych'];
        $total = $_POST['total'];

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO source ( session_id ,zarzad, przylozony, dzial, inny_dzial, baza_danych, total)  VALUES ( '$session_id' ,'$zarzad', '$przylozony', '$dzial', '$inny_dzial', '$baza_danych', '$total')");

  
     
        $sql->execute(array(    
            "session_id" => $session_id, 
            "zarzad" => $zarzad,
            "przylozony" => $przylozony,
            "dzial" => $dzial, 
            "inny_dzial" => $inny_dzial,
            "baza_danych" => $baza_danych,
            "total" => $total)); 
      
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

         echo "<script> window.location = '../source_rate.php'</script>"; 

    ?>
