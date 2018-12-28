<div class="app">
<div class="container">
    <div class="row"> 
        <div class="col-12" >   
            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label class="">1. pisemna  e-mail , - sametime- chat</label>
                    </div>   
                    <div class="col-6">
                        <input v-model.number="form.write" type="range" class="custom-range" name="write" id="write">
                    </div>
                    <div class="col-1">    
                        <p> {{ form.write }} </p>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">2. telefoniczna rozmowa +  SMS </label>
                    </div>                        
                    <div class="col-6">
                        <input v-model.number="form.phone" type="range" class="custom-range" name="phone" id="phone"> 
                    </div>
                    <div class="col-1">
                        <p> {{ form.phone }} </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-5">               
                        <label class="">3. bezpośrednie rozmowy „face to face” </label>
                    </div>
                    <div class="col-6">    
                        <input v-model.number="form.face_to_face" type="range" class="custom-range" name="face_to_face" id="face_to_face">
                    </div>
                    <div class="col-1">    
                        <p> {{ form.face_to_face }} </p>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-5">                                           
                        <label class="">4. spotkania wydziałowe /produkcyjne ( regularne/ nieregularne)</label>
                    </div>
                    <div class="col-6">    
                        <input v-model.number="form.dept_meet" type="range" class="custom-range" name="dept_meet" id="dept_meet"> 
                    </div>
                    <div class="col-1">    
                        <p> {{ form.dept_meet }} </p>
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-5">               
                        <label class="">5.spotkania działow dzienne lub okresowych</label>
                    </div>
                    <div class="col-6">    
                        <input v-model.number="form.prod_meet" type="range" class="custom-range" name="prod_meet" id="prod_meet"> 
                    </div>
                    <div class="col-1">    
                        <p> {{ form.prod_meet }} </p>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">6. spotkania zespołów / grup projektowych</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.proj_meet" type="range" class="custom-range" name="proj_meet" id="proj_meet">
                    </div>
                    <div class="col-1">
                        <p> {{ form.proj_meet }} </p> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">                        
                        <label class="">7. spotkania – przesłuchania budżetowe</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.budget_meet" type="range" class="custom-range" name="budget_meet" id="budget_meet"> 
                    </div>
                    <div class="col-1">
                        <p> {{ form.budget_meet }} </p> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">8. spotkania SMP-D</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.smp_d" type="range" class="custom-range" name="smp_d" id="smp_d">               
                    </div>
                    <div class="col-1">
                        <p> {{ form.smp_d }} </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">9. spotkania SMP-W</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.smp_w" type="range" class="custom-range" name="smp_w" id="smp_w">                  
                    </div>
                    <div class="col-1">
                         <p> {{ form.smp_w }} </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">10. rozmowy oceniające z przełożonym ( półroczna CS, roczna kompetencje)</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.cs" type="range" class="custom-range" name="cs" id="cs">
                    </div>
                    <div class="col-1">
                        <p> {{ form.cs }} </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="">11. nieformalne spotkania/ rozmowy w kuchni / kantynie, palarni , itp.</label>
                    </div>
                    <div class="col-6">
                        <input v-model.number="form.unformal_meet" type="range" class="custom-range" name="unformal_meet" id="unformal_meet">
                    </div>
                    <div class="col-1">
                        <p> {{ form.unformal_meet }} </p> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label>12.</label>
                        <input v-model="form.own_title" class="text" style="width: 90%" placeholder="inne …możliwość wpisania i oceny w %">
                       
                    </div>

                    <div class="col-6">
                        <input v-model.number="form.own" type="range" class="custom-range" name="own" id="own">
                    </div>

                    <div class="col-1">   
                        <p> {{ form.own }} </p>  
                    </div>
                </div>
                
                <div  v-if="total == 100" class="progress" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" :style="{width:+ total + '%'}" ></div>
                </div> 
                
                <div  v-else class="progress" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" :style="{width:+ total + '%'}" ></div>
                </div>

                <br> 

                    <form action="./post/post_tools.php" method="POST">
                        <div class="row">
                            <input type="hidden" name="write" v-model="form.write">
                            <input type="hidden" name="phone" v-model="form.phone">
                            <input type="hidden" name="face_to_face" v-model="form.face_to_face">
                            <input type="hidden" name="dept_meet" v-model="form.dept_meet">
                            <input type="hidden" name="prod_meet" v-model="form.prod_meet">
                            <input type="hidden" name="proj_meet" v-model="form.proj_meet">
                            <input type="hidden" name="budget_meet" v-model="form.budget_meet">
                            <input type="hidden" name="smp_d" v-model="form.smp_d">
                            <input type="hidden" name="smp_w" v-model="form.smp_w">
                            <input type="hidden" name="cs" v-model="form.cs">
                            <input type="hidden" name="unformal_meet" v-model="form.unformal_meet">
                            <input type="hidden" name="own_title" v-model="form.own_title">
                            <input type="hidden" name="own" v-model="form.own">
                            <input type="hidden" name="total" v-model="total">
                        </div>

                    
                    <div class="row">
                        <div class="col-10">
                            <input v-if="total == 100" type="submit" value="Przejdź dalej" class="btn btn-outline-success" name="send">
                            <input v-else type="submit" value="Przejdź dalej" class="btn btn-outline-secondary disabled" name="send">
                        </div> 
                        <div class="col-2">
                            <h3 v-if="total == 100" class="text-success">{{total + '%'}}</h3>
                            <h3 v-else-if="total > 100" class="text-danger">{{total + '%'}}</h3>
                            <h3 v-else="total < 100" class="text-danger">{{total + '%'}}</h3>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div> 
</div>

<script>

    new Vue({         
            el: ".app",
            data() {
                return {
                    form: {
                            write: 0,
                            phone: 0,
                            face_to_face: 0,
                            dept_meet: 0,
                            prod_meet: 0,
                            proj_meet: 0,
                            budget_meet: 0,
                            smp_d: 0,
                            smp_w: 0,
                            cs: 0,
                            unformal_meet: 0,
                            own: 0,
                            own_title: '',
                    }
                }
            },
            computed: {
                total: function () 
                {
                    let calculatedTotal = this.form.write + this.form.phone + this.form.face_to_face + this.form.dept_meet + this.form.prod_meet + this.form.proj_meet + this.form.budget_meet + this.form.smp_d + this.form.smp_w + this.form.cs + this.form.unformal_meet + this.form.own
                    this.form.total = calculatedTotal;
                    return calculatedTotal;
                }
            }
        })
        
</script>