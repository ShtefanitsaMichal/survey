<?php

    require __ROOT__."/controller/dbConnectController.php";
    require __ROOT__."/controller/GetController.php";

    class Post extends dbConnect 
    {



        /**
         * Metod wysyłania metryczky do bazy danych
         *  
         */
        public function post_employee(){ 
            global $servername, $dbname, $username, $password;
            
            try {
                

                $typ = $_POST['typ'];
                $wiek = $_POST['wiek'];
                $stanowisko = $_POST['stanowisko'];
                $session_id = session_id();
                
                $_SESSION['source'] = 0;
                $_SESSION['employee'] = array(
                                                'typ' => $typ, 
                                                '$stanowisko' => $stanowisko, 
                                                'wiek' => $wiek 
                                            );

                $conn = new pdo( "mysql:host=$servername;dbname=$dbname", $username, $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));                              
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $conn->prepare(  
                
                "INSERT INTO employee (session_id, typ, wiek, stanowisko )  
                VALUES ( '$session_id', '$typ', '$wiek', '$stanowisko')");

                $sql->execute(array( 
                    "session_id" => $session_id, 
                    "typ" => $typ,
                    "wiek" => $wiek,
                    "stanowisko" => $stanowisko,));
            }
            
            catch(PDOException $e)
            {
                print_r($sql) . "<br>" . $e->getMessage();
                require_once "alert.php";
                $conn = null;
            }    
        }


        /**
         * Metod wysyłania 
         * Ranking Żródel total powinien wynie
         * 
         */
        function post_source(){
            global $servername, $dbname, $username, $password, $conn, $session_id;

            try {

            $zarzad = $_POST['zarzad'];
            $przylozony = $_POST['przylozony'];  
            $dzial = $_POST['dzial'];
            $inny_dzial = $_POST['inny_dzial'];
            $baza_danych = $_POST['baza_danych'];
            $total = $_POST['total'];

            $_SESSION['source_grad'] = array(
                            'zarzad' => $zarzad, 
                            'przylozony' => $przylozony, 
                            'dzial' => $dzial,
                            'inny_dzial' => $inny_dzial,
                            'baza_danych' => $baza_danych
                        );
            $conn = new pdo( "mysql:host=$servername;dbname=$dbname", $username, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("INSERT INTO source ( session_id ,zarzad, przylozony, dzial, inny_dzial, baza_danych, total)  
                                    VALUES ( '$session_id' ,'$zarzad', '$przylozony', '$dzial', '$inny_dzial', '$baza_danych', '$total')");
        
            $sql->execute(array(    
                "session_id" => $session_id, 
                "zarzad" => $zarzad,
                "przylozony" => $przylozony,
                "dzial" => $dzial, 
                "inny_dzial" => $inny_dzial,
                "baza_danych" => $baza_danych,
                "total" => $total)); 
        
            }
                catch(PDOException $e)
            {
                print_r($sql) . "<br>" . $e->getMessage();
            }
                $conn = null;
                
                if (isset($_POST['send'])) { echo "<script> window.location = '../source_rate.php'</script>";}  
                else { echo "error";}     
            }



            /**
             * Metod wysyłania 
             * Ranking Żródel total powinien wynieśc
             * 
             */
            public function post_source_rate(){  
            try {
                
                global $servername, $dbname, $username, $password, $conn, $session_id;

                $zarzad = $_POST['zarzad'];
                $przylozony = $_POST['przylozony'];  
                $dzial = $_POST['dzial'];
                $inny_dzial = $_POST['inny_dzial'];
                $baza_danych = $_POST['baza_danych'];

                $_SESSION['source_rate'] = array(
                            'zarzad' => $zarzad, 
                            'przylozony' => $przylozony, 
                            'dzial' => $dzial,
                            'inny_dzial' => $inny_dzial,
                            'baza_danych' => $baza_danych);

                // set the PDO error mode to exception
                $conn = new pdo( "mysql:host=$servername;dbname=$dbname", $username, $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $sql = $conn->prepare("INSERT INTO source_rate (session_id ,zarzad, przylozony, dzial, inny_dzial, baza_danych) 
                                        VALUES ('$session_id', '$zarzad', '$przylozony', '$dzial', '$inny_dzial', '$baza_danych')");

                $sql->execute(array(
                    "session_id" => $session_id,   
                    "zarzad" => $zarzad,
                    "przylozony" => $przylozony,
                    "dzial" => $dzial, 
                    "inny_dzial" => $inny_dzial,
                    "baza_danych" => $baza_danych
                )); 

            }
                catch(PDOException $e)
            {
                print_r($sql) . "<br>" . $e->getMessage();  
            }
                $conn = null;
            }
     



        
        
            /**
<<<<<<< HEAD
         * Metoda wysyłanie danych na server MySQL 
         * Ranking Applikacyj 
         * 
         */
        function post_apps(){
            try {
                global $servername, $dbname, $username, $password, $session_id; 

                 $_SESSION['apps_grad'] = array(
                 "intranet" => $_POST['intranet'],
                 "comarch" => $_POST['comarch'],
                 "bpcs" => $_POST['bpcs'], 
                 "qms" => $_POST['qms'],
                 "sap" => $_POST['sap'],
                 "asseco" => $_POST['asseco'],
                 "sanden_vision" => $_POST['sanden_vision'],
                 "facebook" => $_POST['facebook'],
                 "smp_web_page" => $_POST['smp_web_page'],
                 "baza_sugestii" => $_POST['baza_sugestii'],
                 "sanden_month_news" => $_POST['sanden_month_news'],
                 "zmt" => $_POST['zmt'],
                 "parcel_warehouse" => $_POST['parcel_warehouse'],
                 "lessons_learned" => $_POST['lessons_learned'],
                 "own_title" => $_POST['own_title'],
                 "own" => $_POST['own'],
                 "total" => $_POST['total']);

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
                
                $intranet = $_POST['intranet'];
                $comarch = $_POST['comarch'];  
                $bpcs = $_POST['bpcs'];
                $qms = $_POST['qms'];
                $sap = $_POST['sap'];
                $asseco = $_POST['asseco'];
                $sanden_vision = $_POST['sanden_vision'];
                $facebook = $_POST['facebook'];
                $smp_web_page = $_POST['smp_web_page'];
                $baza_sugestii = $_POST['baza_sugestii'];
                $sanden_month_news = $_POST['sanden_month_news'];
                $zmt = $_POST['zmt'];
                $parcel_warehouse = $_POST['parcel_warehouse'];
                $lessons_learned = $_POST['lessons_learned']; 
                $own_title = $_POST['own_title'];
                $own = $_POST['own'];
                $total = $_POST['total'];
=======
             * Metoda wysyłanie danych na server MySQL 
             * Ranking Applikacyj 
             * 
             */
                function post_apps(){
                    try {
                        global $servername, $dbname, $username, $password, $session_id; 

                         $_SESSION['apps_grad'] = array(
                         "intranet" => $_POST['intranet'],
                         "comarch" => $_POST['comarch'],
                         "bpcs" => $_POST['bpcs'], 
                         "qms" => $_POST['qms'],
                         "sap" => $_POST['sap'],
                         "asseco" => $_POST['asseco'],
                         "sanden_vision" => $_POST['sanden_vision'],
                         "facebook" => $_POST['facebook'],
                         "smp_web_page" => $_POST['smp_web_page'],
                         "baza_sugestii" => $_POST['baza_sugestii'],
                         "sanden_month_news" => $_POST['sanden_month_news'],
                         "zmt" => $_POST['zmt'],
                         "parcel_warehouse" => $_POST['parcel_warehouse'],
                         "lessons_learned" => $_POST['lessons_learned'],
                         "own_title" => $_POST['own_title'],
                         "own" => $_POST['own'],
                         "total" => $_POST['total']);

                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
                        
                        $intranet = $_POST['intranet'];
                        $comarch = $_POST['comarch'];  
                        $bpcs = $_POST['bpcs'];
                        $qms = $_POST['qms'];
                        $sap = $_POST['sap'];
                        $asseco = $_POST['asseco'];
                        $sanden_vision = $_POST['sanden_vision'];
                        $facebook = $_POST['facebook'];
                        $smp_web_page = $_POST['smp_web_page'];
                        $baza_sugestii = $_POST['baza_sugestii'];
                        $sanden_month_news = $_POST['sanden_month_news'];
                        $zmt = $_POST['zmt'];
                        $parcel_warehouse = $_POST['parcel_warehouse'];
                        $lessons_learned = $_POST['lessons_learned']; 
                        $own_title = $_POST['own_title'];
                        $own = $_POST['own'];
                        $total = $_POST['total'];
>>>>>>> master

           
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $conn->prepare("INSERT INTO main_apps (`session_id` ,`intranet`, `comarch`, `bpcs`, `qms`, `sap`, `asseco`, `sanden_vision`, `facebook`, `smp_web_page`, `baza_sugestii`, `zmt`, `parcel_warehouse`, `lessons_learned`, `own_title` , `own`, `sanden_month_news`, `total` )  
                                VALUES ('$session_id' ,'$intranet', '$comarch', '$bpcs', '$qms', '$sap', '$asseco', '$sanden_vision', '$facebook', '$smp_web_page', '$baza_sugestii', '$zmt', '$parcel_warehouse', '$lessons_learned', '$own_title', '$own', '$sanden_month_news', '$total')");

                 $sql->execute( array(
                 "session_id" => $session_id,    
                 "intranet" => $intranet,
                 "comarch" => $comarch,
                 "bpcs" => $bpcs, 
                 "qms" => $qms,
                 "sap" => $sap,
                 "asseco" => $asseco,
                 "sanden_vision" => $sanden_vision,
                 "facebook" => $facebook,
                 "smp_web_page" => $smp_web_page,
                 "baza_sugestii" => $baza_sugestii,
                 "sanden_month_news" => $sanden_month_news,
                 "zmt" => $zmt,
                 "parcel_warehouse" => $parcel_warehouse,
                 "lessons_learned" => $lessons_learned,
                 "own_title" => $own_title,
                 "own" => $own,
                 "total" => $total )); 
            }

                    catch(PDOException $e)
                    {
                        print_r($sql) . "<br>" . $e->getMessage();
                    }
                        $conn = null;
<<<<<<< HEAD
                    } 
            
=======
                    }   
>>>>>>> master

                    /*
                    * Metoda wysyłanie danych na server MySQL 
                    * Ranking Applikacyj 
                    * 
                    */
<<<<<<< HEAD
            function post_tools()
            {   
                //require __ROOT__."/controller/dbConnectController.php";
                global $servername, $dbname, $username, $password, $session_id;

                 try {
                         if($_SESSION['source_number'] == '1')
                     {
                         $main_source = new GET(); 
                         $main_source -> main_source_1();
                     } 
                     else 
                     {
                         $main_source = main_source_2();
                     }
                         $phone = $_POST['phone'];  
                         $write = $_POST['write'];
                         $face_to_face = $_POST['face_to_face'];
                         $dept_meet = $_POST['dept_meet'];
                         $prod_meet = $_POST['prod_meet'];
                         $proj_meet = $_POST['proj_meet'];
                         $budget_meet = $_POST['budget_meet'];
                         $smp_d = $_POST['smp_d'];
                         $smp_w = $_POST['smp_w'];
                         $cs = $_POST['cs'];
                         $unformal_meet = $_POST['unformal_meet'];
                         $own = $_POST['own'];
                         $own_title = $_POST['own_title'];
                         $total = $_POST['total'];
                    
                         // set the PDO error mode to exception
                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );    
                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         $sql = $conn->prepare("INSERT INTO main_tools (`session_id`,`main_source`, `write`, `phone`, `face_to_face`, `dept_meet`, `prod_meet`, `proj_meet`, `budget_meet`, `smp_d`, `smp_w`,`cs`, `unformal_meet`, `own`, `own_title`, `total` )  
                                                 VALUES ('$session_id','$main_source' , '$write', '$phone', '$face_to_face', '$dept_meet', '$prod_meet', '$proj_meet', '$budget_meet', '$smp_d', '$smp_w','$cs' ,'$unformal_meet', '$own', '$own_title', '$total')");
                         $sql->execute(array(
                             
                             "session_id" => $session_id,
                             "main_source" => $main_source,    
                             "write" => $write,
                             "phone" => $phone,
                             "face_to_face" => $face_to_face, 
                             "dept_meet" => $dept_meet,
                             "prod_meet" => $prod_meet,
                             "proj_meet" => $proj_meet,
                             "budget_meet" => $budget_meet,
                             "smp_d" => $smp_d,
                             "smp_w" => $smp_w,
                             "cs" => $cs,
                             "unformal_meet" => $unformal_meet,
                             "own_title" => $own_title,
                             "own" => $own,
                             "total" => $total,
                             
                         ));       
                         }
                         
                             catch(PDOException $e)
                         {
                             print_r($sql) . "<br>" . $e->getMessage();
                         }
                             $conn = null;


    }
}


=======

                     public function post_tools(){
                         global $servername, $dbname, $username, $password, $session_id;

                            try {
                                    
                                    if($_SESSION['source_number'] == '1')
                                {
                                    $main_source = main_source_1();
                                } 
                                else 
                                {
                                    $main_source = main_source_2();
                                }

                            $phone = $_POST['phone'];  
                            $write = $_POST['write'];
                            $face_to_face = $_POST['face_to_face'];
                            $dept_meet = $_POST['dept_meet'];
                            $prod_meet = $_POST['prod_meet'];
                            $proj_meet = $_POST['proj_meet'];
                            $budget_meet = $_POST['budget_meet'];
                            $smp_d = $_POST['smp_d'];
                            $smp_w = $_POST['smp_w'];
                            $cs = $_POST['cs'];
                            $unformal_meet = $_POST['unformal_meet'];
                            $own = $_POST['own'];
                            $own_title = $_POST['own_title'];
                            $total = $_POST['total'];
                        
                            // set the PDO error mode to exception
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );    
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = $conn->prepare("INSERT INTO main_tools (`session_id`,`main_source`, `write`, `phone`, `face_to_face`, `dept_meet`, `prod_meet`, `proj_meet`, `budget_meet`, `smp_d`, `smp_w`,`cs`, `unformal_meet`, `own`, `own_title`, `total` )  
                                                    VALUES ('$session_id','$main_source' , '$write', '$phone', '$face_to_face', '$dept_meet', '$prod_meet', '$proj_meet', '$budget_meet', '$smp_d', '$smp_w','$cs' ,'$unformal_meet', '$own', '$own_title', '$total')");

                            $sql->execute(array(
                                
                                "session_id" => $session_id,
                                "main_source" => $main_source,    
                                "write" => $write,
                                "phone" => $phone,
                                "face_to_face" => $face_to_face, 
                                "dept_meet" => $dept_meet,
                                "prod_meet" => $prod_meet,
                                "proj_meet" => $proj_meet,
                                "budget_meet" => $budget_meet,
                                "smp_d" => $smp_d,
                                "smp_w" => $smp_w,
                                "cs" => $cs,
                                "unformal_meet" => $unformal_meet,
                                "own_title" => $own_title,
                                "own" => $own,
                                "total" => $total,
                                
                            ));       
                        
                            }
                                catch(PDOException $e)
                            {
                                print_r($sql) . "<br>" . $e->getMessage();
                            }
                                $conn = null;


                                        }

};
>>>>>>> master
