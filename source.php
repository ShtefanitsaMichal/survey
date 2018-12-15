

<?php require_once "head.php" ?>
<?php require_once "view/navbar.view.php" ?>


    <div class="container" >
      <div class="form-group ">
        <label class="control-label bold">
            <h5>
                Oceń w %  skąd czerpiesz  informacje potrzebne Ci  w pracy  (suma ma wynieść 100%) 
            </h5>
        </label>
      <br>
        <div id="el">
        <div class="row">
                <label for="customRange1"></label>
            <div class="col-md-4">
                <label>
                    <h5 class="text-secondary">
                        Zarząd / Dyrektorzy
                    </h5>    
                </label>
            </div>
            <div class="col-md-2">
                <span vclass="badge" :value="20">{{ form.zarzad + "%" }}</span>
            </div>

            <div class="col-md-6">
                <input v-model.number="form.zarzad" type="range" class="custom-range" name="zarzad" id="zarzad">
            </div>   
        </div>    
        
        <div class="row">
            <div class="col-md-4">    
                <label><h5   class="text-secondary">Bezpośredni przełożony  </h5></label>
            </div>
            <div class="col-md-2">
                    <span vclass="badge" :value="20">{{ form.przylozony  + "%" }}</span>
            </div>
            <div class="col-md-6">    
                <input v-model.number="form.przylozony " type="range"  class="custom-range " name="przylozony " id="przylozony "> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label ><h5   class="text-secondary">Współpracownicy w dziale/sekcji  </h5></label>
            </div>
            <div class="col-md-2">
                <span vclass="badge" value="20">{{ form.dzial + "%" }}</span>
            </div>
            <div class="col-md-6">        
                <input v-model.number="form.dzial" value="20" type="range" class="custom-range" name="dzial" id="dzial">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label><h5  class="text-secondary">Pracownicy innych działów / sekcji  </h5></label>
            </div>
            <div class="col-md-2">
                <span vclass="badge" >{{ form.inny_dzial + "%" }}</span>
            </div>
            <div class="col-md-6">
                <input v-model.number="form.inny_dzial" type="range" class="custom-range" name="inny_dzial" id="inny_dzial"> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label data-toggle="popover" data-placement="bottom" title="Co znaczy?" data-content="Bazy danych / systemy informatyczne /ogłoszenia/bliuletyny/( Comarch, ASSECO, QMS, BPCS, strona www, tablice, Excell, etc.)"><h5 class="text-secondary">Bazy danych</h5></label> 
            </div>
            <div class="col-md-2">
                <span vclass="badge" value="baza_danych">{{ form.baza_danych + "%" }}</span>
            </div>
            <div class="col-md-6">
                <input v-model.number="form.baza_danych" :style=""  type="range" class="custom-range" name="baza_danych" id="baza_danych"> 
            </div>
        </div>
            
        <br>
            <div class="progress" style="height: 2px;">
                <div class="progress-bar" role="progressbar" :style="{width:+ total + '%'}" ></div>
            </div> 

            <br>
            <!-- Formularz metody post -> wysyłanie danych o ródle. 
                Parametr name nie moze być zmieniony--> 
                <form action="post/post_source.php" method="post">
                    <input type="hidden" name="zarzad" v-model="form.zarzad">
                    <input type="hidden" name="przylozony" v-model="form.przylozony">
                    <input type="hidden" name="dzial" v-model="form.dzial">
                    <input type="hidden" name="inny_dzial" v-model="form.inny_dzial">
                    <input type="hidden" name="baza_danych" v-model="form.baza_danych">
                    <input type="hidden" name="total" v-model="total">
                    <div class="row">
                        <div class="col-md-10">
                            <input v-if="total == 100" value="Pzejdź dalej" type="submit"  class="btn btn-outline-success btn-lg" >
                            <input v-else="total != 100" value="Pzejdź dalej" type="submit" class="btn btn-outline-secondary btn-lg disabled" >
                            
                        </div>
                        <div class="col-md-2">
                            <h3 v-if="total == 100" class="text-success">{{total + '%'}}</h3>
                            <h3 v-else-if="total > 100" class="text-danger">{{total + '%'}}</h3>
                            <h3 v-else="total < 100" class="text-danger">{{total + '%'}}</h3>
                        </div>

                    </div>
                </form>
            </div>        
        </div> 
    </div> 
    
   

<script>  
    new Vue({
            
            el: "#el",
            data() {
                return {
                    form: {
                        zarzad: 0,
                        przylozony : 0,
                        dzial: 0,
                        inny_dzial: 0,
                        baza_danych: 0,
                        total: 0,
                    }
                }
            },
            
            computed: {
                udzial: function (){
                    let udzial = 100 - (this.form.zarzad + this.form.przylozony  + this.form.dzial + this.form.inny_dzial + this.form.baza_danych);
                    return udzial;
                },

                total: function () {
                    let calculatedTotal = this.form.zarzad + this.form.przylozony  + this.form.dzial + this.form.inny_dzial + this.form.baza_danych;
                    this.form.total = calculatedTotal;
                    return calculatedTotal;
                }
            }
        })
</script>  
    

<script>
      $(function () {
             $('[data-toggle="popover"]').popover()
            })
</script>




