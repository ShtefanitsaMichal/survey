<?php require_once 'head.php' ?>

<?php require_once 'view/navbar.view.php' ?>
<?php require_once __ROOT__.'/controller/GetController.php' ?> 


<?php $_SESSION['source_number'] = 1 ?>

<?php 
      if(isset($_SESSION["source1"]))
      {
        require_once (__ROOT__."/view/alerts/already_done.php");
        die;
      } 
    ?>

<?php 
  $main_source = new GET(); 

  global $main_apps, $main_tools;
?>

<div class="container" style="margin: 5vh auto;">
  <div class="App">
    <div class="card border-dark mb-3" style="max-width: 100%;">

        <?php
          if ($main_source -> main_source_1() == 4) {
            require_once __ROOT__.'/controller/GetMainApps.php';
            $main = $main_apps;
          }
          else 
          { require_once __ROOT__.'/controller/GetMainTools.php';
            $main = $main_tools;
          }
        ?>
          
        <?php include(__ROOT__."/templates/CardHeaderRate.html.php")?>
        
        
        <?php 
            require "constants.php" 
        ?>

        <div class="card-body text-dark">
        <div class="form-group ">
        <label class="control-label bold"></label>
        <div class="row">
          <div class="col-md-4">
            <label class="control-label bold">
             {{ opcja_1_title }}
            </label>
          </div>
          
          <div class="col-md-8">
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                <div class="btn-group mr-5">
                  <button v-if="opcja_1 == '4'" type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" value="opcja_1" class="btn btn-danger btn-lg">Źle</button>
                  <button v-else type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" value="opcja_1" class="btn btn-outline-danger btn-lg">Źle</button>
                </div>

                <div class="btn-group mr-5">
                  <button v-if="opcja_1 == '3'" type="button" v-on:click="opcja_1 = '3'" v-bind="opcja_1" class="btn btn-warning btn-lg">Raczej źle</button>
                  <button v-else type="button" v-on:click="opcja_1 = '3'" v-bind="opcja_1" class="btn btn-outline-warning btn-lg">Raczej źle</button>
                </div>

                <div class="btn-group mr-5">  
                  <button v-if="opcja_1 == '2'" type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-info btn-lg">Raczej Dobrze</button>
                  <button v-else type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-outline-info btn-lg">Raczej Dobrze</button>
                </div> 

                <div class="btn-group mr-5"> 
                  <button v-if="opcja_1 == '1'" type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-success btn-lg">Dobrze</button>
                  <button v-else type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-outline-success btn-lg">Dobrze</button>
                </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-auto col-4">
              <label class="control-label bold"> 
               {{ opcja_2_title }}
              </label>
            </div>
            <div class="col-8">  
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_2 == '4'" type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_1" class="btn btn-danger btn-lg">Źle</button>
                    <button v-else type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_1" class="btn btn-outline-danger btn-lg">Źle</button>
                  </div>

                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_2 == '3'" type="button" v-on:click="opcja_2 = '3'" v-bind="opcja_2" class="btn btn-warning btn-lg">Raczej źle</button>
                    <button v-else type="button" v-on:click="opcja_2 = '3'" v-bind="opcja_2" class="btn btn-outline-warning btn-lg">Raczej źle</button>  
                  </div> 

                  <div class="btn-group mr-5" role="group" aria-label="First group">  
                    <button v-if="opcja_2 == '2'" type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-info btn-lg">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-outline-info btn-lg">Raczej dobrze</button>  
                  </div> 

                  <div class="btn-group mr-5" role="group" aria-label="First group"> 
                    <button v-if="opcja_2 == '1'" type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-success btn-lg">Dobrze</button>
                    <button v-else type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-outline-success btn-lg">Dobrze</button>  
                  </div>

                </div>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-auto col-4">
              <label class="control-label bold"> 
             {{ opcja_3_title }}
              </label>
            </div>
            <div class="col-8">  
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_3 == '4'" type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-danger btn-lg">Źle</button>
                    <button v-else type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-outline-danger btn-lg">Źle</button>
                    
                    </div>
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_3 == '3'" type="button" v-on:click="opcja_3 = '3'" v-bind="opcja_3" class="btn btn-warning btn-lg">Raczej źle</button>
                    <button v-else type="button" v-on:click="opcja_3 = '3'" v-bind="opcja_3" class="btn btn-outline-warning btn-lg">Raczej źle</button>
                  </div> 


                  <div class="btn-group mr-5" role="group" aria-label="First group">  
                    <button v-if="opcja_3 == '2'" type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-info btn-lg">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-outline-info btn-lg">Raczej dobrze</button>
                    
                    </div> 
                  <div class="btn-group mr-5" role="group" aria-label="First group"> 
                    <button v-if="opcja_3 == '1'" type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-success btn-lg">Dobrze</button>
                    <button v-else type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-outline-success btn-lg">Dobrze</button>
                    
              </div> 
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-auto col-4">
          <label class="control-label bold"> 
              {{ opcja_4_title }}
          </label>
        </div>
        <div class="col-8">  
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_4 == '4'" type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-danger btn-lg">Źle</button>
                <button v-else type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-outline-danger btn-lg">Źle</button>
            </div>
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_4 == '3'" type="button" v-on:click="opcja_4 = '3'" v-bind="opcja_4" class="btn btn-warning btn-lg">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_4 = '3'" v-bind="opcja_4" class="btn btn-outline-warning btn-lg">Raczej źle</button>
            </div> 

              <div class="btn-group mr-5" role="group" aria-label="First group">  
                <button v-if="opcja_4 == '2'" type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-info btn-lg">Raczej dobrze</button>
                <button v-else type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-outline-info btn-lg">Raczej dobrze</button>
            </div> 
              <div class="btn-group mr-5" role="group" aria-label="First group"> 
                <button v-if="opcja_4 == '1'" type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-success btn-lg">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-outline-success btn-lg">Dobrze</button>
            </div> 
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-auto col-4">
          <label class="control-label bold"> 
            {{ opcja_5_title }}
          </label>
        </div>
        <div class="col-8">  
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_5 == '4'" type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-danger btn-lg">Źle</button>
                <button v-else type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-outline-danger btn-lg">Źle</button>
                </div>
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_5 == '3'" type="button" v-on:click="opcja_5 = '3'" v-bind="opcja_5" class="btn btn-warning btn-lg">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_5 = '3'" v-bind="opcja_5" class="btn btn-outline-warning btn-lg">Raczej źle</button>
              </div> 

              <div class="btn-group mr-5" role="group" aria-label="First group">  
                <button v-if="opcja_5 == '2'" type="button" v-on:click="opcja_5 = 'Raczej_dobrze'" v-bind="opcja_5" class="btn btn-info btn-lg">Raczej dobrze</button>
                <button v-else type="button" v-on:click="opcja_5 = '2'" v-bind="opcja_5" class="btn btn-outline-info btn-lg">Raczej dobrze</button>
                </div> 
              <div class="btn-group mr-5" role="group" aria-label="First group"> 
                <button v-if="opcja_5 == '1'" type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-success btn-lg">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-outline-success btn-lg">Dobrze</button>
                </div> 
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 ">
            <form action="post/post_rate.php" method="POST">
              <input type="hidden" name="opcja_1" v-model="opcja_1">
              <input type="hidden" name="opcja_2" v-model="opcja_2">
              <input type="hidden" name="opcja_3" v-model="opcja_3">
              <input type="hidden" name="opcja_4" v-model="opcja_4">
              <input type="hidden" name="opcja_5" v-model="opcja_5">

              <input type="hidden" name="opcja_1_title" :value="opcja_1_title">
              <input type="hidden" name="opcja_2_title" :value="opcja_2_title">
              <input type="hidden" name="opcja_3_title" :value="opcja_3_title">
              <input type="hidden" name="opcja_4_title" :value="opcja_4_title">
              <input type="hidden" name="opcja_5_title" :value="opcja_5_title"> 

              <span v-if="opcja_1 != '' && opcja_2 != '' && opcja_3 != '' && opcja_4 != '' && opcja_5 != '' " > <input  value="Przejdź dalej" type="submit" name="send"   class="btn btn-success btn-lg btn-block col-10 offset-1"> </span>
              <span v-else> <input  value="Przejdź dalej" type="submit" name="send"  class="btn btn-outline-secondary btn-lg btn-block disabled col-10 offset-1" disabled> </span>
            </form>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>  
</div>

<script>
   new Vue({
          el: '.App',
          data: {
                  opcja_1_title: '<?php $opcja_1 = key($main); print(constant($opcja_1)); next($main);?>',
                  opcja_2_title: '<?php $opcja_2 = key($main); print(constant($opcja_2)); next($main);?>',
                  opcja_3_title: '<?php $opcja_3 = key($main); print(constant($opcja_3)); next($main);?>',
                  opcja_4_title: '<?php $opcja_4 = key($main); print(constant($opcja_4)); next($main);?>',
                  opcja_5_title: '<?php $opcja_5 = key($main); print(constant($opcja_5)); next($main);?>',
                  opcja_1: '',
                  opcja_2: '',
                  opcja_3: '',
                  opcja_4: '',
                  opcja_5: '',
                  source1: '<?php echo $main_source -> main_source_1(); ?>',
                  source2: '<?php echo $main_source -> main_source_2(); ?>'
                }
        })
</script>