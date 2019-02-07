<?php

    require_once __ROOT__."/controller/dbConnect.php";
    require_once __ROOT__."/controller/GetController.php";

    class Post 
    {
        /**
         * Metod wysyłania metryczky do bazy danych
         *  
         */
        public function __constructor(){
           
        }

        /**
         * Czas i data ankietowania
         */
        public function survey_start(){
            $_SESSION['id'] = session_id();
            $_SESSION['survey_start_date'] = date('d.m.y');
            $_SESSION['survey_start_time'] = date('H:i:s');
        }

        /**
         * Wysyłka danych użytkownika do bazy danych 
         * 
         */
        public function post_employee(){

            try {
                global $session_id;

                $typ = $_POST['typ'];
                $wiek = $_POST['wiek'];  
                $stanowisko = $_POST['stanowisko'];
                $session_id = session_id();
                
              
                $_SESSION["employee"] = array(
                    "type"      => $typ,
                    "age"       => $wiek,
                    "position"  => $stanowisko
                );

                // set the PDO error mode to exception

                $db = DB::getInstance();
                DB::setCharsetEncoding();
                
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $db->prepare(  "INSERT INTO employee ( session_id, typ, wiek, stanowisko )  
                                        VALUES ( '$session_id', '$typ', '$wiek', '$stanowisko')");
                $sql->execute(array( 
                    "session_id" => $session_id, 
                    "typ" => $typ,
                    "wiek" => $wiek,
                    "stanowisko" => $stanowisko,));
            }

            catch(PDOException $e)
            {
                var_dump($sql) . "<br>" . $e->getMessage(); die;
                print_r($sql) . "<br>" . $e->getMessage();
                require_once "alert.php";
                $conn = null;
            }
                
                $sql = $db->prepare("UPDATE user SET q1 = 1 WHERE session_id like '$session_id'");
                $sql->execute(array( "session_id" => $session_id));
        }

        /**
         * Metod wysyłania 
         * Ranking Żródel total powinien wynie
         */
        function post_source(){
            global $servername, $dbname, $username, $password, $conn, $session_id;
          
            try {

                $zarzad = $_POST['zarzad'];
                $przelozony = $_POST['przelozony'];  
                $dzial = $_POST['dzial'];
                $inny_dzial = $_POST['inny_dzial'];
                $baza_danych = $_POST['baza_danych'];
                $total = $_POST['total'];


                $_SESSION['source_posted']['Rate'] = array(
                    'zarzad'            => intval($zarzad),
                    'przelozony_grad'   => intval($przelozony),
                    'dzial_grad'        => intval($dzial),
                    'inny_dzial_grad'   => intval($inny_dzial),
                    'baza_danych_grad'  => intval($baza_danych)
                );
                
                /**
                 * Database connection 
                 */
                $db = DB::getInstance();
                DB::setCharsetEncoding();
                
                $sql = $db->prepare("INSERT INTO source ( session_id ,zarzad, przelozony, dzial, inny_dzial, baza_danych, total)  
                                        VALUES ( '$session_id' ,'$zarzad', '$przelozony', '$dzial', '$inny_dzial', '$baza_danych', '$total')");
        
                $sql->execute(array(    
                    "session_id" => $session_id, 
                    "zarzad" => $zarzad,
                    "przelozony" => $przelozony,
                    "dzial" => $dzial, 
                    "inny_dzial" => $inny_dzial,
                    "baza_danych" => $baza_danych,
                    "total" => $total)); 
                }

                catch(PDOException $e)
                    { print_r($sql) . "<br>" . $e->getMessage(); die; }

                   

                    $sql = $db->prepare("UPDATE user SET q2 = 1 WHERE session_id like '$session_id'");
                    $sql->execute(array( "session_id" => $session_id));
                  

                    if (isset($_POST['send'])) 
                        { 
                           echo "<script> window.location = '../source_rate.php'</script>";
                        }  
                    else 
                        { echo "error";}
                    

                
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
                $przelozony = $_POST['przelozony'];  
                $dzial = $_POST['dzial'];
                $inny_dzial = $_POST['inny_dzial'];
                $baza_danych = $_POST['baza_danych'];
                
                $_SESSION['source_posted']['Grade'] = array(
                'zarzad_rate' =>     intval($zarzad),
                'przelozony_rate' => intval($przelozony),
                'dzia_rate' =>       intval($dzial),
                'inny_dzial_rate' => intval($inny_dzial),
                'baza_danych_rate' => intval($baza_danych)
                );

                
                // set the PDO error mode to exception
                $db = DB::getInstance();
                DB::setCharsetEncoding();

                $sql = $db->prepare("INSERT INTO source_rate (session_id ,zarzad, przelozony, dzial, inny_dzial, baza_danych) 
                                        VALUES ('$session_id', '$zarzad', '$przelozony', '$dzial', '$inny_dzial', '$baza_danych')");

                $sql->execute(array(
                    "session_id" => $session_id,   
                    "zarzad" => $zarzad,
                    "przelozony" => $przelozony,
                    "dzial" => $dzial, 
                    "inny_dzial" => $inny_dzial,
                    "baza_danych" => $baza_danych
                )); 

                }
                catch(PDOException $e)
                { print_r($sql) . "<br>" . $e->getMessage(); die;}

                $sql = $db->prepare("UPDATE user SET q3 = 1 WHERE session_id like '$session_id'");
                $sql->execute(array( "session_id" => $session_id));

                $conn = null;
               
            }


            /**
         * Metoda wysyłanie danych na server MySQL 
         * Ranking Applikacyj 
         * 
         */
        function post_apps(){
            try {
                global $servername, $dbname, $username, $password, $session_id; 

                $db = DB::getInstance();
                DB::setCharsetEncoding();
                $source_num = $_SESSION["source_number"];

                $ibm_lotus = $_POST['ibm_lotus'];
                $excel = $_POST['excel'];
                $access = $_POST['access'];
                $bpcs = $_POST['bpcs'];
                $intranet = $_POST['intranet'];
                $comarch = $_POST['comarch'];
                $zmt = $_POST['zmt'];
                $asseco = $_POST['asseco'];
                $qms = $_POST['qms'];
                $visualisation = $_POST['visualisation'];
                $sanden_vision = $_POST['sanden_vision'];
                $smp_web_page = $_POST['smp_web_page'];
                $facebook = $_POST['facebook'];
                $wf_mag = $_POST['wf_mag'];
                $sap = $_POST['sap'];
                $qda = $_POST['qda'];
                $parcel_warehouse = $_POST['parcel_warehouse'];
                $lessons_learned = $_POST['lessons_learned'];
                $dexperiance = $_POST['dexperiance'];
                $helpdesk = $_POST['helpdesk'];
                $inventory_range = $_POST['inventory_range'];
                $pydio = $_POST['pydio'];
                $sadec = $_POST['sadec'];
                $baza_sugestii = $_POST['baza_sugestii'];
                $month_news = $_POST['month_news'];
                $own_title = $_POST['own_title'];
                $own = $_POST['own'];
                $total = $_POST['total'];


                $_SESSION[$source_num.'Apps']['Rate'] = array(
                'grad_ibm_lotus'        => intval($ibm_lotus),
                'grad_excel'            => intval($excel),
                'grad_access'           => intval($access),
                'grad_bpcs'             => intval($bpcs),
                'grad_intranet'         => intval($intranet),
                'grad_comarch'          => intval($comarch),
                'grad_zmt'              => intval($zmt),
                'grad_asseco'           => intval($asseco),
                'grad_qms'              => intval($qms),
                'grad_visualisation'    => intval($visualisation),
                'grad_sanden_vision'    => intval($sanden_vision),
                'grad_smp_web_page'     => intval($smp_web_page),
                'grad_facebook'         => intval($facebook),
                'grad_wf_mag'           => intval($wf_mag),
                'grad_sap'              => intval($sap),
                'grad_qda'              => intval($qda),
                'grad_parcel_warehouse' => intval($parcel_warehouse),
                'grad_lessons_learned'  => intval($lessons_learned),
                'grad_dexperiance'      => intval($dexperiance),
                'grad_helpdesk'         => intval($helpdesk),
                'grad_inventory_range'  => intval($inventory_range),
                'grad_pydio'            => intval($pydio),
                'grad_sadec'            => intval($sadec),
                'grad_baza_sugestii'    => intval($baza_sugestii),
                'grad_month_news'       => intval($month_news),
                'grad_own_title'        => intval($own_title),
                'grad_own'              => intval($own),
                'grad_total'            => intval($total)
                );

           
               

                $sql = $db->prepare("INSERT INTO main_apps ( `session_id`, `source_num`, `ibm_lotus`, `excel`, `access`, `bpcs`, `intranet` ,`comarch` ,`zmt` ,`asseco` ,`qms` ,`visualisation`, 
                                                `sanden_vision`, `smp_web_page`, `facebook`, `wf_mag`, `sap`, `qda`, `parcel_warehouse`, `lessons_learned`, `dexperiance`, `helpdesk`,
                                                `inventory_range`, `pydio`, `sadec`, `baza_sugestii`, `month_news`, `own_title`, `own` ,total )  
                                VALUES ('$session_id', '$source_num', '$ibm_lotus', '$excel', '$access', '$bpcs', '$intranet', '$comarch', '$zmt', '$asseco', '$qms', '$visualisation', 
                                        '$sanden_vision', '$smp_web_page', '$facebook', '$wf_mag' ,'$sap', '$qda', '$parcel_warehouse', '$lessons_learned', '$dexperiance', 
                                        '$helpdesk', '$inventory_range', '$pydio', '$sadec', '$baza_sugestii', '$month_news','$own_title', '$own', '$total')");
                
                 $sql->execute( array( 
                    "source_num" => $source_num,
                    "session_id" => $session_id,
                    "ibm_lotus" => $ibm_lotus,
                    "excel" => $excel,
                    "access" => $access,
                    "bpcs" => $bpcs,
                    "intranet" => $intranet,
                    "comarch" => $comarch,
                    "zmt" => $zmt,
                    "asseco" => $asseco,
                    "qms" => $qms,
                    "visualisation" => $visualisation,
                    "sanden_vision" => $sanden_vision,
                    "smp_web_page" => $smp_web_page,
                    "facebook" => $facebook,
                    "wf_mag" => $wf_mag,
                    "sap" => $sap,
                    "qda" => $qda,
                    "parcel_warehouse" => $parcel_warehouse,
                    "lessons_learned" => $lessons_learned,
                    "dexperiance" => $dexperiance,
                    "helpdesk" => $helpdesk,
                    "inventory_range" => $inventory_range,
                    "pydio" => $pydio,
                    "sadec" => $sadec,
                    "baza_sugestii" => $baza_sugestii,
                    "month_news"=>$month_news,
                    "own_title" => $own_title,
                    "own" => $own,
                    "total" => $total)); 
            }

         catch(PDOException $e)
         { print_r($sql) . "<br>" . $e->getMessage(); die;}
            $conn = null; 
           
            $sql = $db->prepare("UPDATE user SET rate$source_num = 2 WHERE session_id like '$session_id'");
            $sql->execute(array( "session_id" => $session_id));
         } 
                    /*
                    * Metoda wysyłanie danych na server MySQL 
                    * Ranking Applikacyj 
                    * 
                    */
        function post_tools(){   

                $main_source = new GET(); 

                global $servername, $dbname, $username, $password, $session_id;

                $source_num = $_SESSION['source_number'];

                try {
                        if($_SESSION['source_number'] == '1')
                     {
                        $main_source = $main_source -> main_source_1();
                     } 
                     else 
                     {
                        $main_source = $main_source -> main_source_2();
                     }

                   
                    
                    $db = DB::getInstance();
                    DB::setCharsetEncoding();
                    
                     if (!isset($_POST['send']))
                        {
                            echo "Forma nie została wysłana metodą POST";
                        }
                     else 
                        {
                            
                            $source_num = $_SESSION['source_number'];
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
                            
                            $_SESSION['Tools'.$source_num]['Rate'] = array( 
                           'grad_phone' => intval($phone),
                           'grad_write' => intval($write),
                           'grad_face_to_face' => intval($face_to_face),
                           'grad_dept_meet' => intval($dept_meet),
                           'grad_prod_meet' => intval($prod_meet),
                           'grad_proj_meet' => intval($proj_meet),
                           'grad_budget_meet' => intval($budget_meet),
                           'grad_smp_d' => intval($smp_d),
                           'grad_smp_w' => intval($smp_w),
                           'grad_cs' => intval($cs),
                           'grad_unformal_meet' => intval($unformal_meet),
                           'own' => intval($own),
                           'own_title' => intval($own_title),
                           'total' => intval($total)
                            );

                         // set the PDO error mode to exception
                       
                         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                         $sql = $db->prepare("INSERT INTO main_tools 
                                            (`session_id`, `source_num`, `main_source`, `write`, `phone`, 
                                             `face_to_face`, `dept_meet`, `prod_meet`, 
                                             `proj_meet`, `budget_meet`, `smp_d`, 
                                             `smp_w`, `cs`, `unformal_meet`, 
                                             `own`, `own_title`, `total`)
                                                VALUES ('$session_id', '$source_num', '$main_source', '$write', '$phone', 
                                            '$face_to_face', '$dept_meet', '$prod_meet', 
                                            '$proj_meet', '$budget_meet', '$smp_d', 
                                            '$smp_w', '$cs', '$unformal_meet', 
                                            '$own', '$own_title', '$total');");

                         $sql->execute(array(
                                            "session_id" => $session_id,
                                            "source_num" => $source_num,
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
                                    }

                             catch(PDOException $e)
                        {
                             print_r($sql) . "<br> Błąd SQL <br>" . $e->getMessage();
                        }
                            $sql = $db->prepare("UPDATE user SET rate$source_num = 1 WHERE session_id like '$session_id'");
                            $sql->execute(array( "session_id" => $session_id));
                            var_dump($sql);
                            $db = null;
                        }

            public function post_json()
                { 
                    $ustr = array('\u0104','\u0106','\u0118','\u0141','\u0143','\u00d3','\u015a','\u0179','\u017b','\u0105','\u0107','\u0119','\u0142','\u0144','\u00f3','\u015b','\u017a','\u017c');
                    $plstr = array('Ą','Ć','Ę','Ł','Ń','Ó','Ś','Ź','Ż','ą','ć','ę','ł','ń','ó','ś','ź','ż');
                    
                    unset($_SESSION["session_id"]);
                    unset($_SESSION["source_number"]);

                    $json = str_replace($ustr,$plstr,json_encode($_SESSION));
                    
                    try {
                        // set the PDO error mode to exception

                        $db = DB::getInstance();
                        DB::setCharsetEncoding();

                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = $db->prepare(  "INSERT INTO json ( `json` ) VALUES ( '$json' )" );
                        $sql->execute(array( ));
                    }

                    catch(PDOException $e)
                    {
                        require_once "alert.php";
                    }

                    $file = fopen(__ROOT__.'/json/test.json', 'a');
                    fwrite($file, $json . PHP_EOL);
                    fclose($file);
                }
            
            public function post_expectation()
            {
                 try {
                        global $session_id;

                        $_SESSION['expec_zarzad'] = $_POST['zarzad'];
                        $_SESSION['expec_przelozony'] = $_POST['przelozony'];
                        $_SESSION['expec_dzial'] = $_POST['dzial'];
                        $_SESSION['expec_inny_dzial'] = $_POST['inny_dzial'];
                        $_SESSION['expec_baza_danych'] = $_POST['baza_danych'];

                        $_SESSION['survey_done_date'] = date("d.m.y");
                        $_SESSION['survey_done_time'] = date("H:i:s");

                        $zarzad = $_POST['zarzad'];
                        $przelozony = $_POST['przelozony'];  
                        $dzial = $_POST['dzial'];
                        $inny_dzial = $_POST['inny_dzial'];
                        $baza_danych = $_POST['baza_danych'];

                        $db = DB::getInstance();
                        DB::setCharsetEncoding();

                        // set the PDO error mode to exception
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $db->prepare("INSERT INTO source_expectation (session_id,  zarzad, przelozony, dzial, inny_dzial, baza_danych)  
                                            VALUES ('$session_id',  '$zarzad', '$przelozony', '$dzial', '$inny_dzial', '$baza_danych')");

                        $sql->execute(array(

                        "session_id" => $session_id,   
                        "zarzad" => $zarzad,
                        "przelozony" => $przelozony,
                        "dzial" => $dzial, 
                        "inny_dzial" => $inny_dzial,
                        "baza_danych" => $baza_danych,
                    ));  
                
                }
                    catch(PDOException $e)
                {
                    print_r($sql) . "<br>" . $e->getMessage();
                }

                $sql = $db->prepare("UPDATE user SET done = 1 WHERE session_id like '$session_id'");
                $sql->execute(array( "session_id" => $session_id));
                
                $db = null;
            }
        }




