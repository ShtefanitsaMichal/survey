<?php require_once 'head.php' ?>

<?php require_once 'view/navbar.view.php' ?>
<?php require_once __ROOT__.'/controller/GetController.php' ?> 





<?php 
      if(isset($_SESSION["expectation"]))
      {
        require_once (__ROOT__."/view/alerts/already_done.php");
        die;
      } 
    ?> 

<?php global $main_tool; ?>
<div class="container" style="margin: 5vh auto;">
<div id="App">
    <div class="card border-dark mb-3" style="max-width: 100%;">
        <div class="card-header">
            <label class="control-label "  >
              <h5>
                  Jakich informacji oczekujesz od poszczególnych źródeł ? Jakie działania poprawią komunikację ? 
              </h5>
            </label>
        </div>
        <div class="card-body text-dark">
        <div class="form-group ">

           <!--  opcja 1  -->
            <div class="row">
              <div class="col-md-4 ">
                <label class="control-label bold" >
                    Zarząd / Dyrektorzy
                </label>
              </div>
              <div class="col-md-8">
                <textarea class="form-control" v-model="zarzad" type="text" rows="3"></textarea>
              </div>
            </div>

              <br>
            <!--  opcja 2  -->
            <div class="row">
              <div class="col-md-4">
                <label class="control-label bold" >
                  Bezpośredni przełożony 
                </label>
              </div>
              <div class="col-md-8">
                <textarea class="form-control" v-model="przelozony" type="text" rows="3"></textarea>
              </div>
            </div>
            
            <br>
            <!--  opcja 3  -->
            <div class="row">
              <div class="col-md-4">
                 <label class="control-label bold" >
                Współpracownicy w dziale/sekcji 
              </label>
              </div>
              <div class="col-md-8">
                <textarea class="form-control" v-model="dzial" type="text" rows="3"></textarea>
              </div>
            </div>

            <br>  
            <!--  opcja 4  -->
            <div class="row">
              <div class="col-md-4">
                 <label class="control-label bold" >
                Pracownicy innych działów / sekcji  
              </label>
              </div>
              <div class="col-md-8">
                <textarea class="form-control" v-model="inny_dzial" type="text" rows="3"></textarea>
              </div>
            </div>

              <br>

            <!--  opcja 5  -->
            <div class="row">
              <div class="col-md-4">
                <label class="control-label bold" >
                  Systemy informatyczne
                </label>
              </div>
              <div class="col-md-8">
                <textarea class="form-control" v-model="baza_danych" rows="3"></textarea>
              </div>
            </div>  
      </div>
    </div>
    
<div class="row">
  <div class="col-md-10 offset-1 ">
    <form action="post/post_expectetation.php" method="POST">
      <input type="hidden" name="zarzad" v-model="zarzad">
      <input type="hidden" name="przelozony" v-model="przelozony">
      <input type="hidden" name="dzial" v-model="dzial">
      <input type="hidden" name="inny_dzial" v-model="inny_dzial">
      <input type="hidden" name="baza_danych" v-model="baza_danych">

      
      <input type="submit" name="send" class="btn btn-outline-success btn-lg btn-block" value="Zakończ"> 
    </form>
  </div>
      
                  
<script>
   new Vue({
          el: '#App',
          data: {
            zarzad: '',
            przelozony: '',          
            dzial: '',
            inny_dzial: '',
            baza_danych: ''
            }
          
        })
</script>  