<?php 
    
    require_once('head.php');
    session_unset();

    require_once('controller/dbConnect.php');

        function deleteDatas($table){
            
            global $session_id;
            
            $db = DB::getInstance();

            DB::setCharsetEncoding();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   

            $sql = $db->prepare( "DELETE FROM $table WHERE session_id like '$session_id'" );
            $sql->execute(array( "session_id" => $session_id,  ));
        }

        deleteDatas('user');
        deleteDatas('employee');
        deleteDatas('main_apps');
        deleteDatas('main_apps_rate');
        deleteDatas('main_tools');
        deleteDatas('main_tools_rate');
        deleteDatas('source');
        deleteDatas('source_expectation');
        deleteDatas('source_rate');

    echo "<script> window.location = 'index.php'</script>";
