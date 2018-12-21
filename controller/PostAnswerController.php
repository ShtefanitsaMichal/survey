
<?php 

    class Post
    {
        public function post_employee()
        { 
            try {
                global $conn;

                $typ = $_POST['typ'];
                $wiek = $_POST['wiek'];
                $stanowisko = $_POST['stanowisko'];
                $session_id = session_id();
                
                $_SESSION['source'] = 0;
                $_SESSION['employee'] = array('typ' => $typ, '$stanowisko' => $stanowisko, 'wiek' => $wiek );

                // set the PDO error mode to exception

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = $conn->prepare(  
                
                "INSERT INTO employee ( session_id, typ, wiek, stanowisko )  
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

        public function post_source(){
        
            try {
            global $conn, $session_id;

            $zarzad = $_POST['zarzad'];
            $przylozony = $_POST['przylozony'];  
            $dzial = $_POST['dzial'];
            $inny_dzial = $_POST['inny_dzial'];
            $baza_danych = $_POST['baza_danych'];
            $total = $_POST['total'];

            $_SESSION['source'] = array(
                            'zarzad' => $zarzad, 
                            'przylozony' => $przylozony, 
                            'dzial' => $dzial,
                            'inny_dzial' => $inny_dzial,
                            'baza_danych' => $baza_danych
                        );

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
                
                if (isset($_POST['send'])) 
                { 
                    post_source();
                    echo "<script> window.location = '../source_rate.php'</script>";
                }  
                else { echo "error";}     
            }

        
    }
    