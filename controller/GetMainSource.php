<?php define('__ROOT__', dirname(dirname(__FILE__)));  ?>
<?php require_once(__ROOT__."/head.php"); ?> 
<?php require_once(__ROOT__."/db_connection.php"); ?>

<?php

    class Get {
    
        public function get_main_source(){

    //Ktore z narzedzi / form informowania najczęściej wykorzystujesz w komunikacji z   
    define(0, "zarządem SMP");
    define(1, "bezpośrednim przyłożonym");
    define(2, "swoim działem");
    define(3, "pracownikami innego działu SMP");
    define(4, "systemy informatyczne");   
        
     try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM source WHERE `source`.`session_id` = '$session_id' ORDER BY `source`.`id` DESC" ;
            $get_all_data = $conn->prepare($sql);
            $get_all_data -> execute(array($sql));
            $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
            $source = $all_row;

            $odpowiedz_2 = array_slice($source, 2, 5);
            $odpowiedz_2_int = array();

            foreach ($odpowiedz_2 as $value) 
                {
                    $value = intval($value); 
                    $odpowiedz_2_int[] = $value;
                }
            $conn = null;
        }   
        catch (PDOException $e) { print_r($sql) . "<br>" . $e->getMessage(); 
        }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM source_rate WHERE `source_rate`.`session_id` = '$session_id' ORDER BY `source_rate`.`id` DESC" ;
        $get_all_data = $conn->prepare($sql);
        $get_all_data -> execute(array($sql));
        $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
        $source_rate = $all_row;
        
        // pobrania tylko samych odpowiedzi z bazy danych 
        $odpowiedz_3 = array_slice($source_rate, 2, 5);
        $odpowiedz_3_int = array();
            
        // przerobienia strig na integer
        foreach ($odpowiedz_3 as $value) 
            {
                $value = intval($value); 
                $odpowiedz_3_int[] = $value;
            }
        
    } catch (PDOException $e) 
    {
        print_r($sql) . "<br>" . $e->getMessage(); 
    }
        $conn = null;
    }
};