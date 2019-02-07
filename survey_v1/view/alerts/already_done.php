<div class="container">
    <div class="card text-center" style="margin: 20vh auto;">
    <div class="card-header" >
        <h2>Przepraszamy</h2>
    </div>
    <div class="card-body">
        <p class="card-text">Niestety nie masz możliwości wypełnic ankietę jeszcze raz.</p>
        <h5 class="card-title">Ankieta już została wypełniona przez ciebie dnia: <b> <?php echo $_SESSION['survey_start_date']; ?> </b></h5>
        <h5 class="card-title">o godzinie: <b> <?php echo $_SESSION['survey_start_time']; ?> </b></h5>
       
    </div>
        <div class="card-footer text-muted">
            <br> <h5> W razie jakich kolwiek pytań lub problemów napisz do dzialu IT </h5>
            <br>
            <a href="mailto:m.sztefanica@sandensmp.pl" class="btn btn-warning btn-block ">Zgłoś problem</a>
        </div>
    </div>
</div>