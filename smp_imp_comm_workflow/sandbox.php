<?php 
include "head.php";
include __ROOT__."/controller/dbConnect.php";
include __ROOT__."/controller/GetController.php";
include __ROOT__."/controller/PostController.php";

//session_start();
    
$_COOKIE["SMP_imp_survey"] = session_id();
$_SESSION["session_id"] = session_id();

$test = new GET;
$test -> main_source_2();



var_dump($_SESSION) ;
    echo "<hr>" ;



//kolejnośc systemów informatycznych / Aplikacje ;
//0. IBM Lotus Notes / Sametime ;
//1. Excel ;
//2. Bazy danych Access;
//3. BPCS;
//4. Intranet (system);
//4. Comarch ;
//5. ZMT;
//6. Asseco / Portal przełożonego
//7. QMS;
//8. Visualisation (Wizualizajca dancyh pomiarowych)
//9. Sanden Vision 
//10. Strona internetowa (sandesmp.pl)
//11. Facebook
//12. WF-MAG
//13. SAP
//14. QDA
//15. Magazyn przesyłek 
//16. Baza sugestii 
//17. Lessons learned
//18. 3D Expirience 
//19. Helpdesk 
//20. Inventory range
//21. System udostępniania plików 
//22. Sadec / Intrastat */

/* Marcin gajdziński
Zarząd  - W jaki sposób komunikujesz się z "Zarządem SMP"
Przełożony - W jaki sposób komunikujesz się z
 */



