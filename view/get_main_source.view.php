    <?php 
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
    ?> 
    
    
    <?php include_once "$base_dir/db_connection.php"; ?>
    <?php include_once "$base_dir/head.php"; ?>

    <?php
        //Ktore z narzedzi / form informowania najczęściej wykorzystujesz w komunikacji z   
        define(0, "zarządem SMP");
        define(1, "bezpośrednim przyłożonym");
        define(2, "swoim działem");
        define(3, "innym działem SMP");
        define(4, "bazą danych");   
    ?>


    <?php 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM source WHERE `source`.`session_id` = '$session_id' ORDER BY `source`.`id` DESC" ;
        $get_all_data = $conn->prepare($sql);
        $get_all_data -> execute(array($sql));
        $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
        $source = $all_row;

        $odpowiedz_2 = array_slice($source, 2, 5);
        $odpowiedz_2_int = array();

            foreach ($odpowiedz_2 as $value) {
                $value = intval($value); 
                $odpowiedz_2_int[] = $value;
            }
                    /* $odpowiedz_2_int[0] -= 4.0;
                    $odpowiedz_2_int[1] -= 3.3;
                    $odpowiedz_2_int[2] -= 3.87;    
                    $odpowiedz_2_int[3] -= 3.9;
                    $odpowiedz_2_int[4] -= 3.45; */

                   
        $conn = null;            	
    ?>

    <?php 
        //Pobranie danych dla 2 pytanie 
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
        foreach ($odpowiedz_3 as $value) {
            $value = intval($value); 
            $odpowiedz_3_int[] = $value;
        }
        
        // Mnożenia odpowiedzi na pytania 2 i wage poszczegolnych żrodlo
            
        $conn = null					 
    ?>

<hr>

<?php  
        global $main_source;

        $main_source = [];
        //Procedura mnożenia odpowiedzi na pytania #2 i Pytania #3
        for ($i=0; $i < count($odpowiedz_2_int); $i++)         
            { 
                /* echo $odpowiedz_2_int[$i] * $odpowiedz_3_int[$i] . '<br>'; */
                $main_source[] = $odpowiedz_2_int[$i] * $odpowiedz_3_int[$i];
            }       
        $FirstMainSource = ''; 
        $SecondMainSource = '';
        

        //var_dump($main_source);

        function main_source_1()
            {

                global $main_source, $FirstMainSource;
                $main_source1 = $main_source;

                //Wyszukania na ktorej pozycji znajduję się maksymalnie znaczenie iloczynu 
                $max_int_key_1 = array_keys($main_source1, max($main_source1));
                $FirstMainSource = constant($max_int_key_1[0]);
                
                return $FirstMainSource;          
            };

        function main_source_2()
            {
                global $main_source, $SecondMainSource; 

                $main_source2 = $main_source;

                $test =  array_keys($main_source2, max($main_source2));

                $main_source2[$test[0]] = 0; 

           

                    //Wyszukania na ktorej pozycji znajduję się maksymalnie znaczenie iloczynu 
                    $max_int_key_2 = array_keys($main_source2, max($main_source2));
                    $SecondMainSource = constant($max_int_key_2[0]);

                return $SecondMainSource;
            };
            

           /*var_dump($odpowiedz_2_int);
             var_dump($odpowiedz_3_int);

             var_dump($main_source);

             var_dump(main_source_1());
             var_dump(main_source_2()); */

    ?>
