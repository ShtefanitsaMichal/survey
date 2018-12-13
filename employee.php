
    <?php require_once "db_connection.php" ?>
    <?php require_once "head.php" ?>
    <?php require_once "view/navbar.view.php" ?>
 
      <div class="App col-12 ">
                <!-- <label  class="text-primary">{{ Typ + ' / ' + Stanowisko + ' / ' + Wiek }}</label>  -->
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <button v-if="Typ == 'Direct'" class="btn btn-primary" value="Direct" v-on:click="Typ = 'Direct'" data-toggle="tooltip" data-placement="top" title="PR, UR, PE, QC">Bez pośrednia produkcja</button>
                      <button v-else class="btn btn-outline-primary" value="Direct" v-on:click="Typ = 'Direct'" data-toggle="tooltip" data-placement="top" title="PR, UR, PE, QC">Bez pośrednia produkcja</button>

                      <button v-if="Typ == 'Indirect'"  class="btn btn-primary" value="Indirect" v-on:click="Typ = 'Indirect'" data-toggle="tooltip" data-placement="top" title="QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.">Pośrednia produkcja</button>
                      <button v-else class="btn btn-outline-primary" value="Indirect" v-on:click="Typ = 'Indirect'" data-toggle="tooltip" data-placement="top" title="QA, Log, GA&HR, CP, FA, R&D, GP, IT, HSE, STQM, NPI, Building Maint.">Pośrednia produkcja</button>
                    </div>
                  </div>  
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <button v-if="Wiek == '< 30'" class="btn btn-primary" value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                      <button v-else class="btn btn-outline-primary" value="< 30" v-on:click="Wiek = '< 30'"> < 30 </button>
                   
                      <button v-if="Wiek == '> 30'" class="btn btn-primary" value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>
                      <button v-else class="btn btn-outline-primary" value="> 30" v-on:click="Wiek = '> 30'"> 30 + </button>

                      <button v-if="Wiek == '> 40'" class="btn btn-primary" value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button>
                      <button v-else class="btn btn-outline-primary" value="< 40" v-on:click="Wiek = '> 40'"> 40 + </button> 
                    </div>                             
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <button v-if="Stanowisko == 'Pracownik'" class="btn btn-primary" value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik / specjalista</button>
                      <button v-else class="btn btn-outline-primary" value="Stanowisko" v-on:click="Stanowisko = 'Pracownik'" > pracownik / specjalista</button>

                      <button v-if="Stanowisko == 'Supervisor'" class="btn btn-primary" value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor / kierownik </button>
                      <button v-else class="btn btn-outline-primary" value="Stanowisko" v-on:click="Stanowisko = 'Supervisor'"> supervisor / kierownik </button>
                    </div>
                  </div>

                  <br>

                  <!-- Formularz z metodą post--> 
                  
                    <form action="post/post_employee.php" method="post">
                      <input type="hidden" name="typ" v-model="Typ" > 
                      <input type="hidden" name="wiek" v-model="Wiek" > 
                      <input type="hidden" name="stanowisko" v-model="Stanowisko"> 
                      <input type="submit" class="btn btn-outline-success" value="Pzejdż dalej" name="send">
                    </form>


                </div>  
            </div>
          </form> 
      <hr>      
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