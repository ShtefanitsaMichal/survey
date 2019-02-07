<?php require_once(__ROOT__."/head.php"); ?> 
<?php require_once(__ROOT__."/controller/dbConnect.php"); ?>

<?php

 //$FirstMainSource = '';
 //$SecondMainSource = '';

    class Get{
        function __construct(){

            define(0, "zarzadem SMP");
            define(1, "bezposrednim przelozonym");
            define(2, "swoim dzialem");
            define(3, "pracownikami innego dzialu SMP");
            define(4, "systemy informatyczne");
        }
        public function source(){

            global $session_id;
            /**
             * pobieranie odpowiedzi na 2 pytanie 
             */
            try 
                {   
                //data base connection
                $db = DB::getInstance();
                DB::setCharsetEncoding();
                
                    $sql = "SELECT * FROM source WHERE `source`.`session_id` = '$session_id' ORDER BY `source`.`id` desc" ;

                    $get_all_data = $db->prepare($sql);
                    $get_all_data -> execute(array($sql));
                    

                    $source = $get_all_data->fetch(PDO::FETCH_ASSOC);     //Query data`s from source with date and ID 
                    
                    $odpowiedz = array_slice($source, 2, 5);              //Query data`s from source without data and ID

                    $odpowiedz_int = array();                             //Declare variable 


                    foreach ($odpowiedz as $value)                        //Converting values titles to position number
                    {
                        $value = intval($value); 
                        $odpowiedz_int[] = $value;
                    }

                    $db = null;                                           // Data base closing 
                }

            catch (PDOException $e) 
                    {
                        print_r($sql) . "<br>" . $e->getMessage(); 
                    }
            return $odpowiedz_int;                                        //return position with values (for example pos 1 = 1 => 46)
        }
        public function source_rate(){
            global $session_id;
            /**
             * Pobieranie odpowiedzi na 3 pytanie 
            */
            try 
                {
                
                //data base connection
                $db = DB::getInstance();
                DB::setCharsetEncoding();

                $sql = "SELECT * FROM source_rate WHERE `source_rate`.`session_id` = '$session_id' ORDER BY `source_rate`.`id` DESC LIMIT 1 ";

                $get_all_data = $db->prepare($sql);
                $get_all_data -> execute(array($sql));
                $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
                $source_rate = $all_row;
                
                
                // pobrania tylko samych odpowiedzi z bazy danych 
                $odpowiedz = array_slice($source_rate, 2, 5);
                $odpowiedz_int = array();

                
                // przerobienia strig na integer
                foreach ($odpowiedz as $value) 
                {
                    $value = intval($value); 
                    $odpowiedz_int[] = $value;
                }
                } 
                catch (PDOException $e) 
                {
                    print_r($sql) . "<br>" . $e->getMessage(); 
                }
                $db = null;
                
                return $odpowiedz_int;
               
        }
        public function main_source_1(){

            $main_source1 = $this -> source_counting();                     //Pobieranie danych z methody counting

            $max_int_key_1 = array_keys($main_source1, max($main_source1)); //Wyszukania na Której pozycji znajduję się maksymalnie znaczenie iloczynu

            $FirstMainSource = $max_int_key_1[0];                 //Pobieranie z konstruktora nazwe źródła

            $_SESSION['main_source_1'] = $FirstMainSource;                  //Przypisywanie do zmiennej sessii odzyskaną wartośc
         
            return $FirstMainSource;
        }
        public function main_source_2(){


            $main_source = $this -> source_counting();                      //Pobieranie danych z methody counting

            $max_int_key = array_keys($main_source, max($main_source));     //Wyszukania na Której pozycji znajduję się maksymalnie znaczenie iloczynu

            unset($main_source[$max_int_key[0]]);                           //Kasowanie żródła z maksymalnym znaczeniem  

            $max_int_key = array_keys($main_source, max($main_source));     //Ponowne wyszukania na Której pozycji znajduję się maksymalnie znaczenie iloczynu
            
            $SecondMainSource = $max_int_key[0];                  //Pobieranie z konstruktora nazwe źródła

            $_SESSION['main_source_2'] = $SecondMainSource;                 //Przypisywanie do zmiennej sessii odzyskaną wartośc

            return $SecondMainSource;
        }
        public function source_counting(){
            
            $odp2 = $this -> source();
            $odp3 = $this -> source_rate();
            /** 
             * Procedura mnożenia odpowiedzi na pytania "source.php" i Pytania "rate_source.php"
             */
            for ($i=0; $i < count($odp2); $i++)
            { 
                $main_source[] = $odp2[$i] * $odp3[$i];
            }
            return $main_source ;
        }
}
