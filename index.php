
<?php  
    require_once "head.php";
    require_once "db_connection.php"; 
    require_once "view/navbar.view.php";  
    
    $_SESSION["source_number"] = 1;
    //Zmienna domyślna która się zmienia po odpowiedziach uzytkownika na pierwsze źródło 
?>

<div class="jumbotron">
  <h1 class="display-4">Ankieta - Komunikacja w SMP</h1>
  <p class="lead">Ankieta jest skierowana do pracowników indirect </p>
  <hr class="my-4">
  <p>Tutaj będzie krótka instrukcja lub opis który dotyczy ankiety</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" role="button" href="employee.php"> Przejdź dalej </a>
  </p>
</div>

