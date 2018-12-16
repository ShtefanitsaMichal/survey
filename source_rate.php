
  <?php require_once "head.php" ?>
  <?php require_once "view/navbar.view.php" ?>


<div class="App"> 
      <div class="form-group ">
        <div class="row">
          <label class="control-label bold">
            <h5>
              Jak  oceniasz   komunikację  z poszczególnymi  źródłami 
            </h5>
          </label>
        </div> 
      </div>  
      
          <!--     <div class="row">
                      <kbd> wysylka odpowiedzi tilko w tedy , jak wszystki pola sotana zaznaczone</kbd>   
              </div> -->  

    <div class="row">
      <div class="col-md-4 ">
        <label class="control-label">1. Zarząd/Dyrektorzy</label>
      </div>
      <div class="col-md-8">
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" atextria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="zarzad =='5'" type="button" v-on:click="zarzad = '5'" v-bind="zarzad" class="btn btn-danger">Źle</button>
              <button v-else type="button" v-on:click="zarzad = '5'" v-bind="zarzad" class="btn btn-outline-danger">Źle</button>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button v-if="zarzad =='4'" type="button" v-on:click="zarzad = '4'" v-bind="zarzad" class="btn btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="zarzad = '4'" v-bind="zarzad" class="btn btn-outline-warning">Raczej źle</button>
            </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="zarzad =='3'" type="button" v-on:click="zarzad = '3'" v-bind="zarzad" class="btn btn-primary">Ani dobrze ani źle </button>
              <button v-else type="button" v-on:click="zarzad = '3'" v-bind="zarzad" class="btn btn-outline-primary">Ani dobrze ani źle </button>
            </div>
            <div class="btn-group mr-2" role="ghiddenroup" aria-label="First group">  
              <button v-if="zarzad =='2'" type="button" v-on:click="zarzad = '2'" v-bind="zarzad" class="btn btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="zarzad = '2'" v-bind="zarzad" class="btn btn-outline-info">Raczej dobrze</button>
              </div> 
            <div class="btn-group mr-2" role="group" aria-label="First group"> 
              <button v-if="zarzad =='1'" type="button" v-on:click="zarzad = '1'" v-bind="zarzad" class="btn btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="zarzad = '1'" v-bind="zarzad" class="btn btn-outline-success">Dobrze</button>
            </div> 
          </div>
        </div>
      </div>    
    </div> 
  
    <div class="row">
      <div class="col-md-4">            
        <label class="control-label">2.	Bezpośredni przełożony</label>
      </div>
          <div class="col-md-8"> 
            <div class="form-group ">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="przylozony == '5'"type="button" v-on:click="przylozony = '5'" v-bind="przylozony" class="btn btn-danger">Źle</button>
                    <button v-else type="button" v-on:click="przylozony = '5'" v-bind="przylozony" class="btn btn-outline-danger">Źle</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button v-if="przylozony == '4'"type="button" v-on:click="przylozony = '4'" v-bind="przylozony" class="btn btn-warning">Raczej źle</button>
                    <button v-else type="button" v-on:click="przylozony = '4'" v-bind="przylozony" class="btn btn-outline-warning">Raczej źle</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group"przylozony> 
                    <button v-if="przylozony == '3'"type="button" v-on:click="przylozony = '3'" v-bind="przylozony" class="btn btn-primary">Ani dobrze ani źle </button>
                    <button v-else type="button" v-on:click="przylozony = '3'" v-bind="przylozony" class="btn btn-outline-primary">Ani dobrze ani źle </button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group">  
                    <button v-if="przylozony == '2'"type="button" v-on:click="przylozony = '2'" v-bind="przylozony"  class="btn btn-info">Raczej dobrze</button>
                    <button v-else type="button" v-on:click="przylozony = '2'" v-bind="przylozony"  class="btn btn-outline-info">Raczej dobrze</button>
                  </div>

                  <div class="btn-group mr-2" role="group" aria-label="First group"> 
                    <button v-if="przylozony == '1'"type="button" v-on:click="przylozony = '1'" v-bind="przylozony"  class="btn btn-success">Dobrze</button>
                    <button v-else type="button" v-on:click="przylozony = '1'" v-bind="przylozony"  class="btn btn-outline-success">Dobrze</button>
                  </div>

                </div>
              </div> 
            </div>
          </div> 

        <div class="row">       
          <div class="col-md-4">
            <label class="control-label">3.	Współpracownicy w dziale / sekcji</label>
          </div>
          <div class="col-md-8">  
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="dzial == '5'" type="button" v-on:click="dzial = '5'" v-bind="dzial" class="btn btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="dzial = '5'" v-bind="dzial" class="btn btn-outline-danger">Źle</button>
                </div>

                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="dzial == '4'" type="button" v-on:click="dzial = '4'" v-bind="dzial" class="btn btn-warning">Raczej źle</button>
                  <button v-else type="button" v-on:click="dzial = '4'" v-bind="dzial" class="btn btn-outline-warning">Raczej źle</button>
                </div>

                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="dzial == '3'" type="button" v-on:click="dzial = '3'" v-bind="dzial" class="btn btn-primary">Ani dobrze ani źle </button>
                  <button v-else type="button" v-on:click="dzial = '3'" v-bind="dzial" class="btn btn-outline-primary">Ani dobrze ani źle </button>
                </div>

                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="dzial == '2'" type="button" v-on:click="dzial = '2'" v-bind="dzial"  class="btn btn-info">Raczej dobrze</button>
                  <button v-else type="button" v-on:click="dzial = '2'" v-bind="dzial"  class="btn btn-outline-info">Raczej dobrze</button>
                </div>

                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="dzial == '1'" type="button" v-on:click="dzial = '1'" v-bind="dzial"  class="btn btn-success">Dobrze</button>
                  <button v-else type="button" v-on:click="dzial = '1'" v-bind="dzial"  class="btn btn-outline-success">Dobrze</button>
                </div>

              </div>
            </div>
          </div>      
        </div>        
       

        <div class="row">
          <div class="col-md-4">
            <label class="control-label">4.	Pracownicy innych działów /sekcji</label>
          </div>
          <div class="col-md-8">
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="inny_dzial == '5'" type="button" v-on:click="inny_dzial = '5'" v-bind="inny_dzial" class="btn btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="inny_dzial = '5'" v-bind="inny_dzial" class="btn btn-outline-danger">Źle</button>
                  </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="inny_dzial == '4'" type="button" v-on:click="inny_dzial = '4'" v-bind="inny_dzial" class="btn btn-warning">Raczej źle</button> 
                  <button v-else type="button" v-on:click="inny_dzial = '4'" v-bind="inny_dzial" class="btn btn-outline-warning">Raczej źle</button>
                  </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="inny_dzial == '3'" type="button" v-on:click="inny_dzial = '3'" v-bind="inny_dzial" class="btn btn-primary">Ani dobrze ani źle </button>
                  <button v-else type="button" v-on:click="inny_dzial = '3'" v-bind="inny_dzial" class="btn btn-outline-primary">Ani dobrze ani źle </button>
                  </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="inny_dzial == '2'" type="button" v-on:click="inny_dzial = '2'" v-bind="inny_dzial" class="btn btn-info">Raczej dobrze</button> 
                  <button v-else type="button" v-on:click="inny_dzial = '2'" v-bind="inny_dzial" class="btn btn-outline-info">Raczej dobrze</button>
                  </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="inny_dzial == '1'" type="button" v-on:click="inny_dzial = '1'" v-bind="inny_dzial" class="btn btn-success">Dobrze</button>    
                  <button v-else type="button" v-on:click="inny_dzial = '1'" v-bind="inny_dzial" class="btn btn-outline-success">Dobrze</button>
                  </div>    
                </div> 
              </div>
            </div>
          </div>  
                
        

        <div class="row">
          <div class="col-md-4">
            <label class="control-label">5. Bazy danych / systemy</label>
          </div> 
          <div class="col-md-8"> 
            <div class="form-group ">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="baza_danych == '5'" type="button" v-on:click="baza_danych = '5'" v-bind="baza_danych" class="btn btn-danger">Źle</button>
                  <button v-else type="button" v-on:click="baza_danych = '5'" v-bind="baza_danych" class="btn btn-outline-danger">Źle</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button v-if="baza_danych == '4'" type="button" v-on:click="baza_danych = '4'" v-bind="baza_danych" class="btn btn-warning">Raczej źle</button>
                  <button v-else type="button" v-on:click="baza_danych = '4'" v-bind="baza_danych" class="btn btn-outline-warning">Raczej źle</button>
                </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="baza_danych == '3'" type="button" v-on:click="baza_danych = '3'" v-bind="baza_danych" class="btn btn-primary">Ani dobrze ani źle </button>
                  <button v-else type="button" v-on:click="baza_danych = '3'" v-bind="baza_danych" class="btn btn-outline-primary">Ani dobrze ani źle </button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="First group">  
                  <button v-if="baza_danych == '2'" type="button" v-on:click="baza_danych = '2'" v-bind="baza_danych"  class="btn btn-info">Raczej dobrze</button>
                  <button v-else type="button" v-on:click="baza_danych = '2'" v-bind="baza_danych"  class="btn btn-outline-info">Raczej dobrze</button>
                </div> 
                <div class="btn-group mr-2" role="group" aria-label="First group"> 
                  <button v-if="baza_danych == '1'" type="button" v-on:click="baza_danych = '1'" v-bind="baza_danych"  class="btn btn-success">Dobrze</button>
                  <button v-else type="button" v-on:click="baza_danych = '1'" v-bind="baza_danych"  class="btn btn-outline-success">Dobrze</button>
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
              <input type="submit" name="send" value="Pzejdź dalej" value="send" class="btn btn-outline-success"> 
            </form>
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
            
