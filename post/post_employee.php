<?php
    require_once "../head.php";
    require "../db_connection.php";

    class POST_EMPLOYEE{ 
        public function post_employee(){

        if (isset($_POST['send'])) 
            {       
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
                            
                $typ = $_POST['typ'];
                $wiek = $_POST['wiek'];  
                $stanowisko = $_POST['stanowisko'];
                $session_id = session_id();

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $conn->prepare("INSERT INTO employee ( session_id, typ, wiek, stanowisko)  VALUES ( '$session_id', '$typ', '$wiek', '$stanowisko')");

                var_dump($sql);
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
                }
                $conn = null;
                echo 'done';        
            }
            else {
                echo "Form was not sanded";
            }
        }
    }
        
    $post_employee = new POST_EMPLOYEE;
    $post_employee -> post_employee();



    ?>

    <?php //echo "<script> window.location = '../source.php'</script>"; ?>

  

  