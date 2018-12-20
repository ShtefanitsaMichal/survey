
    <?php require_once "db_connection.php"; ?>
    <?php require_once "head.php" ?>
    <?php require_once "view/navbar.view.php" ?>

      <div class="App align-middle">
                <!-- <label  class="text-primary">{{ Typ + ' / ' + Stanowisko + ' / ' + Wiek }}</label>  -->
        <div class="container">
          <div class="card text-center">
              <div class="card-header">
                  <h2> Metryczka </h2>
              </div>
                <div class="card-body">

                  <div class="row">
                    <div v-if="Typ == 'Direct'" class="col-6">
                      <button  
                              class="btn btn-primary btn-lg btn-block" value="Direct" v-on:click="Typ = 'Direct'" 
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
                    <button class="btn btn-primary btn-lg  btn-block" value="Indirect" v-on:click="Typ = 'Indirect'" 
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

                    <div class="col-md-4">
                      <button v-if="Wiek == '< 30'" class="btn btn-primary btn-block btn-lg" value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                    </div>

                    <div class="col-4">
                      <button v-if="Wiek == '> 30'" class="btn btn-primary btn-block btn-lg" value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>
                    </div>

                    <div class="col-4">
                      <button v-if="Wiek == '> 40'" class="btn btn-primary btn-block btn-lg" value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button> 
                    </div> 

                  </div>

                  <br>

                  <div class="row">

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Pracownik'" class="btn btn-primary btn-block btn-lg" value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik </button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Specjalista'" class="btn btn-primary btn-block btn-lg" value="Stanowisko" v-on:click="Stanowisko = 'Specjalista'" >  specjalista</button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Specjalista'" >  specjalista</button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Supervisor'" class="btn btn-primary btn-block btn-lg" value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor </button>
                    </div>

                    <div class="col-md-3">
                      <button v-if="Stanowisko == 'Kierownik'" class="btn btn-primary btn-block btn-lg" value="Stanowisko" v-on:click="Stanowisko = 'Kierownik'">  kierownik </button>
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
                    <span v-if="Stanowisko != '' && Wiek != '' && Typ != '' " > <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-success btn-lg btn-block"> </span>
                    <span v-else> <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-secondary btn-lg btn-block disabled"> </span>
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