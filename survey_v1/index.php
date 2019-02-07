<?php  
    require_once "head.php";
    //require_once ( __ROOT__."/view/alerts/404.php" ); die; 
    require_once "view/navbar.view.php";  

    //Zmienna domyślna która się zmienia po odpowiedziach uzytkownika na pierwsze źródło 
    $_SESSION["source_number"] = 1;
?>



<style>
  .jumbotron
{
  background: url(media/wallpaper.jpg);
  background-size: contain;
  background-repeat: no-repeat;
  background-position: right;  
  background-color: white;
  min-height: 500px;
}

</style>
  <?php 
    if ( !isset ( $_SESSION["survey_start_date"] ))
    { 
      ?>
        <div class="alert alert-info" role="alert">
          Jeszcze nie wypełniałeś ankiety
        </div>
      <?php
    } else {
     ?>
        <div class="alert alert-warning" role="alert">
         Już wypełniałeś ankiete 
        </div>
      <?php
    }

    if( isset ( $_SESSION["employee"] ))
    {
      require_once ( __ROOT__."/view/alerts/already_done.php" );
      die;
    } 
  ?>
  <div class="container" style="margin: 15vh auto;">
   <h1 class="display-4 col-5 offset-5"> Ankieta </h1>
    <div class="jumbotron" >
      <h2 class="col-8"> Poprawa komunikacji w SMP</h2>
          <p class="col-6">Ankieta została przygotowana w ramach projektu SGA, celem jest poprawa komunikacji grupy indirect,</p>
          <br>
          <br>
          <p class="lead">
        <a class="btn btn-outline-primary btn-lg " role="button" href="employee.php"> Przejdź dalej </a>
      </p>
    </div>
  </div>