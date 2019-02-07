<div class="container">
    <div class="card text-center" style="margin: 20vh auto;">
    <div class="card-header" >
        <h2>
           Dzękujemy za wypełnienie ankiety
        </h2>
    </div>
    <div class="card-body">
       
        <p class="card-title">Ankieta już została wypełniona przez ciebie dnia:<b> <?php echo $_SESSION['survey_done_date']; ?></b></p>
        <p class="card-title">O godzinie:<b> <?php echo $_SESSION['survey_done_time']; ?></b></p>
    </div>
    <div class="card-footer text-muted">
        

        <br> <h5> W razie jakich kolwiek pytań lub problemów napisz do dzialu IT </h5>
        <a href="mailto:mikeshtefanitsa@gmail.com" class="btn btn-primary">Skontaktuj się z nami</a>
        <br>
        <br>
        <a href="flush.php" class="btn btn-success">Uzupełnij ankietę jeszcze raz </a>
    </div>
    </div>
</div>