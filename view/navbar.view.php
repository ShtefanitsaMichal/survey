<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <span class="text-muted">Poprawa komunikacji w SMP</span>

      
       <p class="text-white h4"><?php echo session_id() ?> </p>
       <p class="text-white h4"><?php /* echo  $_SESSION["source_number"] */ ?> </p>
       
       
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="row">
      <div class="col-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>       
    </div>
  </nav>
</div>

<nav aria-label="...">
  
</nav>
<div class="container">
<?php 

  //var_dump($_SERVER['REQUEST_URI']);

  $page = substr($_SERVER['REQUEST_URI'], -5,1);

  //var_dump($page)

?> 
<hr>
  <div class="row">
    <div class="col-md-4 offset-md-4" >
            <ul class="pagination pagination-md">
              <li class="page-item"><a class="page-link" href="employee.php">1</a></li>
              <li class="page-item"><a class="page-link" href="source.php">2</a></li>
              <li class="page-item"><a class="page-link" href="source_rate.php">3</a></li>
              <li class="page-item"><a class="page-link" href="main_tool_1.php">4a</a></li>
              <li class="page-item"><a class="page-link" href="main_tool_1_rate.php">4b</a></li>
              <li class="page-item"><a class="page-link" href="main_tool_2.php">5a</a></li>
              <li class="page-item"><a class="page-link" href="main_tool_2_rate.php">5b</a></li>
               <li class="page-item"><a class="page-link" href="main_source_expect.php">6</a></li>

              
            </ul>
    </div>
  </div>
    


  <!-- <div class="progress" style="height: 10px;">
    <div class="progress-bar" role="progressbar" style="width: <?php echo $page * 13 ?>%; " aria-valuenow="1" aria-valuemin="0" aria-valuemax="8"></div>
  </div> -->
