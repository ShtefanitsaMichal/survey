<?php require_once "head.php" ?>
<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_apps.view.php" ?> 
       
                  <div id="App">

                    <div class="form-group ">
                      <label class="control-label"  >
                        <h5> 
                            Jak oceniasz efektywnoś komunikacji z danymi żrodłami
                        </h5>
                      </label>

                      <label class="control-label bold">
                        
                      </label>
                        <br>
                      <div class="row">
                        <div class="col-md-2">
                          <label class="control-label bold">
                            <?php 
                                  $opcja_1 = key($main_tool);
                                  print($opcja_1);
                                  next($main_tool);
                            ?>
                          </label>
                        </div>  

                        <div class="col-md-8">
                          <div class="form-group ">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group mr-2">
                                <button type="button" v-on:click="opcja_1 = 'zle'" v-model="opcja_1" value="opcja_1" class="btn btn-outline-danger">Źle</button></div>
                              <div class="btn-group mr-2">
                                <button type="button" v-on:click="opcja_1 = 'raczej_zle'" v-model="opcja_1" class="btn btn-outline-warning">Raczej źle</button></div> 
                              <div class="btn-group mr-2"> 
                                <button type="button" v-on:click="opcja_1 = 'ani_ani'" v-model="opcja_1" class="btn btn-outline-primary">Ani dobrze ani źle </button></div>
                              <div class="btn-group mr-2">  
                                <button type="button" v-on:click="opcja_1 = 'raczej_dobrze'" v-model="opcja_1"  class="btn btn-outline-info">Raczej dobrze</button></div> 
                              <div class="btn-group mr-2"> 
                                <button type="button" v-on:click="opcja_1 = 'dobrze'" v-model="opcja_1"  class="btn btn-outline-success">Dobrze</button></div> 
                              </div>
                            </div>   
                          </div>
                        
                        <div class="col-md-2">
                            <p>{{ opcja_1 }}</p>
                        </div>  
                      </div>  
                    
                    <div class="row">
                      <div class="col-auto col-2">
                        <label class="control-label bold"> 
                          <?php 
                                $opcja_2 = key($main_tool);
                                print($opcja_2);
                                next($main_tool);
                          ?> 
                        </label>
                      </div>

                      <div class="col-8">  
                        <div class="form-group ">
                          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_2 = 'zle'" v-model="opcja_1" class="btn btn-outline-danger">Źle</button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_2 = 'raczej_zle'" v-model="opcja_2" class="btn btn-outline-warning">Raczej źle</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_2 = 'ani_ani'" v-model="opcja_2" class="btn btn-outline-primary">Ani dobrze ani źle </button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">  
                              <button type="button" v-on:click="opcja_2 = 'raczej_dobrze'" v-model="opcja_2" class="btn btn-outline-info">Raczej dobrze</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_2 = 'dobrze'" v-model="opcja_2" class="btn btn-outline-success">Dobrze</button></div> 
                            </div>
                          </div>           
                        </div>
                     
                      <div class="col-2">
                        <p>{{ opcja_2 }}</p>
                      </div>
                    </div>  
                    

                    <div class="row">
                      <div class="col-auto col-2">
                        <label class="control-label bold"> 
                          <?php 
                                $opcja_3 = key($main_tool);
                                print($opcja_3);
                                next($main_tool);
                          ?> 
                        </label>
                      </div>

                      <div class="col-8">  
                        <div class="form-group ">
                          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_3 = 'zle'" v-model="opcja_3" class="btn btn-outline-danger">Źle</button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_3 = 'raczej_zle'" v-model="opcja_3" class="btn btn-outline-warning">Raczej źle</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_3 = 'ani_ani'" v-model="opcja_3" class="btn btn-outline-primary">Ani dobrze ani źle </button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">  
                              <button type="button" v-on:click="opcja_3 = 'raczej_dobrze'" v-model="opcja_3" class="btn btn-outline-info">Raczej dobrze</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_3 = 'dobrze'" v-model="opcja_3" class="btn btn-outline-success">Dobrze</button></div> 
                            </div>
                          </div>           
                        </div>
                     
                      <div class="col-2">
                        <p>{{ opcja_3 }}</p>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-auto col-2">
                        <label class="control-label bold"> 
                          <?php 
                                $opcja_4 = key($main_tool);
                                print($opcja_4);
                                next($main_tool);
                          ?> 
                        </label>
                      </div>

                      <div class="col-8">  
                        <div class="form-group ">
                          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_4 = 'zle'" v-model="opcja_4" class="btn btn-outline-danger">Źle</button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_4 = 'raczej_zle'" v-model="opcja_4" class="btn btn-outline-warning">Raczej źle</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_4 = 'ani_ani'" v-model="opcja_4" class="btn btn-outline-primary">Ani dobrze ani źle </button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">  
                              <button type="button" v-on:click="opcja_4 = 'raczej_dobrze'" v-model="opcja_4" class="btn btn-outline-info">Raczej dobrze</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_4 = 'dobrze'" v-model="opcja_4" class="btn btn-outline-success">Dobrze</button></div> 
                            </div>
                          </div>           
                        </div>
                     
                      <div class="col-2">
                        <p>{{ opcja_4 }}</p>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-auto col-2">
                        <label class="control-label bold"> 
                          <?php 
                                $opcja_5 = key($main_tool);
                                print($opcja_5);
                                next($main_tool);
                          ?> 
                        </label>
                      </div>

                      <div class="col-8">  
                        <div class="form-group ">
                          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_5 = 'zle'" v-model="opcja_5" class="btn btn-outline-danger">Źle</button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" v-on:click="opcja_5 = 'raczej_zle'" v-model="opcja_5" class="btn btn-outline-warning">Raczej źle</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_5 = 'ani_ani'" v-model="opcja_5" class="btn btn-outline-primary">Ani dobrze ani źle </button></div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">  
                              <button type="button" v-on:click="opcja_5 = 'Raczej_dobrze'" v-model="opcja_5" class="btn btn-outline-info">Raczej dobrze</button></div> 
                            <div class="btn-group mr-2" role="group" aria-label="First group"> 
                              <button type="button" v-on:click="opcja_5 = 'dobrze'" v-model="opcja_5" class="btn btn-outline-success">Dobrze</button></div> 
                            </div>
                          </div>           
                        </div>
                     
                      <div class="col-2">
                        <p>{{ opcja_5 }}</p>
                      </div>

                      <form action="post/post_5_1.php" method="POST">
                        <input type="text" name="opcja_1" v-model="opcja_1">
                        <input type="text" name="opcja_2" v-model="opcja_2">
                        <input type="text" name="opcja_3" v-model="opcja_3">
                        <input type="text" name="opcja_4" v-model="opcja_4">
                        <input type="text" name="opcja_5" v-model="opcja_5">
                        <input type="text" name="opcja_1_title" value="<?php print $opcja_1 ?>">
                        <input type="text" name="opcja_2_title" value="<?php print $opcja_2 ?>">
                        <input type="text" name="opcja_3_title" value="<?php print $opcja_3 ?>">
                        <input type="text" name="opcja_4_title" value="<?php print $opcja_4 ?>">
                        <input type="text" name="opcja_5_title" value="<?php print $opcja_5 ?>">
                        
                        <input type="submit" name="send" class="btn btn-outline-success" > 
                      </form>
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


      