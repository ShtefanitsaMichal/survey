<?php require_once "head.php" ?>
<?php require_once(__ROOT__."/controller/dbConnect.php"); ?>
<?php require_once(__ROOT__."/admin/functions.php"); ?>


<?php 
    $db = DB::getInstance();    
    DB::setCharsetEncoding();
?>


<div class="App">
    <?php require(__ROOT__."/admin/nav_bar.php"); ?>
<div class="col-6">
<form action="?" method="get ">
  <div class="row">

    <div class="col-3">
     <select class="custom-select custom-select-sm mb-3" name="typ">
      <option selected value="<?php echo $_GET['typ']; ?>"><?php echo $_GET['typ']; ?></option>
      <option value="Direct">Direct</option>
      <option value="Indirect">Indirect</option>
      <option value="">-</option>
    </select>
    </div>

    <div class="col-3">
      <select class="custom-select custom-select-sm mb-3" name="wiek">
        <option value="<?php echo $_GET['wiek']; ?>"selected><?php echo $_GET['wiek']; ?></option>
        <option value="< 30">Poniżej 30 lat</option>
        <option value="> 30">Powyżej 30 lat</option>
        <option value="> 40">Powyżej 40 lat</option>
        <option value="">-</option>
      </select>
    </div>

    <div class="col-3">
     <select class="custom-select custom-select-sm mb-30" name="stanowisko">
        <option value="<?php echo $_GET['stanowisko']; ?>" selected><?php echo $_GET['stanowisko']; ?></option>
        <option value="Pracownik">Pracownik</option>
        <option value="Specjalista">Specjalista</option>
        <option value="Supervisor">Supervisor</option>
        <option value="Kierownik">Kierownik</option>
        <option value="">-</option>
      </select>
    </div>

    <div class="col-3">
      <button class="btn btn-outline-success btn-sm" type="submit" value="">Sprawdź</button>
    </div>
   
</form>
</div>

<h5 class="display-5"> Wszyskich ankiet: <b>{{ Metryczka.all_users }}</b></h5>
<hr>

</div>
    <div class="container-fluid ">

    <div class="row">
        
    </div>

    <div class="card-group">
         <div class="card">
            <div class="card-header">
                Pozycja Pracowników w podziale na:<br> Stanowisko:  <?php echo $_GET['stanowisko']; ?> oraz Wiek: <?php echo $_GET['wiek']; ?>
            </div>
            <div class="card-body">
                <canvas id="empType" style="max-width: 100%;"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Stanowiska Pracowników w podziale na:<br> Typ:  <?php echo $_GET['typ']; ?> oraz Wiek: <?php echo $_GET['wiek']; ?>
            </div>
            <div class="card-body">
                <canvas id="myChart" style="max-width: 100%;"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Wiek pracowników w podziale na:<br> Typ:  <?php echo $_GET['typ']; ?> oraz stanowisko: <?php echo $_GET['stanowisko']; ?>
            </div>
            <div class="card-body">
                <canvas id="empAge" style="max-width: 100%;"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <canvas id="doughnutChart"></canvas>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-light alert-dismissible fade show" role="alert">
                 <canvas id="barChart"></canvas>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <?php require (__ROOT__."/admin/avg_app_table.php"); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <?php 
                        require (__ROOT__."/admin/avg_tool_table.php");  
                    ?>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

<script>
    new Vue({
      el: '.App',
      props: ['Phone', 'Write'],

      data: {
                Json: {
                     <?php 
                        //require('json/test.json') 
                        ?>
                    },
        
                Metryczka: { 
                    all_users:      '<?php echo get_all_users(); ?>',
                },
                AvgTools:  {
                    Phone:  {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'phone','0'),1); ?>', Ocena: { 1:'<?php echo round( avg_tools_rate('tool',1 ,'phone', 0),1) ?>', 2:'<?php echo round( avg_tools_rate('tool',2 ,'phone', 0),1) ?>', 3:'<?php echo round( avg_tools_rate('tool',3 ,'phone', 0),1) ?>', 4:'<?php echo round( avg_tools_rate('tool',4 ,'phone', 0),1) ?>', 5:'<?php echo round( avg_tools_rate('tool',5 ,'phone', 0),1) ?>'} },
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'phone','1'),1); ?>', Ocena: { 1:'<?php echo round( avg_tools_rate('tool',1 ,'phone', 1),1) ?>', 2:'<?php echo round( avg_tools_rate('tool',2 ,'phone', 1),1) ?>', 3:'<?php echo round( avg_tools_rate('tool',3 ,'phone', 1),1) ?>', 4:'<?php echo round( avg_tools_rate('tool',4 ,'phone', 1),1) ?>', 5:'<?php echo round( avg_tools_rate('tool',5 ,'phone', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'phone','2'),1); ?>', Ocena: { 1:'<?php echo round( avg_tools_rate('tool',1 ,'phone', 2),1) ?>', 2:'<?php echo round( avg_tools_rate('tool',2 ,'phone', 2),1) ?>', 3:'<?php echo round( avg_tools_rate('tool',3 ,'phone', 2),1) ?>', 4:'<?php echo round( avg_tools_rate('tool',4 ,'phone', 2),1) ?>', 5:'<?php echo round( avg_tools_rate('tool',5 ,'phone', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'phone','3'),1); ?>', Ocena: { 1:'<?php echo round( avg_tools_rate('tool',1 ,'phone', 3),1) ?>', 2:'<?php echo round( avg_tools_rate('tool',2 ,'phone', 3),1) ?>', 3:'<?php echo round( avg_tools_rate('tool',3 ,'phone', 3),1) ?>', 4:'<?php echo round( avg_tools_rate('tool',4 ,'phone', 3),1) ?>', 5:'<?php echo round( avg_tools_rate('tool',5 ,'phone', 3),1) ?>'}}
                            },
                        
                    Email: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'write','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'write', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'write', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'write', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'write', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'write', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'write','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'write', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'write', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'write', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'write', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'write', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'write','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'write', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'write', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'write', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'write', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'write', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'write','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'write', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'write', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'write', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'write', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'write', 3),1) ?>'}}
                            },
                        
                    FaceToFace: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'face_to_face', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'face_to_face', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'face_to_face', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'face_to_face', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'face_to_face', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'face_to_face', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'face_to_face', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'face_to_face', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'face_to_face', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'face_to_face', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'face_to_face', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'face_to_face', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'face_to_face', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'face_to_face', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'face_to_face', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'face_to_face', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'face_to_face', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'face_to_face', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'face_to_face', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'face_to_face', 3),1) ?>'}}
                            },

                    DeptMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'dept_meet', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'dept_meet', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'dept_meet', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'dept_meet', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'dept_meet', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'dept_meet', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'dept_meet', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'dept_meet', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'dept_meet', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'dept_meet', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'dept_meet', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'dept_meet', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'dept_meet', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'dept_meet', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'dept_meet', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'dept_meet', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'dept_meet', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'dept_meet', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'dept_meet', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'dept_meet', 3),1) ?>'}}
                            },

                    ProdMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'prod_meet', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'prod_meet', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'prod_meet', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'prod_meet', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'prod_meet', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'prod_meet', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'prod_meet', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'prod_meet', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'prod_meet', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'prod_meet', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'prod_meet', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'prod_meet', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'prod_meet', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'prod_meet', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'prod_meet', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'prod_meet', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'prod_meet', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'prod_meet', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'prod_meet', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'prod_meet', 3),1) ?>'}}
                            },

                    ProjMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'proj_meet', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'proj_meet', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'proj_meet', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'proj_meet', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'proj_meet', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'proj_meet', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'proj_meet', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'proj_meet', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'proj_meet', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'proj_meet', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'proj_meet', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'proj_meet', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'proj_meet', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'proj_meet', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'proj_meet', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'proj_meet', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'proj_meet', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'proj_meet', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'proj_meet', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'proj_meet', 3),1) ?>'}}
                            },

                    BudgetMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'budget_meet', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'budget_meet', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'budget_meet', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'budget_meet', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'budget_meet', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'budget_meet', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'budget_meet', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'budget_meet', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'budget_meet', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'budget_meet', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'budget_meet', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'budget_meet', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'budget_meet', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'budget_meet', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'budget_meet', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'budget_meet', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'budget_meet', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'budget_meet', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'budget_meet', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'budget_meet', 3),1) ?>'}}
                                },

                    SmpD: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'smp_d','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_d', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_d', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_d', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_d', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_d', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'smp_d','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_d', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_d', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_d', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_d', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_d', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'smp_d','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_d', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_d', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_d', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_d', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_d', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'smp_d','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_d', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_d', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_d', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_d', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_d', 3),1) ?>'}}
                                },
                        
                    SmpW: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'smp_w','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_w', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_w', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_w', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_w', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_w', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'smp_w','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_w', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_w', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_w', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_w', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_w', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'smp_w','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_w', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_w', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_w', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_w', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_w', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'smp_w','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'smp_w', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'smp_w', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'smp_w', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'smp_w', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'smp_w', 3),1) ?>'}}
                            },
                        
                    CS: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'cs','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'cs', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'cs', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'cs', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'cs', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'cs', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'cs','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'cs', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'cs', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'cs', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'cs', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'cs', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'cs','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'cs', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'cs', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'cs', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'cs', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'cs', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'cs','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'cs', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'cs', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'cs', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'cs', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'cs', 3),1) ?>'}}
                            },
                        
                    UnformalMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'unformal_meet', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'unformal_meet', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'unformal_meet', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'unformal_meet', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'unformal_meet', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'unformal_meet', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'unformal_meet', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'unformal_meet', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'unformal_meet', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'unformal_meet', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'unformal_meet', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'unformal_meet', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'unformal_meet', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'unformal_meet', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'unformal_meet', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'unformal_meet', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'unformal_meet', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'unformal_meet', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'unformal_meet', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'unformal_meet', 3),1) ?>'}}
                            },
                        
                    Own: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'own','0'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'own', 0),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'own', 0),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'own', 0),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'own', 0),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'own', 0),1) ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'own','1'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'own', 1),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'own', 1),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'own', 1),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'own', 1),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'own', 1),1) ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'own','2'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'own', 2),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'own', 2),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'own', 2),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'own', 2),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'own', 2),1) ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'own','3'),1); ?>', Ocena:  { 1: '<?php echo round( avg_tools_rate('tool',1 ,'own', 3),1) ?>', 2: '<?php echo round( avg_tools_rate('tool',2 ,'own', 3),1) ?>', 3: '<?php echo round( avg_tools_rate('tool',3 ,'own', 3),1) ?>', 4: '<?php echo round( avg_tools_rate('tool',4 ,'own', 3),1) ?>', 5: '<?php echo round( avg_tools_rate('tool',5 ,'own', 3),1) ?>'}}
                            },
                },

                AvgApps: {
                    IBMLotus:       { Rank: '<?php echo round( get_avg_apps('ibm_lotus'),2)?>', 
                                      Name: 'IBM Lotus Notes',
                                      Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 ,'ibm_lotus', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 ,'ibm_lotus', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 ,'ibm_lotus', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 ,'ibm_lotus', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 ,'ibm_lotus', 4),2) ?>'
                                      }},
                    Excel:          { Rank: '<?php echo round( get_avg_apps('excel'),2)?>', 
                                    Name: 'MS Excel',    
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'excel', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'excel', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'excel', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'excel', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'excel', 4),2) ?>'
                                      }},
                    Access:         { Rank: '<?php echo round( get_avg_apps('access'),2)?>',   
                                    Name: 'MS Access',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'access', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'access', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'access', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'access', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'access', 4),2) ?>'
                                      }},
                    Bpcs:           { Rank: '<?php echo round( get_avg_apps('bpcs'),2)?>',   
                                    Name: 'BPCS',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'bpcs', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'bpcs', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'bpcs', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'bpcs', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'bpcs', 4),2) ?>'
                                      }},
                    Intranet:       { Rank: '<?php echo round( get_avg_apps('intranet'),2)?>',   
                                    Name: 'Intranet',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'intranet', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'intranet', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'intranet', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'intranet', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'intranet', 4),2) ?>'
                                      }},
                    Comarch:        { Rank: '<?php echo round( get_avg_apps('comarch'),2)?>',    
                                    Name: 'Comarch',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'comarch', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'comarch', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'comarch', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'comarch', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'comarch', 4),2) ?>'
                                      }},
                    ZMT:            { Rank: '<?php echo round( get_avg_apps('zmt'),2)?>',    
                                    Name: 'ZMT',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'zmt', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'zmt', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'zmt', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'zmt', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'zmt', 4),2) ?>'
                                      }},
                    Asseco:         { Rank: '<?php echo round( get_avg_apps('asseco'),2)?>', 
                                    Name: 'Asseco', 
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'asseco', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'asseco', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'asseco', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'asseco', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'asseco', 4),2) ?>'
                                      }},
                    QMS:            { Rank: '<?php echo round( get_avg_apps('qms'),2)?>',    
                                    Name: 'QMS',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'qms', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'qms', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'qms', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'qms', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'qms', 4),2) ?>'
                                      }},
                    Visualisation:  { Rank: '<?php echo round( get_avg_apps('visualisation'),2)?>',  
                                    Name: 'Wizualizacja',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'visualisation', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'visualisation', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'visualisation', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'visualisation', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'visualisation', 4),2) ?>'
                                      }},
                    SandenVision:   { Rank: '<?php echo round( get_avg_apps('sanden_vision'),2)?>',  
                                    Name: 'Sanden Vision',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'sanden_vision', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'sanden_vision', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'sanden_vision', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'sanden_vision', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'sanden_vision', 4),2) ?>'
                                      }},
                    WebPage:        { Rank: '<?php echo round( get_avg_apps('smp_web_page'),2)?>',   
                                    Name: 'Strona internetowa', 
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'smp_web_page', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'smp_web_page', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'smp_web_page', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'smp_web_page', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'smp_web_page', 4),2) ?>'
                                      }},
                    Facebook:       { Rank: '<?php echo round( get_avg_apps('facebook'),2)?>',   
                                    Name: 'Facebook',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'facebook', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'facebook', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'facebook', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'facebook', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'facebook', 4),2) ?>'
                                      }},
                    WfMag:          { Rank: '<?php echo round( get_avg_apps('wf_mag'),2)?>', 
                                    Name: 'WF-MAG',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'wf_mag', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'wf_mag', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'wf_mag', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'wf_mag', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'wf_mag', 4),2) ?>'
                                      }},
                    SAP:            { Rank: '<?php echo round( get_avg_apps('sap'),2)?>',    
                                    Name: 'SAP',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'sap', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'sap', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'sap', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'sap', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'sap', 4),2) ?>'
                                      }},
                    QDA:            { Rank: '<?php echo round( get_avg_apps('qda'),2)?>',    
                                    Name: 'QDA',
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'qda', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'qda', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'qda', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'qda', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'qda', 4),2) ?>'
                                      }},
                    Warehouse:      { Rank: '<?php echo round( get_avg_apps('parcel_warehouse'),2)?>',   
                                    Name: 'Magazyn Paczek', 
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'parcel_warehouse', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'parcel_warehouse', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'parcel_warehouse', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'parcel_warehouse', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'parcel_warehouse', 4),2) ?>'
                                      }},
                    LessonsLearned: { Rank: '<?php echo round( get_avg_apps('lessons_learned'),2)?>',    
                                    Name: 'Baza doświadczeń',   
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'lessons_learned', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'lessons_learned', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'lessons_learned', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'lessons_learned', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'lessons_learned', 4),2) ?>'
                                      }},
                    DExperiance:    { Rank: '<?php echo round( get_avg_apps('dexperiance'),2)?>',    
                                    Name: '3D Experiance',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'dexperiance', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'dexperiance', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'dexperiance', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'dexperiance', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'dexperiance', 4),2) ?>'
                                      }},
                    Helpdesk:       { Rank: '<?php echo round( get_avg_apps('helpdesk'),2)?>',   
                                    Name: 'Helpdesk',   
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'helpdesk', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'helpdesk', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'helpdesk', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'helpdesk', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'helpdesk', 4),2) ?>'
                                      }},
                    InventoryRange: { Rank: '<?php echo round( get_avg_apps('inventory_range'),2)?>',    
                                    Name: 'Inventory range',    
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'inventory_range', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'inventory_range', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'inventory_range', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'inventory_range', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'inventory_range', 4),2) ?>'
                                      }},
                    Pydio:          { Rank: '<?php echo round( get_avg_apps('pydio'),2)?>',  
                                    Name: 'Pydio',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'pydio', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'pydio', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'pydio', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'pydio', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'pydio', 4),2) ?>'
                                      }},
                    Sadec:          { Rank: '<?php echo round( get_avg_apps('sadec'),2)?>',  
                                    Name: 'Sadec / intrastat',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'sadec', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'sadec', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'sadec', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'sadec', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'sadec', 4),2) ?>'
                                      }},
                    BazaSugestii:   { Rank: '<?php echo round( get_avg_apps('baza_sugestii'),2)?>',  
                                    Name: 'Baza sugestii',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'baza_sugestii', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'baza_sugestii', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'baza_sugestii', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'baza_sugestii', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'baza_sugestii', 4),2) ?>'
                                      }},
                    MonthNews:      { Rank: '<?php echo round( get_avg_apps('month_news'),2)?>', 
                                    Name: 'Sanden Month News',  
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'month_news', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'month_news', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'month_news', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'month_news', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'month_news', 4),2) ?>'
                                      }},
                    Own:            { Rank: '<?php echo round( get_avg_apps('own'),2)?>',    
                                    Name: 'Odpowiedz własna',    
                                    Ocena: {
                                        1:'<?php echo round( avg_tools_rate('app',1 , 'own', 4),2) ?>',
                                        2:'<?php echo round( avg_tools_rate('app',2 , 'own', 4),2) ?>',
                                        3:'<?php echo round( avg_tools_rate('app',3 , 'own', 4),2) ?>',
                                        4:'<?php echo round( avg_tools_rate('app',4 , 'own', 4),2) ?>',
                                        5:'<?php echo round( avg_tools_rate('app',5 , 'own', 4),2) ?>'
                                      }}
                },

                },
        methods: {
            
        },

        computed: {
        }
    })


</script> 

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Specjalista", "Pracownik", "Supervisor", "Director"],
      datasets: [{
        label: 'Stanowisko pracowników',
        data: [ '<?php echo get_specialist(); ?>',
                '<?php echo get_pracownik(); ?>',
                '<?php echo get_supervisor(); ?>',
                '<?php echo get_director(); ?>',
            ],
            
        backgroundColor: [
          'red',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById("empType").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Produkcja", "Administracja"],
      datasets: [{
        label: 'Typ pracowników',
        data: [ 
                '<?php echo get_all_direct(); ?>',
                '<?php echo get_all_indirect(); ?>'
            ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById("empAge").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["<30", "<40", ">40"],
      datasets: [{
        label: 'Wiek pracowników',
        data: [ 
                '<?php echo get_lt30(); ?>',
                '<?php echo get_gt30(); ?>',
                '<?php echo get_gt40(); ?>',
            ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>




<script>
  //bar
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["zarząd", "Przełożony", "dział", "Inny Dział", "system inf"],
      datasets: [{
        label: 'Oceny żródeł',
        data: ['<?php echo round(get_avg_source_rate('zarzad'),2); ?>',
                '<?php echo round(get_avg_source_rate('przelozony'),2); ?>',
                '<?php echo round(get_avg_source_rate('dzial'),2); ?>',
                '<?php echo round(get_avg_source_rate('inny_dzial'),2); ?>',
                '<?php echo round(get_avg_source_rate('baza_danych'),2); ?>',],

        backgroundColor:  ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>

<script>
  //doughnut
  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["zarząd", "Przełożony", "dział", "Inny Dział", "system inf"],
      datasets: [{
        data: [ '<?php echo round(get_avg_source('zarzad'),1); ?>',
                '<?php echo round(get_avg_source('przelozony'),2); ?>',
                '<?php echo round(get_avg_source('dzial'),1); ?>',
                '<?php echo round(get_avg_source('inny_dzial'),1); ?>',
                '<?php echo round(get_avg_source('baza_danych'),1); ?>',],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });
</script>

 
