<?php 
        require_once "./head.php";
        require_once (__ROOT__."/controller/dbConnect.php");

        global $session_id;

        $db = DB::getInstance();
        DB::setCharsetEncoding();
        
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT `phone`,`write`,`face_to_face`,`dept_meet`,`prod_meet`,`proj_meet`,`budget_meet`,`smp_d`,`smp_w`,`cs`,`unformal_meet`,`own` 
                FROM main_tools 
                WHERE `main_tools`.`session_id` = '$session_id' 
                ORDER BY `main_tools`.`id` DESC LIMIT 1";

        $get_all_data = $db->prepare( $sql );
        $get_all_data -> execute(array( $sql ) );
        $all_row = $get_all_data->fetch( PDO::FETCH_ASSOC ); 
        $main_tools = $all_row;
 
        arsort($main_tools);

        foreach ($main_tools as $key => $val) {
                return "$key = $val\n";
        }

        $db = null;