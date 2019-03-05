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
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'phone','0'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa telefoniczna",0); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa osobista",0); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa telefoniczna",0); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa telefoniczna",0); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa telefoniczna",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'phone','1'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa telefoniczna",1); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa telefoniczna",1); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa telefoniczna",1); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa telefoniczna",1); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa telefoniczna",1); ?>'}},
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'phone','2'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa telefoniczna",2); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa telefoniczna",2); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa telefoniczna",2); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa telefoniczna",2); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa telefoniczna",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'phone','3'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa telefoniczna",3); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa telefoniczna",3); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa telefoniczna",3); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa telefoniczna",3); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa telefoniczna",3); ?>'}}
                            },
                        
                    Email: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'write','0'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Kontakt za pomocą poczty elektronicznej",0); ?>', 2: '<?php echo tools_oceny(2,"Kontakt za pomocą poczty elektronicznej",0); ?>', 3: '<?php echo tools_oceny(3,"Kontakt za pomocą poczty elektronicznej",0); ?>', 4: '<?php echo tools_oceny(4,"Kontakt za pomocą poczty elektronicznej",0); ?>', 5: '<?php echo tools_oceny(5,"Kontakt za pomocą poczty elektronicznej",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'write','1'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Kontakt za pomocą poczty elektronicznej",1); ?>', 2: '<?php echo tools_oceny(2,"Kontakt za pomocą poczty elektronicznej",1); ?>', 3: '<?php echo tools_oceny(3,"Kontakt za pomocą poczty elektronicznej",1); ?>', 4: '<?php echo tools_oceny(4,"Kontakt za pomocą poczty elektronicznej",1); ?>', 5: '<?php echo tools_oceny(5,"Kontakt za pomocą poczty elektronicznej",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'write','2'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Kontakt za pomocą poczty elektronicznej",2); ?>', 2: '<?php echo tools_oceny(2,"Kontakt za pomocą poczty elektronicznej",2); ?>', 3: '<?php echo tools_oceny(3,"Kontakt za pomocą poczty elektronicznej",2); ?>', 4: '<?php echo tools_oceny(4,"Kontakt za pomocą poczty elektronicznej",2); ?>', 5: '<?php echo tools_oceny(5,"Kontakt za pomocą poczty elektronicznej",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'write','3'),1); ?>',  Ocena:  { 1: '<?php echo tools_oceny(1,"Kontakt za pomocą poczty elektronicznej",3); ?>', 2: '<?php echo tools_oceny(2,"Kontakt za pomocą poczty elektronicznej",3); ?>', 3: '<?php echo tools_oceny(3,"Kontakt za pomocą poczty elektronicznej",3); ?>', 4: '<?php echo tools_oceny(4,"Kontakt za pomocą poczty elektronicznej",3); ?>', 5: '<?php echo tools_oceny(5,"Kontakt za pomocą poczty elektronicznej",3); ?>'}}
                            },
                        
                    FaceToFace: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa osobista",0); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa osobista",0); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa osobista",0); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa osobista",0); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa osobista",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa osobista",1); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa osobista",1); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa osobista",1); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa osobista",1); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa osobista",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa osobista",2); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa osobista",2); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa osobista",2); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa osobista",2); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa osobista",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'face_to_face','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Rozmowa osobista",3); ?>', 2: '<?php echo tools_oceny(2,"Rozmowa osobista",3); ?>', 3: '<?php echo tools_oceny(3,"Rozmowa osobista",3); ?>', 4: '<?php echo tools_oceny(4,"Rozmowa osobista",3); ?>', 5: '<?php echo tools_oceny(5,"Rozmowa osobista",3); ?>'}}
                            },

                    DeptMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'dept_meet','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",3); ?>'}}
                        },

                    ProdMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie produkcyjne",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie produkcyjne",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie produkcyjne",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie produkcyjne",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie produkcyjne",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie produkcyjne",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie produkcyjne",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie produkcyjne",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie produkcyjne",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie produkcyjne",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie produkcyjne",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie produkcyjne",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie produkcyjne",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie produkcyjne",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie produkcyjne",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'prod_meet','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie produkcyjne",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie produkcyjne",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie produkcyjne",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie produkcyjne",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie produkcyjne",3); ?>'}}
                        },

                    ProjMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie projektowe",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie projektowe",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie projektowe",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie projektowe",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie projektowe",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie projektowe",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie projektowe",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie projektowe",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie projektowe",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie projektowe",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie projektowe",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie projektowe",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie projektowe",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie projektowe",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie projektowe",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'proj_meet','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie projektowe",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie projektowe",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie projektowe",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie projektowe",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie projektowe",3); ?>'}}
                        },

                    BudgetMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie budżetowe",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie budżetowe",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie budżetowe",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie budżetowe",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie budżetowe",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie budżetowe",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie budżetowe",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie budżetowe",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie budżetowe",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie budżetowe",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie budżetowe",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie budżetowe",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie budżetowe",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie budżetowe",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie budżetowe",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'budget_meet','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie budżetowe",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie budżetowe",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie budżetowe",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie budżetowe",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie budżetowe",3); ?>'}}
                        },

                    SmpD: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'smp_d','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie dyrektorów (SMP-D)",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie dyrektorów (SMP-D)",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie dyrektorów (SMP-D)",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie dyrektorów (SMP-D)",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie dyrektorów (SMP-D)",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'smp_d','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie dyrektorów (SMP-D)",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie dyrektorów (SMP-D)",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie dyrektorów (SMP-D)",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie dyrektorów (SMP-D)",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie dyrektorów (SMP-D)",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'smp_d','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie dyrektorów (SMP-D)",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie dyrektorów (SMP-D)",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie dyrektorów (SMP-D)",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie dyrektorów (SMP-D)",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie dyrektorów (SMP-D)",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'smp_d','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie dyrektorów (SMP-D)",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie dyrektorów (SMP-D)",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie dyrektorów (SMP-D)",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie dyrektorów (SMP-D)",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie dyrektorów (SMP-D)",3); ?>'}}
                        },
                        
                    SmpW: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'smp_w','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie załogi (SMP-W)",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie załogi (SMP-W)",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie załogi (SMP-W)",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie załogi (SMP-W)",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie załogi (SMP-W)",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'smp_w','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie załogi (SMP-W)",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie załogi (SMP-W)",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie załogi (SMP-W)",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie załogi (SMP-W)",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie załogi (SMP-W)",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'smp_w','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie załogi (SMP-W)",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie załogi (SMP-W)",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie załogi (SMP-W)",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie załogi (SMP-W)",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie załogi (SMP-W)",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'smp_w','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie załogi (SMP-W)",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie załogi (SMP-W)",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie załogi (SMP-W)",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie załogi (SMP-W)",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie załogi (SMP-W)",3); ?>'}}
                        },
                        
                    CS: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'cs','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Challenge Sheet",0); ?>', 2: '<?php echo tools_oceny(2,"Challenge Sheet",0); ?>', 3: '<?php echo tools_oceny(3,"Challenge Sheet",0); ?>', 4: '<?php echo tools_oceny(4,"Challenge Sheet",0); ?>', 5: '<?php echo tools_oceny(5,"Challenge Sheet",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'cs','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Challenge Sheet",1); ?>', 2: '<?php echo tools_oceny(2,"Challenge Sheet",1); ?>', 3: '<?php echo tools_oceny(3,"Challenge Sheet",1); ?>', 4: '<?php echo tools_oceny(4,"Challenge Sheet",1); ?>', 5: '<?php echo tools_oceny(5,"Challenge Sheet",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'cs','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Challenge Sheet",2); ?>', 2: '<?php echo tools_oceny(2,"Challenge Sheet",2); ?>', 3: '<?php echo tools_oceny(3,"Challenge Sheet",2); ?>', 4: '<?php echo tools_oceny(4,"Challenge Sheet",2); ?>', 5: '<?php echo tools_oceny(5,"Challenge Sheet",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'cs','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Challenge Sheet",3); ?>', 2: '<?php echo tools_oceny(2,"Challenge Sheet",3); ?>', 3: '<?php echo tools_oceny(3,"Challenge Sheet",3); ?>', 4: '<?php echo tools_oceny(4,"Challenge Sheet",3); ?>', 5: '<?php echo tools_oceny(5,"Challenge Sheet",3); ?>'}}
                            },
                        
                    UnformalMeet: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie nieformalne",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie nieformalne",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie nieformalne",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie nieformalne",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie nieformalne",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie nieformalne",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie nieformalne",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie nieformalne",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie nieformalne",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie nieformalne",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie nieformalne",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie nieformalne",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie nieformalne",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie nieformalne",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie nieformalne",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'unformal_meet','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkanie nieformalne",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkanie nieformalne",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkanie nieformalne",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkanie nieformalne",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkanie nieformalne",3); ?>'}}
                            },
                        
                    Own: {
                        Zarzad:     { Ranking: '<?php echo round( get_avg_tools( 'own','0'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",0); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",0); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",0); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",0); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",0); ?>'}},
                        Przelozony: { Ranking: '<?php echo round( get_avg_tools( 'own','1'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",1); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",1); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",1); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",1); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",1); ?>'}}, 
                        Dzial:      { Ranking: '<?php echo round( get_avg_tools( 'own','2'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",2); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",2); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",2); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",2); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",2); ?>'}},
                        InnyDzial:  { Ranking: '<?php echo round( get_avg_tools( 'own','3'),1); ?>', Ocena:  { 1: '<?php echo tools_oceny(1,"Spotkania działowe",3); ?>', 2: '<?php echo tools_oceny(2,"Spotkania działowe",3); ?>', 3: '<?php echo tools_oceny(3,"Spotkania działowe",3); ?>', 4: '<?php echo tools_oceny(4,"Spotkania działowe",3); ?>', 5: '<?php echo tools_oceny(5,"Spotkania działowe",3); ?>'}}
                            },
                },

                AvgApps: {
                    IBMLotus:       { Rank: '<?php echo round( get_avg_apps('ibm_lotus'),2)?>', 
                                      Name: 'IBM Lotus Notes',
                                      Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"IBM Lotus Notes"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"IBM Lotus Notes"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"IBM Lotus Notes"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"IBM Lotus Notes"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"IBM Lotus Notes"),2) ?>'
                                      }},
                    Excel:          { Rank: '<?php echo round( get_avg_apps('excel'),2)?>', 
                                    Name: 'MS Excel',    
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"MS Excel"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"MS Excel"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"MS Excel"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"MS Excel"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"MS Excel"),2) ?>'
                                      }},
                    Access:         { Rank: '<?php echo round( get_avg_apps('access'),2)?>',   
                                    Name: 'MS Access',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"MS Access"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"MS Access"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"MS Access"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"MS Access"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"MS Access"),2) ?>'
                                      }},
                    Bpcs:           { Rank: '<?php echo round( get_avg_apps('bpcs'),2)?>',   
                                    Name: 'BPCS',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"BPCS"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"BPCS"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"BPCS"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"BPCS"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"BPCS"),2) ?>'
                                      }},
                    Intranet:       { Rank: '<?php echo round( get_avg_apps('intranet'),2)?>',   
                                    Name: 'Intranet',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Portal intranet"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Portal intranet"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Portal intranet"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Portal intranet"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Portal intranet"),2) ?>'
                                      }},
                    Comarch:        { Rank: '<?php echo round( get_avg_apps('comarch'),2)?>',    
                                    Name: 'Comarch',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Comarch ECM"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Comarch ECM"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Comarch ECM"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Comarch ECM"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Comarch ECM"),2) ?>'
                                      }},
                    ZMT:            { Rank: '<?php echo round( get_avg_apps('zmt'),2)?>',    
                                    Name: 'ZMT',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"ZMT"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"ZMT"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"ZMT"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"ZMT"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"ZMT"),2) ?>'
                                      }},
                    Asseco:         { Rank: '<?php echo round( get_avg_apps('asseco'),2)?>', 
                                    Name: 'Asseco', 
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Asseco (Portal przełożonego)"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Asseco (Portal przełożonego)"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Asseco (Portal przełożonego)"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Asseco (Portal przełożonego)"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Asseco (Portal przełożonego)"),2) ?>'
                                      }},
                    QMS:            { Rank: '<?php echo round( get_avg_apps('qms'),2)?>',    
                                    Name: 'QMS',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"QMS"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"QMS"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"QMS"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"QMS"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"QMS"),2) ?>'
                                      }},
                    Visualisation:  { Rank: '<?php echo round( get_avg_apps('visualisation'),2)?>',  
                                    Name: 'Wizualizacja',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Wizualizacja"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Wizualizacja"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Wizualizacja"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Wizualizacja"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Wizualizacja"),2) ?>'
                                      }},
                    SandenVision:   { Rank: '<?php echo round( get_avg_apps('sanden_vision'),2)?>',  
                                    Name: 'Sanden Vision',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Sanden vision"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Sanden vision"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Sanden vision"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Sanden vision"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Sanden vision"),2) ?>'
                                      }},
                    WebPage:        { Rank: '<?php echo round( get_avg_apps('smp_web_page'),2)?>',   
                                    Name: 'Strona internetowa', 
                                    Ocena: {
                                       1:'<?php echo round( apps_oceny(1,"Strona internetowa SMP"),2) ?>',
                                       2:'<?php echo round( apps_oceny(2,"Strona internetowa SMP"),2) ?>',
                                       3:'<?php echo round( apps_oceny(3,"Strona internetowa SMP"),2) ?>',
                                       4:'<?php echo round( apps_oceny(4,"Strona internetowa SMP"),2) ?>',
                                       5:'<?php echo round( apps_oceny(5,"Strona internetowa SMP"),2) ?>'
                                      }},
                    Facebook:       { Rank: '<?php echo round( get_avg_apps('facebook'),2)?>',   
                                    Name: 'Facebook',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Strona na Facebook"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Strona na Facebook"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Strona na Facebook"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Strona na Facebook"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Strona na Facebook"),2) ?>'
                                      }},
                    WfMag:          { Rank: '<?php echo round( get_avg_apps('wf_mag'),2)?>', 
                                    Name: 'WF-MAG',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"WF-MAG"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"WF-MAG"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"WF-MAG"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"WF-MAG"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"WF-MAG"),2) ?>'
                                      }},
                    SAP:            { Rank: '<?php echo round( get_avg_apps('sap'),2)?>',    
                                    Name: 'SAP',
                                    Ocena: {
                                       1:'<?php echo round( apps_oceny(1,"SAP"),2) ?>',
                                       2:'<?php echo round( apps_oceny(2,"SAP"),2) ?>',
                                       3:'<?php echo round( apps_oceny(3,"SAP"),2) ?>',
                                       4:'<?php echo round( apps_oceny(4,"SAP"),2) ?>',
                                       5:'<?php echo round( apps_oceny(5,"SAP"),2) ?>'
                                      }},
                    QDA:            { Rank: '<?php echo round( get_avg_apps('qda'),2)?>',    
                                    Name: 'QDA',
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"QDA"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"QDA"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"QDA"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"QDA"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"QDA"),2) ?>'
                                      }},
                    Warehouse:      { Rank: '<?php echo round( get_avg_apps('parcel_warehouse'),2)?>',   
                                    Name: 'Magazyn Paczek', 
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Magazyn paczek"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Magazyn paczek"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Magazyn paczek"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Magazyn paczek"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Magazyn paczek"),2) ?>'
                                      }},
                    LessonsLearned: { Rank: '<?php echo round( get_avg_apps('lessons_learned'),2)?>',    
                                    Name: 'Baza doświadczeń',   
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Baza doświadczeń Lessons Learned"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Baza doświadczeń Lessons Learned"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Baza doświadczeń Lessons Learned"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Baza doświadczeń Lessons Learned"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Baza doświadczeń Lessons Learned"),2) ?>'
                                      }},
                    DExperiance:    { Rank: '<?php echo round( get_avg_apps('dexperiance'),2)?>',    
                                    Name: '3D Experiance',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"3D Experiance"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"3D Experiance"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"3D Experiance"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"3D Experiance"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"3D Experiance"),2) ?>'
                                      }},
                    Helpdesk:       { Rank: '<?php echo round( get_avg_apps('helpdesk'),2)?>',   
                                    Name: 'Helpdesk',   
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Helpdesk"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Helpdesk"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Helpdesk"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Helpdesk"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Helpdesk"),2) ?>'
                                      }},
                    InventoryRange: { Rank: '<?php echo round( get_avg_apps('inventory_range'),2)?>',    
                                    Name: 'Inventory range',    
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Inventory range"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Inventory range"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Inventory range"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Inventory range"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Inventory range"),2) ?>'
                                      }},
                    Pydio:          { Rank: '<?php echo round( get_avg_apps('pydio'),2)?>',  
                                    Name: 'Pydio',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"System wymiany plików"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"System wymiany plików"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"System wymiany plików"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"System wymiany plików"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"System wymiany plików"),2) ?>'
                                      }},
                    Sadec:          { Rank: '<?php echo round( get_avg_apps('sadec'),2)?>',  
                                    Name: 'Sadec / intrastat',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Sadec / Intrastat"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Sadec / Intrastat"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Sadec / Intrastat"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Sadec / Intrastat"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Sadec / Intrastat"),2) ?>'
                                      }},
                    BazaSugestii:   { Rank: '<?php echo round( get_avg_apps('baza_sugestii'),2)?>',  
                                    Name: 'Baza sugestii',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Baza sugestii"),2) ?>', 
                                        2:'<?php echo round( apps_oceny(2,"Baza sugestii"),2) ?>', 
                                        3:'<?php echo round( apps_oceny(3,"Baza sugestii"),2) ?>', 
                                        4:'<?php echo round( apps_oceny(4,"Baza sugestii"),2) ?>', 
                                        5:'<?php echo round( apps_oceny(5,"Baza sugestii"),2) ?>'  
                                      }},
                    MonthNews:      { Rank: '<?php echo round( get_avg_apps('month_news'),2)?>', 
                                    Name: 'Sanden Month News',  
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Sanden Month News"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Sanden Month News"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Sanden Month News"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Sanden Month News"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Sanden Month News"),2) ?>'
                                      }},
                    Own:            { Rank: '<?php echo round( get_avg_apps('own'),2)?>',    
                                    Name: 'Odpowiedz własna',    
                                    Ocena: {
                                        1:'<?php echo round( apps_oceny(1,"Odpowiedz własna"),2) ?>',
                                        2:'<?php echo round( apps_oceny(2,"Odpowiedz własna"),2) ?>',
                                        3:'<?php echo round( apps_oceny(3,"Odpowiedz własna"),2) ?>',
                                        4:'<?php echo round( apps_oceny(4,"Odpowiedz własna"),2) ?>',
                                        5:'<?php echo round( apps_oceny(5,"Odpowiedz własna"),2) ?>'
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

 
