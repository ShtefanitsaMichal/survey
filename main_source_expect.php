<?php require_once "head.php" ?>
<?php $_SESSION['source_number']  = 2;?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?>


<!-- <?php 

  //  if (main_source_2() == 'bazą danych') {
  //     require "view/get_main_apps.view.php";
  //     $main = $main_apps;
  //   } 
  //     else 
  //   { 
  //     require "view/get_main_tools.view.php"; 
  //     $main = $main_tools;    
  //   ;}
      
?>  -->

<?php global $main_tool; ?>

        <div id="App">
        
                <div class="form-group">
                  
                  <div class="col bg-white" >
                      <div class="row">
                      <div class="col-md-12">
                        <label class="control-label "  >
                          <h5> 
                            Jakich informacji oczekujesz od poszczególnych żródeł w komunikacji z <?php print main_source_2() ?>
                          </h5>
                        </label>
                      </div>
                      <div class="col-md-8">  
                     
                      </div>
                  </div>    
                <br>         

                <br>
               <!--  opcja 1  -->
                <div class="row">
                  <div class="col-md-2 ">
                     <label class="control-label bold" >
                      Zarząd / Dyrektorzy
                  </label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control" v-model="zarzad" type="text">
                  </div>
                </div>

                  <br>
                <!--  opcja 1  -->
                <div class="row">
                  <div class="col-md-2">
                     <label class="control-label bold" >
                    Bezpośredni przełożony 
                  </label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control" v-model="przylozony" type="text">
                  </div>
                </div>
                
                <br>
                <!--  opcja 2  -->
                <div class="row">
                  <div class="col-md-2">
                     <label class="control-label bold" >
                    Współpracownicy w dziale/sekcji 
                  </label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control" v-model="dzial" type="text">
                  </div>
                </div>

                <br>  
                <!--  opcja 2  -->
                <div class="row">
                  <div class="col-md-2">
                     <label class="control-label bold" >
                    Pracownicy innych działów / sekcji  
                  </label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control" v-model="inny_dzial" type="text">
                  </div>
                </div>

                  <br>

                <!--  opcja 3  -->
                <div class="row">
                  <div class="col-md-2">
                     <label class="control-label bold" >
                    Bazy danych 
                  </label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control" v-model="bazy_danych" type="text">
                  </div>
                </div>  
          </div>
        </div>
        <form action="post/post_expectetation.php" method="POST">
          <input type="hidden" name="zarzad" v-model="zarzad">
          <input type="hidden" name="przylozony" v-model="przylozony">
          <input type="hidden" name="dzial" v-model="dzial">
          <input type="hidden" name="inny_dzial" v-model="inny_dzial">
          <input type="hidden" name="baza_danych" v-model="baza_danych">

          
          <input type="submit" name="send" class="btn btn-outline-success" value="Zakocz anketowanie "> 
        </form>
      </div>
      
                  
<script>
   new Vue({
          el: '#App',
          data: {
            zarzad: '',
            przylozony: '',          
            dzial: '',
            inny_dzial: '',
            baza_danych: ''
            }
          
        })
</script>  