


          
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ankieta www.sandensmp.pl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/popper.min.js"></script>      
    <script src="js/jquery.3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {margin: 40vh auto;}
         #myProgress {
                         width: 100%;
                         background-color: #ddd;
                    }

        #myBar      {
                        width: 1%;
                        height: 1px;
                        background-color: #4CAF50;
                    }            
    </style>

</head>

    <div>    
        <div id="myBar"></div>
    </div>
<br>


<script>

  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width=width+0.339; 
      elem.style.width = width + '%'; 
    }
  }

</script>

<!--
<script type="text/javascript">
  window.setTimeout(function(){     
        // Move to a new location or you can do something else
        window.location.href = "http://system";
    }, 3000);// czasprzejsćia na strone głowną 
</script> -->

    <div class="container" align="middle" >
        <div class="alert alert-danger" role="alert">
            <h6 class="alert-heading">Proszę korzystać z przeglądarki Google Chrome</h6>
                <hr>
                <a href="http://system" class="btn btn-primary" role="button">Przejdż do system </a>
   
        </div>
    </div>

    
