<?php 
    include "head.php";
    require_once __ROOT__."/controller/dbConnect.php";
    require_once __ROOT__."/controller/GetController.php";
    require_once __ROOT__."/controller/PostController.php";
    //require_once __ROOT__."/admin/functions.php";
    $db = DB::getInstance();    
    DB::setCharsetEncoding();
    function metryczka() {
            global $db;
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql1 = "select Distinct(employee.session_id) as employee,
                        typ, Stanowisko, Wiek,
                        source.zarzad as 's_zarzad',
                        source.przelozony as 's_przelozony',
                        source.dzial as 's_dzial',
                        source.inny_dzial as 's_inny_dzial',
                        source.baza_danych as 's_baza_danych',
                        source_rate.zarzad as r_zarzad,
                        source_rate.przelozony as r_przelozony,
                        source_rate.dzial as r_dzial,
                        source_rate.inny_dzial as r_inny_dzial,
                        source_rate.baza_danych as r_baza_danych,
                        main_tools.source_num,
                        main_tools.phone,
                        main_tools.write,
                        main_tools.face_to_face,
                        main_tools.dept_meet,
                        main_tools.prod_meet,
                        main_tools.proj_meet,
                        main_tools.budget_meet,
                        main_tools.smp_d,
                        main_tools.smp_w,
                        main_tools.cs,
                        main_tools.unformal_meet,
                        main_tools.own as own_tool,
                        main_tools.own_title,
                        main_apps.ibm_lotus,
                        main_apps.excel,
                        main_apps.access,
                        main_apps.bpcs,
                        main_apps.intranet,
                        main_apps.comarch,
                        main_apps.zmt,
                        main_apps.asseco,
                        main_apps.qms,
                        main_apps.visualisation,
                        main_apps.sanden_vision,
                        main_apps.smp_web_page,
                        main_apps.facebook,
                        main_apps.wf_mag,
                        main_apps.sap,
                        main_apps.qda,
                        main_apps.parcel_warehouse,
                        main_apps.lessons_learned,
                        main_apps.dexperiance,
                        main_apps.helpdesk,
                        main_apps.inventory_range,
                        main_apps.pydio,
                        main_apps.sadec,
                        main_apps.baza_sugestii,
                        main_apps.month_news,
                        main_apps.own_title,
                        main_apps.own as own_app,
                        main_apps.total
                        
                        from employee
                        left join source
                        ON employee.session_id = source.session_id 
                        left join source_rate
                        ON employee.session_id = source_rate.session_id
                        left join main_tools
                        ON employee.session_id = main_tools.session_id
                        left join main_apps
                        ON employee.session_id = main_apps.session_id ";
        
                    $get = $db->prepare( $sql1 );
                    $get -> execute(array( $sql1 ) );
                    $all_row = $get->fetchAll(PDO::FETCH_ASSOC); 
                    return $all_row;
    }

    $metryczka = metryczka();
?>

<div class="App">
   
    <label for="">Example select</label>
    <select v-model="Selected_type">
        <option v-for="option in set_type" v-bind:value="option.value">
            {{ option.text }}
        </option>
    </select>
    =>
     <select v-model="Selected_wiek">
        <option v-for="option in set_wiek" v-bind:value="option.value">
            {{ option.text }}
        </option>
    </select>
    =>
    <select v-model="Selected_stanowisko">
        <option v-for="option in set_stanowisko" v-bind:value="option.value">
            {{ option.text }}
        </option>
    </select>


    <h1>{{stanowisko_all.length}}</h1>

    

    <br>
</div>

<script>
        new Vue({
        el: '.App',
        data: {
            Selected_type: '',
            Selected_wiek: '',
            Selected_stanowisko: '',
            set_type: [{text: 'Direct', value: 'Direct'},{text: 'Indirect', value: 'Indirect'}],
            set_wiek: [{text: '< 30', value: '< 30'},{text: '> 30', value: '> 30'}, {text: '> 40', value: '> 40'}],
            set_stanowisko: [{text: 'Pracownik', value: 'Pracownik'},{text: 'Specjalista', value: 'Specjalista'}, {text: 'Supervisor', value: 'Supervisor'}, {text: 'Kierownik', value: 'Kierownik'}],
            ankiety: [
                
                    <?php foreach ($metryczka as $value) { ?>
                        <?php echo '{' ?>
                            id:                 '<?php echo $value['employee']; ?>',
                            typ:                '<?php echo $value['typ']; ?>',
                            stanowisko:         '<?php echo $value['Stanowisko']; ?>',
                            wiek:               '<?php echo $value['Wiek']; ?>',
                            s_zarzad:           '<?php echo $value['s_zarzad']; ?>',
                            s_przelozony:       '<?php echo $value['s_przelozony']; ?>',
                            s_dzial:            '<?php echo $value['s_dzial']; ?>',
                            s_inny_dzial:       '<?php echo $value['s_inny_dzial']; ?>',
                            s_baza_danych:      '<?php echo $value['s_baza_danych']; ?>',
                            r_zarzad:           '<?php echo $value['r_zarzad']; ?>',
                            r_przelozony:       '<?php echo $value['r_przelozony']; ?>',
                            r_dzial:            '<?php echo $value['r_dzial']; ?>',
                            r_inny_dzial:       '<?php echo $value['r_inny_dzial']; ?>',
                            r_baza_danych:      '<?php echo $value['r_baza_danych']; ?>',
                            source_num:         '<?php echo $value['source_num']; ?>',
                            phone:              '<?php echo $value['phone']; ?>',
                            write:              '<?php echo $value['write']; ?>',
                            face_to_face:       '<?php echo $value['face_to_face']; ?>',
                            dept_meet:          '<?php echo $value['dept_meet']; ?>',
                            prod_meet:          '<?php echo $value['prod_meet']; ?>',
                            proj_meet:          '<?php echo $value['proj_meet']; ?>',
                            budget_meet:        '<?php echo $value['budget_meet']; ?>',
                            smp_d:              '<?php echo $value['smp_d']; ?>',
                            smp_w:              '<?php echo $value['smp_w']; ?>',
                            cs:                 '<?php echo $value['cs']; ?>',
                            unformal_meet:      '<?php echo $value['unformal_meet']; ?>',
                            own_tool:           '<?php echo $value['own_tool']; ?>',
                            own_title:          '<?php echo $value['own_title']; ?>',
                            ibm_lotus:          '<?php echo $value['ibm_lotus']; ?>',
                            excel:              '<?php echo $value['excel']; ?>',
                            access:             '<?php echo $value['access']; ?>',
                            bpcs:               '<?php echo $value['bpcs']; ?>',
                            intranet:           '<?php echo $value['intranet']; ?>',
                            comarch:            '<?php echo $value['comarch']; ?>',
                            zmt:                '<?php echo $value['zmt']; ?>',
                            asseco:             '<?php echo $value['asseco']; ?>',
                            qms:                '<?php echo $value['qms']; ?>',
                            visualisation:      '<?php echo $value['visualisation']; ?>',
                            sanden_vision:      '<?php echo $value['sanden_vision']; ?>',
                            smp_web_page:       '<?php echo $value['smp_web_page']; ?>',
                            facebook:           '<?php echo $value['facebook']; ?>',
                            wf_mag:             '<?php echo $value['wf_mag']; ?>',
                            sap:                '<?php echo $value['sap']; ?>',
                            qda:                '<?php echo $value['qda']; ?>',
                            parcel_warehouse:   '<?php echo $value['parcel_warehouse']; ?>',
                            lessons_learned:    '<?php echo $value['lessons_learned']; ?>',
                            dexperiance:        '<?php echo $value['dexperiance']; ?>',
                            helpdesk:           '<?php echo $value['helpdesk']; ?>',
                            inventory_range:    '<?php echo $value['inventory_range']; ?>',
                            pydio:              '<?php echo $value['pydio']; ?>',
                            sadec:              '<?php echo $value['sadec']; ?>',
                            baza_sugestii:      '<?php echo $value['baza_sugestii']; ?>',
                            month_news:         '<?php echo $value['month_news']; ?>',
                            own_title:          '<?php echo $value['own_title']; ?>',
                            own_app:            '<?php echo $value['own_app']; ?>',
                            
                        <?php echo '},' ?>
                <?php } ?>
            ],
            },
        computed: {
            count_all: function() {
                const count_all =  this.ankiety.length
                return count_all;
            },
            Type_all() {
                return this.ankiety.filter(value => value.typ === this.Selected_type)
            },
            age_all() {
                return this.Type_all.filter(value => value.wiek === this.Selected_wiek)
            },
            stanowisko_all() {
                return this.age_all.filter(value => value.stanowisko === this.Selected_stanowisko)
            },
        },
        
    })
</script>

