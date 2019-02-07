<?php 
        require_once "./head.php";
        require_once (__ROOT__."/controller/dbConnect.php" );

        global $session_id;

        $db = DB::getInstance();
        DB::setCharsetEncoding();
        
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT  `ibm_lotus`, `excel`, `access`, `bpcs`, `intranet` ,`comarch` ,`zmt` ,`asseco` ,`qms` ,`visualisation`, 
                        `sanden_vision`, `smp_web_page`, `facebook`, `wf_mag`, `sap`, `qda`, `parcel_warehouse`, `lessons_learned`, `dexperiance`, `helpdesk`,
                        `inventory_range`, `pydio`, `sadec`, `baza_sugestii`, `month_news`, `own` 
                FROM main_apps 
                WHERE `main_apps`.`session_id` = '$session_id' 
                ORDER BY `main_apps`.`id` DESC LIMIT 1";

        $get_all_data = $db->prepare( $sql );
        $get_all_data -> execute( array( $sql ) );
        $all_row = $get_all_data->fetch( PDO::FETCH_ASSOC ); 
        $main_apps = $all_row;

      
        arsort($main_apps);
       

        foreach ( $main_apps as $key => $val ) {
               return "$key = $val\n";
        }

        $db = null;






