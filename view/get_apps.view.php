    <div class="app">
    <p class="text-secondary">Maksymalna liczba % powinna wynieśc 100 !</p>     
        <div class="row">
            <div class="col-4">
                <label>1.Intranet (Santouch, help desk, etc)  </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.intranet" type="range" class="custom-range" name="sys_1" id="sys_1">  
            </div>
            <div class="col-1">
                <p><b> {{form.intranet}} </b></p>
            </div>
        </div>    
        
        <div class="row">
            <div class="col-4">
                <label>2.Comarch </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.comarch" type="range" class="custom-range" name="sys_1" id="sys_1">  
            </div>
            <div class="col-1">
                 <p><b> {{form.comarch}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>3.BPCS </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.bpcs" type="range" class="custom-range" name="sys_1" id="sys_1">  
            </div>
            <div class="col-1">
                 <p><b> {{form.bpcs}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>4.QMS </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.qms" type="range" class="custom-range" name="sys_1" id="sys_1">  
            </div>
            <div class="col-1">
                 <p><b> {{form.qms}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>5.SAP</label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.sap" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.sap}} </b></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label>6. ASSECO </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.asseco" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.asseco}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>7.Sanden Vision (Sterovniki PLC) </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.sanden_vision" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.sanden_vision}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>8. Facebook - zakładowy </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.facebook" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.facebook}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>9. Strona firmowa www </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.smp_web_page" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.smp_web_page}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>10. Baza sugestii </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.baza_sugestii" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.baza_sugestii}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>11. Biuletyn „ Sanden Monthly News ” </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.sanden_month_news" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.sanden_month_news}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>12. ZMT – Maintenance + produkcja </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.zmt" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.zmt}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>13. Parcel Warehouse / (logistyka – magazyn przesyłek) < </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.parcel_warehouse" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.parcel_warehouse}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>14. LessonLearn </label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.lessons_learned" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.lessons_learned}} </b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label>15. <input  v-model="form.own_title" type="text" placeholder="Inne" ></label>
            </div>   
            <div class="col-7">
                <input v-model.number="form.own" type="range" class="custom-range" name="sys_1" id="sys_1">
            </div>
            <div class="col-1">
                 <p><b> {{form.own}} </b></p>
            </div>
            
        </div> 
   
                <form action="./post/post_apps.php" method="POST">
                    <input type="hidden" name="intranet" v-model="form.intranet">
                    <input type="hidden" name="comarch" v-model="form.comarch">
                    <input type="hidden" name="bpcs" v-model="form.bpcs">
                    <input type="hidden" name="qms" v-model="form.qms">
                    <input type="hidden" name="sap" v-model="form.sap">
                    <input type="hidden" name="asseco" v-model="form.asseco">
                    <input type="hidden" name="sanden_vision" v-model="form.sanden_vision">
                    <input type="hidden" name="facebook" v-model="form.facebook">
                    <input type="hidden" name="smp_web_page" v-model="form.smp_web_page">
                    <input type="hidden" name="baza_sugestii" v-model="form.baza_sugestii">
                    <input type="hidden" name="sanden_month_news" v-model="form.sanden_month_news">
                    <input type="hidden" name="zmt" v-model="form.zmt">
                    <input type="hidden" name="parcel_warehouse" v-model.number="form.parcel_warehouse">
                    <input type="hidden" name="lessons_learned" v-model.number="form.lessons_learned">
                    <input type="hidden" name="own" v-model="form.own">
                    <input type="hidden" name="own_title" v-model="form.own_title">
                    <input type="hidden" name="total" v-model="total">
                 
                    <div class="row">
                        <div class="col-md-10">
                            <input v-if="total == 100" type="submit" value="Przejdź dalej" class="btn btn-outline-success" name="send">
                            <input v-else type="submit" value="Przejdź dalej" class="btn btn-outline-secondary disabled" name="send">
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

        <script>
            new Vue({         
                el: ".app",
                    data() {
                        return {
                            form: { 
                                intranet: 0, 
                                comarch: 0,
                                bpcs: 0,
                                qms: 0,
                                sap: 0,
                                asseco: 0,
                                sanden_vision: 0,
                                facebook: 0,
                                smp_web_page: 0,
                                baza_sugestii: 0,
                                sanden_month_news: 0, 
                                zmt: 0,
                                parcel_warehouse: 0,
                                lessons_learned: 0,
                                own_title: '',
                                own: 0
                            }
                        }
                    },
                computed: {

                    total: function () 
                    {
                        let calculatedTotal = this.form.lessons_learned + this.form.parcel_warehouse + this.form.intranet + this.form.comarch + this.form.bpcs + this.form.qms + this.form.sap + this.form.asseco + this.form.sanden_vision + this.form.facebook + this.form.smp_web_page + this.form.baza_sugestii + this.form.sanden_month_news + this.form.zmt + this.form.own
                        this.form.total = calculatedTotal;
                        return calculatedTotal;
                    }
                }
            })
        </script>