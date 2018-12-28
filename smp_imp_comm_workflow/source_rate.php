
  <?php require_once "head.php" ?>
  <?php require_once "view/navbar.view.php" ?>

<div class="container" style="margin: 20vh auto;">
<div class="card border-primary mb-0">

<div class="card-header" >
  <h5>
    Jak  oceniasz   komunikację  z poszczególnymi  źródłami 
  </h5>
</div>

<div class="card-body">
  <div class="form-group ">
    <div class="App"> 
      <div class="row">
        <div class="col-md-5">
          <label class="text-secondary"><h5> 1. Zarząd/Dyrektorzy</h5></label>
        </div>
        <div class="col-md-7">
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" atextria-label="Toolbar with button groups">
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <button v-if="zarzad =='5'" type="button" v-on:click="zarzad = '5'" v-bind="zarzad" class="btn btn-lg btn-danger">Źle</button>
                <button v-else type="button" v-on:click="zarzad = '5'" v-bind="zarzad" class="btn btn-lg btn-outline-danger">Źle</button>
              </div>
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <button v-if="zarzad =='4'" type="button" v-on:click="zarzad = '4'" v-bind="zarzad" class="btn btn-lg btn-warning">Raczej źle</button>
                <button v-else type="button" v-on:click="zarzad = '4'" v-bind="zarzad" class="btn btn-lg btn-outline-warning">Raczej źle</button>
              </div> 

              <div class="btn-group mr-2" role="ghiddenroup" aria-label="First group">  
                <button v-if="zarzad =='2'" type="button" v-on:click="zarzad = '2'" v-bind="zarzad" class="btn btn-lg btn-info">Raczej dobrze</button>
                <button v-else type="button" v-on:click="zarzad = '2'" v-bind="zarzad" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
                </div> 
              <div class="btn-group mr-2" role="group" aria-label="First group"> 
                <button v-if="zarzad =='1'" type="button" v-on:click="zarzad = '1'" v-bind="zarzad" class="btn btn-lg btn-success">Dobrze</button>
                <button v-else type="button" v-on:click="zarzad = '1'" v-bind="zarzad" class="btn btn-lg btn-outline-success">Dobrze</button>
              </div> 
            </div>
          </div>
        </div>    
      </div> 
  
      <div class="row">
        <div class="col-md-5">            
          <label class="text-secondary"><h5> 2.	Bezpośredni przełożony</h5></label>
        </div>
          <div class="col-md-7"> 
            <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="przylozony == '5'"type="button" v-on:click="przylozony = '5'" v-bind="przylozony" class="btn btn-lg btn-danger">Źle</button>
                    <button v-else type="button" v-on:click="przylozony = '5'" v-bind="przylozony" class="btn btn-lg btn-outline-danger">Źle</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="przylozony == '4'"type="button" v-on:click="przylozony = '4'" v-bind="przylozony" class="btn btn-lg btn-warning">Raczej źle</button>
                    <button v-else type="button" v-on:click="przylozony = '4'" v-bind="przylozony" class="btn btn-lg btn-outline-warning">Raczej źle</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group">  
                    <button v-if="przylozony == '2'"type="button" v-on:click="przylozony = '2'" v-bind="przylozony"  class="btn btn-lg btn-info">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="przylozony = '2'" v-bind="przylozony"  class="btn btn-lg btn-outline-info">Raczej dobrze</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group"> 
                    <button v-if="przylozony == '1'"type="button" v-on:click="przylozony = '1'" v-bind="przylozony"  class="btn btn-lg btn-success">Dobrze</button>
                    <button v-else type="button" v-on:click="przylozony = '1'" v-bind="przylozony"  class="btn btn-lg btn-outline-success">Dobrze</button>
                  </div>

                </div>
              </div> 
            </div>
          </div> 

          <div class="row">       
            <div class="col-md-5">
              <label class="text-secondary"><h5>  3.	Współpracownicy w dziale / sekcji</h5></label>
            </div>
            <div class="col-md-7">  
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="dzial == '5'" type="button" v-on:click="dzial = '5'" v-bind="dzial" class="btn btn-lg btn-danger">Źle</button>
                    <button v-else type="button" v-on:click="dzial = '5'" v-bind="dzial" class="btn btn-lg btn-outline-danger">Źle</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="dzial == '4'" type="button" v-on:click="dzial = '4'" v-bind="dzial" class="btn btn-lg btn-warning">Raczej źle</button>
                    <button v-else type="button" v-on:click="dzial = '4'" v-bind="dzial" class="btn btn-lg btn-outline-warning">Raczej źle</button>
                  </div>


                  <div class="btn-group mr-2" role="group" aria-label="First group">  
                    <button v-if="dzial == '2'" type="button" v-on:click="dzial = '2'" v-bind="dzial"  class="btn btn-lg btn-info">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="dzial = '2'" v-bind="dzial"  class="btn btn-lg btn-outline-info">Raczej dobrze</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group"> 
                    <button v-if="dzial == '1'" type="button" v-on:click="dzial = '1'" v-bind="dzial"  class="btn btn-lg btn-success">Dobrze</button>
                    <button v-else type="button" v-on:click="dzial = '1'" v-bind="dzial"  class="btn btn-lg btn-outline-success">Dobrze</button>
                  </div>

                </div>
              </div>
            </div>      
          </div>        
       

          <div class="row">
            <div class="col-md-5">
              <label class="text-secondary"><h5>4.	Pracownicy innych działów /sekcji</h5></label>
            </div>
            <div class="col-md-7">
              <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="inny_dzial == '5'" type="button" v-on:click="inny_dzial = '5'" v-bind="inny_dzial" class="btn btn-lg btn-danger">Źle</button>
                    <button v-else type="button" v-on:click="inny_dzial = '5'" v-bind="inny_dzial" class="btn btn-lg btn-outline-danger">Źle</button>
                    </div>
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="inny_dzial == '4'" type="button" v-on:click="inny_dzial = '4'" v-bind="inny_dzial" class="btn btn-lg btn-warning">Raczej źle</button> 
                    <button v-else type="button" v-on:click="inny_dzial = '4'" v-bind="inny_dzial" class="btn btn-lg btn-outline-warning">Raczej źle</button>
                  </div> 

                  <div class="btn-group mr-2" role="group" aria-label="First group">  
                    <button v-if="inny_dzial == '2'" type="button" v-on:click="inny_dzial = '2'" v-bind="inny_dzial" class="btn btn-lg btn-info">Raczej dobrze</button> 
                    <button v-else type="button" v-on:click="inny_dzial = '2'" v-bind="inny_dzial" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
                    </div> 
                  <div class="btn-group mr-2" role="group" aria-label="First group"> 
                    <button v-if="inny_dzial == '1'" type="button" v-on:click="inny_dzial = '1'" v-bind="inny_dzial" class="btn btn-lg btn-success">Dobrze</button>    
                    <button v-else type="button" v-on:click="inny_dzial = '1'" v-bind="inny_dzial" class="btn btn-lg btn-outline-success">Dobrze</button>
                  </div>    
                  </div> 
                </div>
              </div>
            </div>  
                
        

        <div class="row">
          <div class="col-md-5">
            <label data-toggle="popover" data-placement="bottom" title="Co znaczy?" data-content="Bazy danych / systemy informatyczne /ogłoszenia/bliuletyny/( Comarch, ASSECO, QMS, BPCS, strona www, tablice, Excell, etc.)" style="cursor: pointer;"><h5 class="text-secondary">5. System informatyczny<span > "?"</span></h5></label> 
          </div> 

          <div class="col-md-7"> 
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="baza_danych == '5'" type="button" v-on:click="baza_danych = '5'" v-bind="baza_danych" class="btn btn-lg btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="baza_danych = '5'" v-bind="baza_danych" class="btn btn-lg btn-outline-danger">Źle</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="baza_danych == '4'" type="button" v-on:click="baza_danych = '4'" v-bind="baza_danych" class="btn btn-lg btn-warning">Raczej źle</button>
                  <button v-else type="button" v-on:click="baza_danych = '4'" v-bind="baza_danych" class="btn btn-lg btn-outline-warning">Raczej źle</button>
                </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="baza_danych == '2'" type="button" v-on:click="baza_danych = '2'" v-bind="baza_danych"  class="btn btn-lg btn-info">Raczej dobrze</button>
                  <button v-else type="button" v-on:click="baza_danych = '2'" v-bind="baza_danych"  class="btn btn-lg btn-outline-info">Raczej dobrze</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="baza_danych == '1'" type="button" v-on:click="baza_danych = '1'" v-bind="baza_danych"  class="btn btn-lg btn-success">Dobrze</button>
                  <button v-else type="button" v-on:click="baza_danych = '1'" v-bind="baza_danych"  class="btn btn-lg btn-outline-success">Dobrze</button>
                </div> 
                </div>
              </div>
            </div>
          </div>

          <form action="post/post_source_rate.php" method="POST">
            <input type="hidden" name="zarzad" v-model="zarzad" >
            <input type="hidden" name="przylozony" v-model="przylozony">
            <input type="hidden" name="dzial" v-model="dzial">
            <input type="hidden" name="inny_dzial" v-model="inny_dzial">
            <input type="hidden" name="baza_danych" v-model="baza_danych"> 
            <input v-if="zarzad != '' && przylozony != '' && dzial != '' && inny_dzial != ''  && baza_danych != '' "  type="submit" name="send" value="Przejdź dalej" value="send" class="btn btn-lg btn-block btn-success">
            <input v-else  type="submit"  value="Przejdź dalej" value="send" class="btn btn-lg btn-outline-secondary btn-block disabled" disabled> 
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
                    zarzad: '',
                    przylozony: '',          
                    dzial: '',
                    inny_dzial: '',
                    baza_danych: '',
                    }    
                })
        </script>
            
