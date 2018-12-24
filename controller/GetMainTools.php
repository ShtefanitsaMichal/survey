<?php 

    class GetMain {

        public function __construct() {


            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            /**
             * SQL queries form array $SQL => main tools
             */

            $sql = $SQL['main_tool'];
            $get_all_data = $conn->prepare($sql);
            $get_all_data -> execute(array($sql));
            $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
            $main_tools = $all_row;
            
            $odpowiedz = array_slice($main_tools, 2, 5);
            $odpowiedz_int = array();
            
            arsort($main_tools);
            
            foreach ($main_tools as $key => $val) 
            {
                echo "$key = $val\n";
            }
            
            $conn = null;


        }

    }


?>