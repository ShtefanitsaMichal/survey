<!-- Admin panel model  -->
<?php

if (!isset($_GET['typ']) || $_GET['typ'] == ''){$_GET['typ'] = '%';}
if (!isset($_GET['wiek']) || $_GET['wiek'] == ''){$_GET['wiek'] = '%';}
if (!isset($_GET['stanowisko']) || $_GET['stanowisko'] == ''){$_GET['stanowisko'] = '%';}

    function get_all_users(){
        global $db, $typ, $wiek, $stanowisko;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'users' From `employee`  
                where typ like '" . $_GET['typ'] . "' 
                and   wiek like '" . $_GET['wiek'] . "'
                and   stanowisko like '" . $_GET['stanowisko'] . "'";
       

        $get_all_users = $db->prepare( $sql );
        $get_all_users -> execute( array( $sql ) );
        $all_row = $get_all_users->fetch( PDO::FETCH_ASSOC ); 
        $all_users = $all_row;
        return intval($all_users['users']);
    }

     function get_all_direct(){
        global $db, $typ, $wiek, $stanowisko;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'direct' From `employee` where typ='direct' 
                and   wiek          like '" . $_GET['wiek'] . "'
                and   stanowisko    like '" . $_GET['stanowisko'] . "'";

        $get_all_direct = $db->prepare( $sql );
        $get_all_direct -> execute( array( $sql ) );
        $all_row = $get_all_direct->fetch( PDO::FETCH_ASSOC ); 
        $all_direct = $all_row;

        return $all_direct['direct'];
    }

    function get_all_indirect(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'indirect' From `employee` where typ='indirect'
                and   wiek          like '" . $_GET['wiek'] . "'
                and   stanowisko    like '" . $_GET['stanowisko'] . "'";

        $get_all_indirect = $db->prepare( $sql );
        $get_all_indirect -> execute( array( $sql ) );
        $all_row = $get_all_indirect->fetch( PDO::FETCH_ASSOC ); 
        $all_indirect = $all_row;

        return $all_indirect['indirect'];
    }

    function get_lt30(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'lt30' From `employee` where wiek='< 30'
                and   typ like '" . $_GET['typ'] . "'
                and   stanowisko like '" . $_GET['stanowisko'] . "'";

        $get_lt30 = $db->prepare( $sql );
        $get_lt30 -> execute( array( $sql ) );
        $all_row = $get_lt30->fetch( PDO::FETCH_ASSOC ); 
        $lt30 = $all_row;

        return $lt30['lt30'];
    }

     function get_gt30(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'gt30' From `employee` where wiek='> 30'
                and   typ like '" . $_GET['typ'] . "'
                and   stanowisko like '" . $_GET['stanowisko'] . "'";
        $get_gt30 = $db->prepare( $sql );
        $get_gt30 -> execute( array( $sql ) );
        $all_row = $get_gt30->fetch( PDO::FETCH_ASSOC ); 
        $gt30 = $all_row;

        return $gt30['gt30'];
    }

    function get_gt40(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'gt40' From `employee` where wiek='> 40'
                and   typ like '" . $_GET['typ'] . "'
                and   stanowisko like '" . $_GET['stanowisko'] . "'";

        $get_gt40 = $db->prepare( $sql );
        $get_gt40 -> execute( array( $sql ) );
        $all_row = $get_gt40->fetch( PDO::FETCH_ASSOC ); 
        $gt40 = $all_row;

        return $gt40['gt40'];
    }

    function get_specialist(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'specialist' From `employee` where stanowisko='Specjalista'
                                    and  typ like '" . $_GET['typ'] . "'
                                    and  wiek like '" . $_GET['wiek'] . "'";

        $get_specialist = $db->prepare( $sql );
        $get_specialist -> execute( array( $sql ) );
        $all_row = $get_specialist->fetch( PDO::FETCH_ASSOC ); 
        $specialist = $all_row;

        return $specialist['specialist'];
    }

    function get_pracownik(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'pracownik' From `employee` where stanowisko='Pracownik'
                                    and  typ like '" . $_GET['typ'] . "'
                                    and  wiek like '" . $_GET['wiek'] . "'";

        $get_pracownik = $db->prepare( $sql );
        $get_pracownik -> execute( array( $sql ) );
        $all_row = $get_pracownik->fetch( PDO::FETCH_ASSOC ); 
        $pracownik = $all_row;

        return $pracownik['pracownik'];
    }

    function get_supervisor(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'supervisor' From `employee` where stanowisko='supervisor'
                                    and  typ like '" . $_GET['typ'] . "'
                                    and  wiek like '" . $_GET['wiek'] . "'";

        $supervisor = $db->prepare( $sql );
        $supervisor -> execute( array( $sql ) );
        $all_row = $supervisor->fetch( PDO::FETCH_ASSOC ); 
        $supervisor = $all_row;

        return $supervisor['supervisor'];
    }

    function get_director(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'director' From `employee` where stanowisko='Kierownik'
                                    and  typ like '" . $_GET['typ'] . "'
                                    and  wiek like '" . $_GET['wiek'] . "'";

        $director = $db->prepare( $sql );
        $director -> execute( array( $sql ) );
        $all_row = $director->fetch( PDO::FETCH_ASSOC ); 
        $director = $all_row;

        return $director['director'];
    }

    function get_avg_source($x){

        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select 	AVG(zarzad) as zarzad,  AVG(przelozony) as 'przelozony', 
			                        AVG(dzial) as 'dzial', 
			                        AVG(inny_dzial) as 'inny_dzial', 
			                        AVG(baza_danych) as 'baza_danych' 
                                    FROM `source`
                left join employee
                ON source.session_id = employee.session_id
                where typ           like '" . $_GET['typ'] . "' 
                and   wiek          like '" . $_GET['wiek'] . "'
                and   stanowisko    like '" . $_GET['stanowisko'] . "'";

        $avg_source = $db->prepare( $sql );
        $avg_source -> execute( array( $sql ) );
        $all_row = $avg_source->fetch( PDO::FETCH_ASSOC ); 
        $avg_source = $all_row;

        return $avg_source[$x];
    }

    function get_avg_source_rate($x){

        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select 	AVG(zarzad) as zarzad,  AVG(przelozony) as 'przelozony', 
			                        AVG(dzial) as 'dzial', 
			                        AVG(inny_dzial) as 'inny_dzial', 
			                        AVG(baza_danych) as 'baza_danych' 
                                    FROM `source_rate`
                                    left join employee
                ON source_rate.session_id = employee.session_id
                where typ           like '" . $_GET['typ'] . "' 
                and   wiek          like '" . $_GET['wiek'] . "'
                and   stanowisko    like '" . $_GET['stanowisko'] . "'";

        $avg_source_rate = $db->prepare( $sql );
        $avg_source_rate -> execute( array( $sql ) );
        $all_row = $avg_source_rate->fetch( PDO::FETCH_ASSOC ); 
        $avg_source_rate = $all_row;

        return $avg_source_rate[$x];
    }

    function get_avg_tools($tool, $source){
        /**
         * $tool = string // jeden z zasobów komunikacji zasoby komunikacji 
         * $source = integer // od 0 do 4 [0 = Zarzade, 1 = przełożony, 2 = dzial, 3 = inny dzial];
         */
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT avg(`$tool`) as `value`
                FROM main_tools
                left join employee
                ON main_tools.session_id = employee.session_id
                where `main_source` like '$source'
                and   typ           like '" . $_GET['typ'] . "' 
                and   wiek          like '" . $_GET['wiek'] . "'
                and   stanowisko    like '" . $_GET['stanowisko'] . "'";

        $avg_tools = $db->prepare( $sql );
        $avg_tools -> execute( array( $sql ) );
        $all_row = $avg_tools->fetch( PDO::FETCH_ASSOC ); 
        $avg_tools = $all_row;
        
        return $avg_tools['value'];
    }

    function get_avg_apps($apps){

       
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "select Distinct(employee.session_id) as employee,
                avg(`ibm_lotus`) as `ibm_lotus`,
                avg(`excel`) as `excel`,
                avg(`access`) as `access`,
                avg(`bpcs`) as `bpcs`,
                avg(`intranet`) as `intranet`,
                avg(`comarch`) as `comarch`,
                avg(`zmt`) as `zmt`,
                avg(`asseco`) as `asseco`,
                avg(`qms`) as `qms`,
                avg(`visualisation`) as `visualisation`,
                avg(`sanden_vision`) as `sanden_vision`,
                avg(`smp_web_page`) as `smp_web_page`,
                avg(`facebook`) as `facebook`,
                avg(`wf_mag`) as `wf_mag`,	
                avg(`sap`) as `sap`,
                avg(`qda`) as `qda`,
                avg(`parcel_warehouse`) as `parcel_warehouse`,
                avg(`lessons_learned`) as `lessons_learned`,
                avg(`dexperiance`) as `dexperiance`,
                avg(`helpdesk`) as `helpdesk`,
                avg(`inventory_range`) as `inventory_range`,
                avg(`pydio`) as `pydio`,
                avg(`sadec`) as `sadec`,
                avg(`baza_sugestii`) as `baza_sugestii`,
                avg(`month_news`) as `month_news`,
                avg(`own`) as `own`
            from employee
            left join main_apps
            ON employee.session_id = main_apps.session_id
            where typ like '" . $_GET['typ'] . "' 
            and   wiek like '" . $_GET['wiek'] . "'
            and   stanowisko like '" . $_GET['stanowisko'] . "'";
        
        

        $avg_apps = $db->prepare( $sql );
        $avg_apps -> execute( array( $sql ) );
        $all_row = $avg_apps->fetch( PDO::FETCH_ASSOC ); 
        $avg_apps = $all_row;
        
        return($avg_apps[$apps]);
    }


    
    
    /**
     * $table = ['app' or 'tool'] string 
     * $x = int from 1 to 5
     * $tool = use concreet tool or app string'system informatyczny'
     * $source = source // integer // [0 = zarzad, 1 = przełozony, 2 = dział, 3 = inny_dział, 4 = System in formatyczny]
     */
    function avg_tools_rate($table, $x, $tool, $source){

        global $db;
        
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql =  "SELECT AVG(`opcja_" . $x . "`) as 'value'
                FROM main_" . $table . "s_rate 
                WHERE `opcja_" . $x . "_title` LIKE '$tool' 
                AND `source` = " . $source . "";
       
        $apps_rate = $db->prepare( $sql );
        $apps_rate -> execute( array( $sql ) );
        $all_row = $apps_rate->fetch( PDO::FETCH_ASSOC ); 
        $apps_rate = $all_row;

        return (($apps_rate['value']));
    }

    

    /**
     */
    function source_expectation($source){

        global $db;
        
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql =  "select `zarzad` from source_expectation ";
       
        $source_expectation = $db->prepare( $sql );
        $source_expectation -> execute( array( $sql ) );
        $all_row = $source_expectation->fetchAll(PDO::FETCH_ASSOC); 
        $source_expectation = $all_row;

        return (($source_expectation['zarzad']));
    }


    function tools_oceny($number, $tool, $source) {
            global $db;
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql1 = "select Distinct(employee.session_id) as employee, 
                        AVG(main_tools_rate.opcja_".$number.") as t".$number."_grade,
                        main_tools_rate.opcja_".$number."_title as t".$number."_grade_title
                        from employee
                        left join main_tools_rate
                        ON employee.session_id = main_tools_rate.session_id 
                        where main_tools_rate.opcja_".$number." <> 0 
                        and main_tools_rate.opcja_".$number."_title like '".$tool."'
                        and main_tools_rate.source = ".$source."
                        and typ like '" . $_GET['typ'] . "' 
                        and wiek like '" . $_GET['wiek'] . "'
                        and stanowisko like '" . $_GET['stanowisko'] . "'";

            $get = $db->prepare($sql1);
            $get -> execute(array($sql1));
            $all_row = $get->fetchAll(PDO::FETCH_ASSOC);  
            return $all_row[0]['t'.$number.'_grade'];
    }

?>
