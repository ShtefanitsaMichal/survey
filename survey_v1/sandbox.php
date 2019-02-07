<?php 
include "head.php";
include __ROOT__."/controller/dbConnect.php";
include __ROOT__."/controller/GetController.php";
include __ROOT__."/controller/PostController.php";

//session_start();

$_COOKIE["SMP_imp_survey"] = session_id();
$_SESSION["session_id"] = session_id();

$ustr = array('\u0104','\u0106','\u0118','\u0141','\u0143','\u00d3','\u015a','\u0179','\u017b','\u0105','\u0107','\u0119','\u0142','\u0144','\u00f3','\u015b','\u017a','\u017c');
$plstr = array('Ą','Ć','Ę','Ł','Ń','Ó','Ś','Ź','Ż','ą','ć','ę','ł','ń','ó','ś','ź','ż');
 
$json = str_replace($ustr,$plstr,json_encode($_SESSION));
print $json;
echo "<hr>";
var_dump($json);
echo "<hr>";
var_dump($_SESSION);

 

/* $file = fopen('json/test.json', 'a');
fwrite($file,$json . PHP_EOL);
fclose($file); */




/* print (json_encode($_SESSION, JSON_HEX_AMP));
echo "<hr>";
print (json_encode($_SESSION, JSON_PRETTY_PRINT));
 */



/* Marcin gajdziński
Zarząd  - W jaki sposób komunikujesz się z "Zarządem SMP"
Przełożony - W jaki sposób komunikujesz się z
 */



