<?php

include_once "./head.php";

class Get_Tools {

    public function __construct(){}

    public function main_apps(){

        global $session_id;

        $db = DB::getInstance();
        DB::setCharsetEncoding();

        $sql = "SELECT  
                    `intranet`,`comarch`,`bpcs`,`qms`,`sap`,`asseco`,`sanden_vision`,`facebook`,
                    `smp_web_page`,`baza_sugestii`,`sanden_month_news`,`zmt`,`parcel_warehouse`,
                    `lessons_learned`,`own`,`own_title` 
                FROM main_apps 
                WHERE `main_apps`.`session_id` = '$session_id' 
                ORDER BY `main_apps`.`id` DESC";

        $get_all_data = $db->prepare($sql);
        $get_all_data -> execute(array($sql));
        $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 


        $main_apps = $all_row;

        $db = null;
        arsort($main_apps);

        

        $odpowiedz1 = array_slice($main_apps, 0, 1);
        $odpowiedz2 = array_slice($main_apps, 1, 1);
        $odpowiedz3 = array_slice($main_apps, 2, 1);
        $odpowiedz4 = array_slice($main_apps, 3, 1);
        $odpowiedz5 = array_slice($main_apps, 4, 1);

        $odp_int = array(
            1 => $odpowiedz1, 
            2 => $odpowiedz2, 
            3 => $odpowiedz3, 
            4 => $odpowiedz4, 
            5 => $odpowiedz5
        );
        $odp_int = json_encode($odp_int);
        return $odp_int;

      
    }
}