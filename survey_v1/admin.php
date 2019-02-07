<?php require_once "head.php" ?>
<?php require_once(__ROOT__."/controller/dbConnect.php"); ?>


<?php 
	$db = DB::getInstance();
    DB::setCharsetEncoding();
?>

<?php
    function get_all_users(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'users' From `employee` ";

        $get_all_users = $db->prepare( $sql );
        $get_all_users -> execute( array( $sql ) );
        $all_row = $get_all_users->fetch( PDO::FETCH_ASSOC ); 
        $all_users = $all_row;

        return intval($all_users['users']);
    }

     function get_all_direct(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'direct' From `employee` where typ='direct'";

        $get_all_direct = $db->prepare( $sql );
        $get_all_direct -> execute( array( $sql ) );
        $all_row = $get_all_direct->fetch( PDO::FETCH_ASSOC ); 
        $all_direct = $all_row;

        return $all_direct['direct'];
    }

    function get_all_indirect(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'indirect' From `employee` where typ='indirect'";

        $get_all_indirect = $db->prepare( $sql );
        $get_all_indirect -> execute( array( $sql ) );
        $all_row = $get_all_indirect->fetch( PDO::FETCH_ASSOC ); 
        $all_indirect = $all_row;

        return $all_indirect['indirect'];
    }

    function get_lt30(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'lt30' From `employee` where wiek='< 30'";

        $get_lt30 = $db->prepare( $sql );
        $get_lt30 -> execute( array( $sql ) );
        $all_row = $get_lt30->fetch( PDO::FETCH_ASSOC ); 
        $lt30 = $all_row;

        return $lt30['lt30'];
    }

     function get_gt30(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'gt30' From `employee` where wiek='> 30'";

        $get_gt30 = $db->prepare( $sql );
        $get_gt30 -> execute( array( $sql ) );
        $all_row = $get_gt30->fetch( PDO::FETCH_ASSOC ); 
        $gt30 = $all_row;

        return $gt30['gt30'];
    }

    function get_gt40(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'gt40' From `employee` where wiek='> 40'";

        $get_gt40 = $db->prepare( $sql );
        $get_gt40 -> execute( array( $sql ) );
        $all_row = $get_gt40->fetch( PDO::FETCH_ASSOC ); 
        $gt40 = $all_row;

        return $gt40['gt40'];
    }

    function get_specialist(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'specialist' From `employee` where stanowisko='Specjalista'";

        $get_specialist = $db->prepare( $sql );
        $get_specialist -> execute( array( $sql ) );
        $all_row = $get_specialist->fetch( PDO::FETCH_ASSOC ); 
        $specialist = $all_row;

        return $specialist['specialist'];
    }

    function get_pracownik(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'pracownik' From `employee` where stanowisko='Pracownik'";

        $get_pracownik = $db->prepare( $sql );
        $get_pracownik -> execute( array( $sql ) );
        $all_row = $get_pracownik->fetch( PDO::FETCH_ASSOC ); 
        $pracownik = $all_row;

        return $pracownik['pracownik'];
    }

    function get_supervisor(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'supervisor' From `employee` where stanowisko='supervisor'";

        $supervisor = $db->prepare( $sql );
        $supervisor -> execute( array( $sql ) );
        $all_row = $supervisor->fetch( PDO::FETCH_ASSOC ); 
        $supervisor = $all_row;

        return $supervisor['supervisor'];
    }

    function get_director(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select count(*) as 'director' From `employee` where stanowisko='Kierownik'";

        $director = $db->prepare( $sql );
        $director -> execute( array( $sql ) );
        $all_row = $director->fetch( PDO::FETCH_ASSOC ); 
        $director = $all_row;

        return $director['director'];
    }

    function avg_source(){
        global $db;
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select AVG(zarzad), AVG(przelozony), AVG(dzial), AVG(inny_dzial), AVG(baza_danych) FROM `source`";

        $avg_source = $db->prepare( $sql );
        $avg_source -> execute( array( $sql ) );
        $all_row = $avg_source->fetch( PDO::FETCH_ASSOC ); 
        $avg_source = $all_row;

        return $avg_source['zarzad'];
    }

?>


<hr>
<div class="App">
    <div class="container">
       
        <h5>All users <span class="badge badge-secondary" v-model.number="form.all_users">{{ form.all_users }}</span></h5>
        <h5>Direct <span class="badge badge-secondary">{{ form.all_direct }}</span></h5>
        <h5>Indirect <span class="badge badge-secondary">{{ form.all_indirect }}</span></h5>
       <hr>
        <h5>Wiek poniżej 30 lat <span class="badge badge-secondary">{{ form.get_lt30 }}</span></h5>
        <h5>Wiek powyżej 30 lat <span class="badge badge-secondary">{{ form.get_gt30 }}</span></h5>
        <h5>Wiek powyżej 40 lat <span class="badge badge-secondary">{{ form.get_gt40 }}</span></h5>
        
       <hr>
        <h5>Stanowisko procownia <span class="badge badge-secondary">{{ form.get_pracownik }}</span></h5>
        <h5>Stanowisko specjalisty <span class="badge badge-secondary">{{ form.get_specialist }}</span></h5>
        <h5>Stanowisko supervisora <span class="badge badge-secondary">{{ form.get_supervisor }}</span></h5>
        <h5>Stanowisko dyrektora <span class="badge badge-secondary">{{ form.get_director }}</span></h5>
    </div>
</div>

<?php var_dump(get_all_users()) ?>

<script>
    new Vue({
      el: '.App',
      data() {
          return {
                form: { 
                    all_users:      '<?php echo get_all_users(); ?>',
                    all_direct:     '<?php echo get_all_direct(); ?>',
                    all_indirect:   '<?php echo get_all_indirect(); ?>',
                    get_lt30:       '<?php echo get_lt30(); ?>',
                    get_gt30:       '<?php echo get_gt30(); ?>',
                    get_gt40:       '<?php echo get_gt40(); ?>',
                    get_specialist: '<?php echo get_specialist(); ?>',
                    get_pracownik:  '<?php echo get_pracownik(); ?>',
                    get_supervisor: '<?php echo get_supervisor(); ?>',
                    get_director:   '<?php echo get_director(); ?>',
                    avg_source:     '<?php echo get_director(); ?>'

                }
          }
      },

      computed: {
                total: function () {
                            let calculatedTotal = this.form.get_direct + this.form.indirect;
                            this.form.total = calculatedTotal;
                            return calculatedTotal;
                        }
                },
        


        
        
    })


</script> 


 
