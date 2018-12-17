
<?php 

class SESSION_CHECK 
{
    public function __construct(){

        require "db_connection.php";
        require "head.php";

        $sql = "select * from smp_communication_survey.employee where session_id = '$session_id'";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        
        $stmt = $conn -> prepare( $sql );
        $stmt -> bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);

        if ( !$row )
        {
            false;
            echo 'sesja z danym indytyficatorem nie istnieje' ;
        } 
            else
        {
            true;
            echo 'sesja z danym indytyficatorem <b>' . $row['session_id'] .  '</b> istnieje' ;
        }
    }    
}

//new SESSION_CHECK;   

$opcja_1 = "own_title";

    function change_name($opcja_1) {

                        switch ($opcja_1) {
                        case "intranet":
                            echo "Intranet portal";
                        break;
                        case "sanden_vision":
                            echo "Sanden Vision";
                        break;
                        case "comarch":
                            echo "Comarch ECM";
                        break;
                        case "bpcs":
                            echo"BPCS";
                            break;
                        case "qms":
                            echo"QMS";
                            break;
                        case "sap":
                            echo"SAP";
                            break;
                        case "asseco":
                            echo"Asseco";
                            break;
                        case "facebook":
                            echo"Facebook";
                            break;
                        case "smp_web_page":
                            echo"Strona Internetowa";
                            break;
                        case "baza_sugestii":
                            echo"Baza sugestii";
                            break;
                        case "sanden_month_news":
                            echo"Sanden monthly news";
                            break; 
                        case "zmt":
                            echo"ZMT";
                            break;
                        case "parcel_warehouse":
                            echo"";
                            break;
                        case "lessons_learned":
                            echo"Baza doświadczeń ";
                            break;
                        case "own_title":
                            echo"Opcją własna";
                            break;
                    }

    }

change_name($opcja_1);





