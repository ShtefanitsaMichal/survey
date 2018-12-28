<?php require_once 'head.php' ?>

<?php require_once 'view/navbar.view.php' ?>
<?php require_once __ROOT__.'/controller/GetController.php' ?> 
<?php require_once __ROOT__.'/controller/GetTools.php' ?> 

<?php 
  $main_source1 = new GET(); 

  $main_apps = new Get_Tools;
  $main_tools = new Get_Tools;

  global $main_apps, $main_tools, $odp_int; 
?>

<div class="container" style="margin: 5vh auto;">
  <div id="App">
    <div class="card border-dark mb-3" style="max-width: 100%;">
      <div class="card-header">



        <?php
          if ($main_source1 -> main_source_1() == 'systemy informatyczne') {
              $main_apps -> main_apps();

              var_dump($odp_int); 
          }
          else 
          {
              $main_tools -> $main_tools();
          ;}
        ?>

        <?php global $main_tool; ?>
          <label v-if="source1 == 'systemy informatyczne'" class="control-label"><b>{{ source1 }} </b>?</label>
          <label v-else-if="source1 == 'zarządem SMP'" class="control-label"><b>{{ source1 }} </b>?</label>
          <label v-else-if="source1 == 'swoim działem'" class="control-label"><b>{{ source1 }} </b>?</label>
          <label v-else-if="source1 == 'pracownikami innego działu SMP'" class="control-label"><b>{{ source1 }} </b>?</label>
          <label v-else="source1 == 'bezpośrednim przyłożonym" class="control-label"><b>{{ source1 }} </b>?</label>
        </div>

        <div class="card-body text-dark">
        <div class="form-group ">
        <label class="control-label bold"></label>
        <div class="row">
          <div class="col-md-4">
            <label class="control-label bold">  

            </label>
          </div>

          <div class="col-md-8">
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-5">
                  <button v-if="opcja_1 == '5'" type="button" v-on:click="opcja_1 = '5'" v-bind="opcja_1" value="opcja_1" class="btn btn-danger btn-lg">Źle</button>
                  <button v-else type="button" v-on:click="opcja_1 = '5'" v-bind="opcja_1" value="opcja_1" class="btn btn-outline-secondary btn-lg">Źle</button>
                </div>
                <div class="btn-group mr-5">
                  <button v-if="opcja_1 == '4'" type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" class="btn btn-warning btn-lg">Raczej źle</button>
                  <button v-else type="button" v-on:click="opcja_1 = '4'" v-bind="opcja_1" class="btn btn-outline-secondary btn-lg">Raczej źle</button>
                </div>

                <div class="btn-group mr-5">  
                  <button v-if="opcja_1 == '2'" type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-info btn-lg">Raczej Dpbrze</button>
                  <button v-else type="button" v-on:click="opcja_1 = '2'" v-bind="opcja_1"  class="btn btn-outline-secondary btn-lg">Raczej Dobrze</button>
                </div> 
                <div class="btn-group mr-5"> 
                  <button v-if="opcja_1 == '1'" type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-success btn-lg">Dobrze</button>
                  <button v-else type="button" v-on:click="opcja_1 = '1'" v-bind="opcja_1"  class="btn btn-outline-secondary btn-lg">Dobrze</button>
                </div>
                </div>
              </div>
            </div>
          </div>

    
      
          <div class="row">
            <div class="col-auto col-4">
              <label class="control-label bold"> 
                <?php 
                  echo $odp_int[2]
                ?> 
              </label>
            </div>
            <div class="col-8">  
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_2 == '5'" type="button" v-on:click="opcja_2 = '5'" v-bind="opcja_1" class="btn btn-danger btn-lg">Źle</button>
                    <button v-else type="button" v-on:click="opcja_2 = '5'" v-bind="opcja_1" class="btn btn-outline-secondary btn-lg">Źle</button>
                  </div>

                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_2 == '4'" type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_2" class="btn btn-warning btn-lg">Raczej źle</button>
                    <button v-else type="button" v-on:click="opcja_2 = '4'" v-bind="opcja_2" class="btn btn-outline-secondary btn-lg">Raczej źle</button>  
                  </div> 

                  <div class="btn-group mr-5" role="group" aria-label="First group">  
                    <button v-if="opcja_2 == '2'" type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-info btn-lg">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="opcja_2 = '2'" v-bind="opcja_2" class="btn btn-outline-secondary btn-lg">Raczej dobrze</button>  
                  </div> 

                  <div class="btn-group mr-5" role="group" aria-label="First group"> 
                    <button v-if="opcja_2 == '1'" type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-success btn-lg">Dobrze</button>
                    <button v-else type="button" v-on:click="opcja_2 = '1'" v-bind="opcja_2" class="btn btn-outline-secondary btn-lg">Dobrze</button>  
                  </div>

                </div>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-auto col-4">
              <label class="control-label bold"> 
                <?php 
                   echo $odp_int[3]
                ?>
              </label>
            </div>
            <div class="col-8">  
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_3 == '5'" type="button" v-on:click="opcja_3 = '5'" v-bind="opcja_3" class="btn btn-danger btn-lg">Źle</button>
                    <button v-else type="button" v-on:click="opcja_3 = '5'" v-bind="opcja_3" class="btn btn-outline-secondary btn-lg">Źle</button>
                    
                    </div>
                  <div class="btn-group mr-5" role="group" aria-label="First group">
                    <button v-if="opcja_3 == '4'" type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-warning btn-lg">Raczej źle</button>
                    <button v-else type="button" v-on:click="opcja_3 = '4'" v-bind="opcja_3" class="btn btn-outline-secondary btn-lg">Raczej źle</button>
                  </div> 


                  <div class="btn-group mr-5" role="group" aria-label="First group">  
                    <button v-if="opcja_3 == '2'" type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-info btn-lg">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="opcja_3 = '2'" v-bind="opcja_3" class="btn btn-outline-secondary btn-lg">Raczej dobrze</button>
                    
                    </div> 
                  <div class="btn-group mr-5" role="group" aria-label="First group"> 
                    <button v-if="opcja_3 == '1'" type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-success btn-lg">Dobrze</button>
                    <button v-else type="button" v-on:click="opcja_3 = '1'" v-bind="opcja_3" class="btn btn-outline-secondary btn-lg">Dobrze</button>
                    
                    </div> 
                  </div>
                </div>
              </div>
            </div>

      <div class="row">
        <div class="col-auto col-4">
          <label class="control-label bold"> 
            <?php 
               echo $odp_int[4]
            ?> 
          </label>
        </div>
        <div class="col-8">  
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_4 == '5'" type="button" v-on:click="opcja_4 = '5'" v-bind="opcja_4" class="btn btn-danger btn-lg">Źle</button>
                <button v-else type="button" v-on:click="opcja_4 = '5'" v-bind="opcja_4" class="btn btn-outline-secondary btn-lg">Źle</button>
            </div>
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_4 == '4'" type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-warning btn-lg">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_4 = '4'" v-bind="opcja_4" class="btn btn-outline-secondary btn-lg">Raczej źle</button>
            </div> 

              <div class="btn-group mr-5" role="group" aria-label="First group">  
                <button v-if="opcja_4 == '2'" type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-info btn-lg">Raczej dobrze</button>
                <button v-else type="button" v-on:click="opcja_4 = '2'" v-bind="opcja_4" class="btn btn-outline-secondary btn-lg">Raczej dobrze</button>
            </div> 
              <div class="btn-group mr-5" role="group" aria-label="First group"> 
                <button v-if="opcja_4 == '1'" type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-success btn-lg">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_4 = '1'" v-bind="opcja_4" class="btn btn-outline-secondary btn-lg">Dobrze</button>
            </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-auto col-4">
          <label class="control-label bold"> 
            <?php 
               echo $odp_int[5];
            ?> 
          </label>
        </div>
        <div class="col-8">  
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_5 == '5'" type="button" v-on:click="opcja_5 = '5'" v-bind="opcja_5" class="btn btn-danger btn-lg">Źle</button>
                <button v-else type="button" v-on:click="opcja_5 = '5'" v-bind="opcja_5" class="btn btn-outline-secondary btn-lg">Źle</button>
                </div>
              <div class="btn-group mr-5" role="group" aria-label="First group">
                <button v-if="opcja_5 == '4'" type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-warning btn-lg">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_5 = '4'" v-bind="opcja_5" class="btn btn-outline-secondary btn-lg">Raczej źle</button>
              </div> 

              <div class="btn-group mr-5" role="group" aria-label="First group">  
                <button v-if="opcja_5 == '2'" type="button" v-on:click="opcja_5 = 'Raczej_dobrze'" v-bind="opcja_5" class="btn btn-info btn-lg">Raczej dobrze</button>
                <button v-else type="button" v-on:click="opcja_5 = '2'" v-bind="opcja_5" class="btn btn-outline-secondary btn-lg">Raczej dobrze</button>
                </div> 
              <div class="btn-group mr-5" role="group" aria-label="First group"> 
                <button v-if="opcja_5 == '1'" type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-success btn-lg">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_5 = '1'" v-bind="opcja_5" class="btn btn-outline-secondary btn-lg">Dobrze</button>
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

              <input type="hidden" name="opcja_1_title" value="<?php print $odp_int[1] ?>">
              <input type="hidden" name="opcja_2_title" value="<?php print $odp_int[2] ?>">
              <input type="hidden" name="opcja_3_title" value="<?php print $odp_int[3] ?>">
              <input type="hidden" name="opcja_4_title" value="<?php print $odp_int[4] ?>">
              <input type="hidden" name="opcja_5_title" value="<?php print $odp_int[5] ?>"> 

              <span v-if="opcja_1 != '' && opcja_2 != '' && opcja_3 != '' && opcja_4 != '' && opcja_5 != '' " > <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-success btn-lg btn-block"> </span>
              <span v-else> <input  value="Pzejdź dalej" type="submit" name="send"   class="btn btn-outline-secondary btn-lg btn-block disabled"> </span>
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
          el: '#App',
            data: {
                    opcja_1: '',
                    opcja_2: '',
                    opcja_3: '',
                    opcja_4: '',
                    opcja_5: '',
                    source1: '<?php $main_source1 -> main_source_1(); ?>',
                    source2: '<?php $main_source1 -> main_source_2(); ?>'
                  }  
        })
</script>