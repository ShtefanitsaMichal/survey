    <?php require_once "head.php" ?>
    <?php require_once(__ROOT__."/controller/dbConnect.php"); ?>
    <?php require_once(__ROOT__."/view/navbar.view.php"); ?>
    <?php require_once(__ROOT__."/controller/PostController.php"); ?>
    <?php 
          require_once('controller/dbConnect.php'); 
          $db = DB::getInstance();
          DB::setCharsetEncoding();
        
    ?>

    <?php 
      $survey_start = new Post();
      $survey_start -> survey_start()
    ?>

     <?php 
      if(isset($_SESSION["employee_type"]))
      {
        require_once (__ROOT__."/view/alerts/already_done.php");
        die;
      }
    ?>
    <?php 

        $sql_check = $db->prepare("SELECT * FROM user ");
        $sql_check->execute(); 
       
        $sql = $db->prepare("INSERT INTO user ( session_id, q1 ) VALUES ( '$session_id', '0' )");
        $sql->execute(array( "session_id" => $session_id));
    ?>

   

      <div class="App"  >
        <!-- <label  class="text-primary">{{ Typ + ' / ' + Stanowisko + ' / ' + Wiek }}</label>  -->
        <div class="container col-8 offset-2">
          <div class="card text-center" style="margin: 20vh auto;">
              <div class="card-header">
                  <h1 style="">Wypełnij formularz</h1>
              </div>
                <div class="card-body">

                  <div class="row">
                    <div v-if="Typ == 'Direct'" class="col-6">
                      <button  
                        class="btn btn-primary  btn-block" value="Direct" v-on:click="Typ = 'Direct'" 
                        data-toggle="tooltip" 
                        title="PR, UR, PE, QC">Produkcja 
                      </button>

                      <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">
                          PR, UR, PE, QC
                        <footer>
                      </blockquote>

                    </div>

                    <div v-else class="col-6">

                    <button 
                            class="btn btn-outline-primary  btn-block" value="Direct" v-on:click="Typ = 'Direct'" 
                            data-toggle="tooltip"
                            title="PR, UR, PE, QC">Produkcja
                    </button>

                    <blockquote class="blockquote mb-0">
                      <footer class="blockquote-footer">
                        PR, UR, PE, QC
                      <footer>
                    </blockquote>
                  </div>
              
                  <div class="col-6"  v-if="Typ == 'Indirect'"  >         
                    <button class="btn btn-primary   btn-block" value="Indirect" v-on:click="Typ = 'Indirect'" 
                            data-toggle="tooltip" data-placement="top" >Administracja
                    </button>

                    <blockquote class="blockquote mb-0">
                      <footer class="blockquote-footer">
                        QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.
                      </footer>
                    </blockquote>
                  </div>

                  <div class="col-6"  v-else>          
                    <button class="btn btn-outline-primary btn-block" value="Indirect" v-on:click="Typ = 'Indirect'" 
                            data-toggle="tooltip" data-placement="top" >Administracja
                    </button>

                    <blockquote class="blockquote mb-0">
                      <footer class="blockquote-footer">
                        QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.
                      </footer>
                    </blockquote>     
                  </div>         
                     
                  </div>  

                  <br>

                  <div class="row">

                    <div class="col-4">
                      <button v-if="Wiek == '< 30'" class="btn btn-primary btn-block " value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                    </div>

                    <div class="col-4">
                      <button v-if="Wiek == '> 30'" class="btn btn-primary btn-block " value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>
                    </div>

                    <div class="col-4">
                      <button v-if="Wiek == '> 40'" class="btn btn-primary btn-block " value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button> 
                    </div> 

                  </div>

                  <br>

                  <div class="row">

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Pracownik'" class="btn btn-primary btn-block " value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik </button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Specjalista'" class="btn btn-primary btn-block " value="Stanowisko" v-on:click="Stanowisko = 'Specjalista'" >  specjalista / inżynier</button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Specjalista'" > specjalista / inżynier</button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Supervisor'" class="btn btn-primary btn-block " value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor </button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Kierownik'" class="btn btn-primary btn-block " value="Stanowisko" v-on:click="Stanowisko = 'Kierownik'">  kierownik </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Kierownik'">  kierownik </button>
                    </div>
                  </div>
                </div>
                  <div class="card-footer  text-dark">

                  <!-- Formularz z metodą post--> 

                  <form action="post/post_employee.php" method="post">
                    <input type="hidden" name="typ" v-model="Typ" > 
                    <input type="hidden" name="wiek" v-model="Wiek" > 
                    <input type="hidden" name="stanowisko" v-model="Stanowisko"> 
                    <span v-if="Stanowisko != '' && Wiek != '' && Typ != '' " > <input  value="Przejdź dalej" type="submit" name="send"   class="btn btn-success  btn-block"> </span>
                    <span v-else> <input  value="Przejdź dalej" type="submit" name="send"   class="btn btn-secondary  btn-block disabled" disabled> </span>
                  </form>
        
                </div>  
              </div>

 
           
<script>
    new Vue({
      el: '.App',
      data: {
        Typ: '',
        Wiek: '',
        Stanowisko: '',
        }
    })
</script>  

<script>
  $(function () {
         $('[data-toggle="popover"]').popover()
        })
</script>





<!-- 
    SELECT session_id FROM pyt_2 WHERE session_id = (SELECT pyt_1.session_id FROM pyt_1 LIMIT 1) g14dopd52hqk8jlihvhe9fg1c6 
    SELECT session_id FROM pyt_2 WHERE session_id = 'ai09brtjlq9e31tnlv9kaqo4k4' ORDER BY id LIMIT 1
-->