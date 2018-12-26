<?php 
  // Start the session
    session_start();

    $session_id = session_id(); 
    echo "head connected"
?>


<?php
  define('__ROOT__', dirname(__FILE__)); 
?>

<script>
  var isIE = /*@cc_on!@*/false || !!document.documentMode, // Internet Explorer 6-11
  isEdge = !isIE && !!window.StyleMedia; // Edge 20+
  
  // Check if Internet Explorer 6-11 OR Edge 20+
  if(isIE || isEdge) {
     //alert("Niestety dana ankieta nie działa w przeglądarce Internet Explorer");
    window.location = "http://system/ankiety/improvement_of_communication/not_supported.php";
  }
</script>
  
<head>
    <!--[if IE 10 ]>
    <script>
      alert("Niestety dana ankieta nie działa w przeglądarce Internet Explorer");
      window.location = "https://system";
    </script>
  <![endif]-->

  <!--[if lt IE 10 ]>
    <script>
      alert("Niestety dana ankieta nie działa w przeglądarce Internet Explorer");
      window.location = "https://system";
    </script>
  <![endif]-->


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ankieta www.sandensmp.pl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/popper.min.js"></script>      
    <script src="js/jquery.3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    
    <script src="js/vue.js"></script>

  <!-- CDN Bootstrap connection -->  
  <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  -->

</head>









