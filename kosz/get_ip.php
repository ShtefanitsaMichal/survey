<?php
// Function to get the client IP address
	date_default_timezone_set('Europe/Warsaw');
	//data disiejsza
	function get_client_ip() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
	}

	$ip = get_client_ip();

	

//$today = date("m.d.y");
//$now = date("H.i.s");
//$ip = get_client_ip();
//$structure = './session';


// Desired folder structure
// tworzenie folderu dla operacij 
// to mkdir() must be specified.
/* if (!mkdir($structure, 0777, true)) {
//     die('Failed to create folders...');
 } */
// Treść pliku

//$txt = $ip."_".$now."_".$today;
//$myfile = fopen("./session/$txt.txt", "w") or die("Plik nie istnieje !");
	
//	fwrite($myfile, $txt);
//	fclose($myfile);

	//echo "log file was created";
?>