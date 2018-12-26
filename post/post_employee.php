<?php
    require_once "../head.php";
    require "../db_connection.php";

    function employee_session(){
        $_SESSION["survey_id"] = '';
        $_SESSION["source_number"] = 0;
        $_SESSION["employee"] = array('typ' =>  $_POST['typ'], 'wiek' =>  $_POST['wiek'], 'stanowisko' =>  $_POST['stanowisko'], 'data' => date());
    }


        function post_employee()
        { 
            try {
                global $conn;            
                $typ = $_POST['typ'];
                $wiek = $_POST['wiek'];  
                $stanowisko = $_POST['stanowisko'];
                $session_id = session_id();

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $conn->prepare(  "INSERT INTO employee ( session_id, typ, wiek, stanowisko )  
                                        VALUES ( '$session_id', '$typ', '$wiek', '$stanowisko')");
                $sql->execute(array( 
                    "session_id" => $session_id, 
                    "typ" => $typ,
                    "wiek" => $wiek,
                    "stanowisko" => $stanowisko,));
            }
            
            catch(PDOException $e)
            {
                var_dump($sql) . "<br>" . $e->getMessage();
                print_r($sql) . "<br>" . $e->getMessage();
                require_once "alert.php";
                $conn = null;
            }    
        }
    // if form was posted run function post_employee()
         
    if (
        isset($_POST['send'])) { post_employee();
        echo "<script> window.location = '../source.php'</script>";
        }
    else { echo "Forma nie została wysłana ponieważ - ponieważ wysyłanie nie zostało ukończone właściwy sposób";}     

?>

