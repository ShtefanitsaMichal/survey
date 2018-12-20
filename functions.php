<?php 
     global $main_apps;

    function db_connection()
        {
        } 

    function globals()
        {
            global $username, $servername, $password, $dbname, $conn;
        };

    function change_name($string) 
        {
            switch ($string) 
            {
                case "intranet" :echo  "Intranet portal"; break;
                case "sanden_vision" :echo  "Sanden Vision"; break;
                case "comarch" :echo  "Comarch ECM"; break;
                case "bpcs" :echo "BPCS"; break;
                case "qms" :echo "QMS"; break;
                case "sap" :echo "SAP"; break;
                case "asseco" :echo "Asseco"; break;
                case "facebook" :echo "Facebook"; break;
                case "smp_web_page" :echo "Strona Internetowa"; break;
                case "baza_sugestii" :echo "Baza sugestii"; break;
                case "sanden_month_news" :echo "Sanden monthly news"; break;
                case "zmt" :echo "ZMT"; break;
                case "parcel_warehouse" :echo "Magazyn Paczek"; break;
                case "lessons_learned" :echo "Baza doświadczeń"; break;
                case "own" :echo "Opcja wlasna"; break;
                case "phone" :echo "Kontakt Telefoniczny"; break;
                case "write" :echo "Mail"; break;
                case "face_to_face" :echo "Bezpośrednia rozmowa"; break;
                case "dept_meet" :echo "Spotkanie działowe"; break;
                case "prod_meet" :echo "Spotkanie produkcyjne"; break;
                case "proj_meet" :echo "Spotkanie projektowe"; break;
                case "budget_meet" :echo "Spotkanie budgetowe"; break;
                case "smp_d" :echo "SMP-D"; break;
                case "smp_w" :echo "SMP-W"; break;
                case "cs" :echo "Challenge Sheet"; break;
                case "unformal_meet" :echo "Spotkanie nie formalne"; break;  
            }
        }

    function if_own($opcja_1, $string)
        { 
            if($opcja_1 = $string) 
                {
                    $opcja_1 = $main_apps['own_title'];
                    echo $opcja_1;
                } 
                    else 
                {
                    echo change_name($opcja_1);
                }
        }   
?>