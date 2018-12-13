<?php include_once "./db_connection.php"; ?>
<?php include_once "./head.php"; ?>

    <?php 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT `intranet`,`comarch`,`bpcs`,`qms`,`sap`,`asseco`,`sanden_vision`,`facebook`,`smp_web_page`,`baza_sugestii`,`sanden_month_news`,`zmt`,`parcel_warehouse`,`lessons_learned`,`own` FROM main_apps WHERE `main_apps`.`session_id` = '$session_id' ORDER BY `main_apps`.`id` DESC";
        $get_all_data = $conn->prepare($sql);
        $get_all_data -> execute(array($sql));
        $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
        $main_apps = $all_row;
    
        $odpowiedz = array_slice($main_apps, 2, 5);
        $odpowiedz_int = array();
    
        arsort($main_apps);
            foreach ($main_apps as $key => $val) {
                //echo "$key = $val\n";
            }
       
        $conn = null;            	
    ?>
<hr>




