
    <?php require_once "db_connection.php"; ?>
    <?php require_once "head.php" ?>
    <?php require_once "view/navbar.view.php" ?>

      <div class="App col-12 ">
                <!-- <label  class="text-primary">{{ Typ + ' / ' + Stanowisko + ' / ' + Wiek }}</label>  -->
                <div class="container">
                  <div class="row">
                    <div class="row">
                      <div class="col-6">
                        <button v-if="Typ == 'Direct'" class="btn btn-primary btn-lg btn-block" value="Direct" v-on:click="Typ = 'Direct'" 
                                data-toggle="tooltip" 
                                data-placement="top" title="PR, UR, PE, QC">Produkcja 
                                <label for="">PR, UR, PE, QC</label>
                        </button>

                        <button v-else class="btn btn-outline-primary btn-lg btn-block" value="Direct" v-on:click="Typ = 'Direct'" 
                                data-toggle="tooltip" data-placement="top" 
                                title="PR, UR, PE, QC">Produkcja
                               <label for="">PR, UR, PE, QC</label>
                        </button>
                      </div>
                      
                      <div class="col-6">         
                      <button v-if="Typ == 'Indirect'"  class="btn btn-primary  btn-block" value="Indirect" v-on:click="Typ = 'Indirect'" 
                              data-toggle="tooltip" data-placement="top" 
                              title="QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.">Administracja
                              <label for="">QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.</label>
                      </button>
                      <button v-else class="btn btn-outline-primary btn-block" value="Indirect" v-on:click="Typ = 'Indirect'" 
                              data-toggle="tooltip" data-placement="top" 
                              title="QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.">Administracja
                              <label for="">QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.</label>
                      </button>
                      </div> 

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

                  <br>

                  <!-- Formularz z metodą post--> 

                    <form action="post/post_employee.php" method="post">

                      <input type="hidden" name="typ" v-model="Typ" > 
                      <input type="hidden" name="wiek" v-model="Wiek" > 
                      <input type="hidden" name="stanowisko" v-model="Stanowisko"> 
                    <hr>                      
                      <span v-if="Stanowisko != '' && Wiek != '' && Typ != '' " > <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-success btn-lg btn-block"> </span>
                      <span v-else> <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-outline-secondary btn-lg btn-block disabled"> </span>
                    </form>
                </div>  
            </div>
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