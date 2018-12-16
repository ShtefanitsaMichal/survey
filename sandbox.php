
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

$opcja_1 = "comarch";

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

                                intranet: 0, 
                                comarch: 0,
                                bpcs: 0,
                                qms: 0,
                                sap: 0,
                                asseco: 0,
                                sanden_vision: 0,
                                facebook: 0,
                                smp_web_page: 0,
                                baza_sugestii: 0,
                                sanden_month_news: 0, 
                                zmt: 0,
                                parcel_warehouse: 0,
                                lessons_learned: 0,
                                own_title: '',
                                own: 0
                    }

    }

change_name($opcja_1);





