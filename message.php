
<?php require_once "head.php" ?>
<?php require_once "db_connection.php" ?>
          
<head>
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
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Dziękujemy za wypełnienie ankiety!</h4>
                <p>Twoja ankieta została przyjęta</p>
                <hr>
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>" class="btn btn-default" role="button">Uzupełnij ankietę jeszcze raz </a>
        </div>
    </div>

    
