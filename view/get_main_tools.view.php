<?php include_once "./db_connection.php"; ?>
<?php include_once "./head.php"; ?>
    

    <?php 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT `phone`,`write`,`face_to_face`,`dept_meet`,`prod_meet`,`proj_meet`,`budget_meet`,`smp_d`,`smp_w`,`cs`,`unformal_meet`,`own` 
                FROM main_tools 
                WHERE `main_tools`.`session_id` = '$session_id' 
                ORDER BY `main_tools`.`id` DESC";

        $get_all_data = $conn->prepare($sql);
        $get_all_data -> execute(array($sql));
        $all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
        $main_tools = $all_row;

        $odpowiedz = array_slice($main_tools, 2, 5);
        $odpowiedz_int = array();

        arsort($main_tools);

            foreach ($main_tools as $key => $val) 
            {
                return "$key = $val\n";
            }

        $conn = null;            	
    ?>






