<?php require_once 'head.php' ?>
<?php $_SESSION['source_number'] = 1 ?>
<?php require_once 'view/navbar.view.php' ?>
<?php require_once 'functions.php' ?>
<?php require_once 'view/get_main_source.view.php' ?> 


<?php 
        var_dump(main_source_1());
        var_dump(main_source_2());
    

       if (main_source_1() == 'systemy informatyczne') {
          require "view/get_main_apps.view.php";
          $main = $main_apps;
        } 
          else 
        { 
          require "view/get_main_tools.view.php"; 
          $main = $main_tools; 

        ;}
        
        ?> 

  <?php global $main_tool; ?>
       
  <div id="App">
      <label class="control-label"  >
        <h5> 
          Jak oceniasz efektywnoś komunikacji z <b><?php echo main_source_1(); ?></b> ?
        </h5>
      </label>
    <div class="form-group ">
      <label class="control-label bold">
        
      </label>
        <br>
      <div class="row">
        <div class="col-md-4">
          <label class="control-label bold">
          
            <?php 
                  $opcja_1 = key($main);
                  echo change_name($opcja_1);
                  next($main);
            ?>

          </label>
        </div>  
        <div class="col-md-8">
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-2">
                <button v-if="opcja_1 == '5'" type="button" v-on:click="opcja_1 = '5'" v-bind="opcja_1" value="opcja_1" class="btn btn-danger">Źle</button>
                <button v-else type="button" v-on:click="opcja_1 = '5'" v-bind="opcja_1" value="opcja_1" class="btn btn-outline-danger">Źle</button>
              </div>
              <div class="btn-group mr-2">
                <button v-if="opcja_1 == '4'" type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" class="btn btn-warning">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" class="btn btn-outline-warning">Raczej źle</button>
              </div> 
              <div class="btn-group mr-2"> 
                <button v-if="opcja_1 == '3'" type="button" v-on:click="opcja_1 = '3'" v-bind="opcja_1" class="btn btn-primary">Ani dobrze, ani źle </button>
                <button v-else type="button" v-on:click="opcja_1 = '3'" v-bind="opcja_1" class="btn btn-outline-primary">Ani dobrze, ani źle </button>
              </div>
              <div class="btn-group mr-2">  
                <button v-if="opcja_1 == '2'" type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-info">Raczej Dpbrze</button>
                <button v-else type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-outline-info">Raczej Dobrze</button>
              </div> 
              <div class="btn-group mr-2"> 
                <button v-if="opcja_1 == '1'" type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-success">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-outline-success">Dobrze</button>
              </div> 
              </div>
            </div>   
          </div>
        </div>

  
    
        <div class="row">
          <div class="col-auto col-4">
            <label class="control-label bold"> 
              <?php 
                    $opcja_2 = key($main);
                    echo change_name($opcja_2);
                    next($main);
              ?> 
            </label>
          </div>
          <div class="col-8">  
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="opcja_2 == '5'" type="button" v-on:click="opcja_2 = '5'" v-bind="opcja_1" class="btn btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="opcja_2 = '5'" v-bind="opcja_1" class="btn btn-outline-danger">Źle</button>
                  
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="opcja_2 == '4'" type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_2" class="btn btn-warning">Raczej źle</button>
                  <button v-else type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_2" class="btn btn-outline-warning">Raczej źle</button>  
                </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="opcja_2 == '3'" type="button" v-on:click="opcja_2 = '3'" v-bind="opcja_2" class="btn btn-primary">Ani dobrze, ani źle </button>
                  <button v-else type="button" v-on:click="opcja_2 = '3'" v-bind="opcja_2" class="btn btn-outline-primary">Ani dobrze, ani źle </button>  
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="opcja_2 == '2'" type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-info">Raczej dobrze</button>
                  <button v-else type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-outline-info">Raczej dobrze</button>  
                </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="opcja_2 == '1'" type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-success">Dobrze</button>
                  <button v-else type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-outline-success">Dobrze</button>  
                </div> 
              </div>
            </div>           
          </div>
        </div>  
    
        <div class="row">
          <div class="col-auto col-4">
            <label class="control-label bold"> 
              <?php 
                    $opcja_3 = key($main);
                    echo change_name($opcja_3);
                    next($main);
              ?> 
            </label>
          </div>
          <div class="col-8">  
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="opcja_3 == '5'" type="button" v-on:click="opcja_3 = '5'" v-bind="opcja_3" class="btn btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="opcja_3 = '5'" v-bind="opcja_3" class="btn btn-outline-danger">Źle</button>
                  
                  </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="opcja_3 == '4'" type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-warning">Raczej źle</button>
                  <button v-else type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-outline-warning">Raczej źle</button>
                  
                  </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="opcja_3 == '3'" type="button" v-on:click="opcja_3 = '3'" v-bind="opcja_3" class="btn btn-primary">Ani dobrze, ani źle </button>
                  <button v-else type="button" v-on:click="opcja_3 = '3'" v-bind="opcja_3" class="btn btn-outline-primary">Ani dobrze, ani źle </button>
                  
                  </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="opcja_3 == '2'" type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-info">Raczej dobrze</button>
                  <button v-else type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-outline-info">Raczej dobrze</button>
                  
                  </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="opcja_3 == '1'" type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-success">Dobrze</button>
                  <button v-else type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-outline-success">Dobrze</button>
                  
                  </div> 
                </div>
              </div>           
            </div>
        </div>

    <div class="row">
      <div class="col-auto col-4">
        <label class="control-label bold"> 
          <?php 
                $opcja_4 = key($main);
                echo change_name($opcja_4);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-8">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="opcja_4 == '5'" type="button" v-on:click="opcja_4 = '5'" v-bind="opcja_4" class="btn btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_4 = '5'" v-bind="opcja_4" class="btn btn-outline-danger">Źle</button>
           </div>
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="opcja_4 == '4'" type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-outline-warning">Raczej źle</button>
           </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="opcja_4 == '3'" type="button" v-on:click="opcja_4 = '3'" v-bind="opcja_4" class="btn btn-primary">Ani dobrze, ani źle </button>
              <button v-else type="button" v-on:click="opcja_4 = '3'" v-bind="opcja_4" class="btn btn-outline-primary">Ani dobrze, ani źle </button>
           </div>
            <div class="btn-group mr-2" role="group" aria-label="First group">  
              <button v-if="opcja_4 == '2'" type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-outline-info">Raczej dobrze</button>
           </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="opcja_4 == '1'" type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-outline-success">Dobrze</button>
           </div> 
          </div>
        </div>           
      </div>
    </div>
    <div class="row">
      <div class="col-auto col-4">
        <label class="control-label bold"> 
          <?php 
                $opcja_5 = key($main);
                echo change_name($opcja_5);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-8">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="opcja_5 == '5'" type="button" v-on:click="opcja_5 = '5'" v-bind="opcja_5" class="btn btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_5 = '5'" v-bind="opcja_5" class="btn btn-outline-danger">Źle</button>
              </div>
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="opcja_5 == '4'" type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-outline-warning">Raczej źle</button>
              </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="opcja_5 == '3'" type="button" v-on:click="opcja_5 = '3'" v-bind="opcja_5" class="btn btn-primary">Ani dobrze, ani źle </button>
              <button v-else type="button" v-on:click="opcja_5 = '3'" v-bind="opcja_5" class="btn btn-outline-primary">Ani dobrze, ani źle </button>
              </div>
            <div class="btn-group mr-2" role="group" aria-label="First group">  
              <button v-if="opcja_5 == '2'" type="button" v-on:click="opcja_5 = 'Raczej_dobrze'" v-bind="opcja_5" class="btn btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_5 = '2'" v-bind="opcja_5" class="btn btn-outline-info">Raczej dobrze</button>
              </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="opcja_5 == '1'" type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-outline-success">Dobrze</button>
              </div> 
            </div>
          </div>           
        </div>
     
      <div class="row">
        <div class="col-md-5 offset-4">
          <form action="post/post_rate.php" method="POST">
            <input type="hidden" name="opcja_1" v-model="opcja_1">
            <input type="hidden" name="opcja_2" v-model="opcja_2">
            <input type="hidden" name="opcja_3" v-model="opcja_3">
            <input type="hidden" name="opcja_4" v-model="opcja_4">
            <input type="hidden" name="opcja_5" v-model="opcja_5">
            <input type="hidden" name="opcja_1_title" value="<?php print $opcja_1 ?>">
            <input type="hidden" name="opcja_2_title" value="<?php print $opcja_2 ?>">
            <input type="hidden" name="opcja_3_title" value="<?php print $opcja_3 ?>">
            <input type="hidden" name="opcja_4_title" value="<?php print $opcja_4 ?>">
            <input type="hidden" name="opcja_5_title" value="<?php print $opcja_5 ?>"> 
            <input type="submit" value="Przejdź dalej" name="send" class="btn btn-outline-success" > 
          </form>
        </div>
      </div>
    </div>
  </div>  



                    
               
            
<script>
   new Vue({
          el: '#App',
            data: {
              opcja_1: '',
              opcja_2: '',          
              opcja_3: '',
              opcja_4: '',
              opcja_5: ''
              }
        })
</script>  


      