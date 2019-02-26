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
                    main_tools.own,
                    main_tools.own_title,
                    main_tools.total

                    
                        from employee
                        left join source
                        ON employee.session_id = source.session_id 
                        left join source_rate
                        ON employee.session_id = source_rate.session_id
                        left join main_tools
                        ON employee.session_id = main_tools.session_id
                        ";
        
        $sql = "select Distinct(employee.session_id) as employee,
					typ, Stanowisko, Wiek,
					source.zarzad,
					source.przelozony,
					source.dzial,
					source.inny_dzial,
					source.baza_danych,
					source_rate.zarzad,
					source_rate.przelozony,
					source_rate.dzial,
					source_rate.inny_dzial,
					source_rate.baza_danych				
                        from employee
                        left join source
                        ON employee.session_id = source.session_id 
                        left join source_rate
                        ON employee.session_id = source_rate.session_id
                        left join main_tools
                        ON employee.session_id = main_tools.session_id
                        ";

                $get = $db->prepare( $sql1 );
                $get -> execute(array( $sql1 ) );
                $all_row = $get->fetchAll(PDO::FETCH_ASSOC); 

                return $all_row;
}
$metryczka = metryczka();
?>

<div class="App">
   
    <div v-for="item in ankiety"> 
        <ul>
            <li>{{ item.id }}</li>
            <li>{{ item.typ }}</li>
            <li>{{ item.stanowisko }}</li>
            <li>{{ item.wiek }}</li>
            <li>{{ item.s_zarzad }} </li>
            <li>{{ item.s_przelozony }}</li>
            <li>{{ item.s_dzial }}</li>
            <li>{{ item.s_inny_dzial }}</li>
            <li>{{ item.s_baza_danych }}</li>
            <li>{{ item.r_zarzad }}</li>
            <li>{{ item.r_przelozony }}</li>
            <li>{{ item.r_dzial }}</li>
            <li>{{ item.r_inny_dzial }}</li>
            <li>{{ item.r_baza_danych }}</li>
        </ul>
    </div>


</div>

<script>
        new Vue({
        el: '.App',
        data: {
            ankiety<?php echo $key; ?>: [
                 <?php $id = 1; ?>
                    <?php foreach ($metryczka as $value) { ?>
                        <?php echo '{' ?>
                            id:             '<?php echo $value['employee']; ?>',
                            typ:            '<?php echo $value['typ']; ?>',
                            stanowisko:     '<?php echo $value['Stanowisko']; ?>',
                            wiek:           '<?php echo $value['Wiek']; ?>',
                            s_zarzad:       '<?php echo $value['s_zarzad']; ?>',
                            s_przelozony:   '<?php echo $value['s_przelozony']; ?>',
                            s_dzial:        '<?php echo $value['s_dzial']; ?>',
                            s_inny_dzial:   '<?php echo $value['s_inny_dzial']; ?>',
                            s_baza_danych:  '<?php echo $value['s_baza_danych']; ?>',
                            r_zarzad:       '<?php echo $value['r_zarzad']; ?>',
                            r_przelozony:   '<?php echo $value['r_przelozony']; ?>',
                            r_dzial:        '<?php echo $value['r_dzial']; ?>',
                            r_inny_dzial:   '<?php echo $value['r_inny_dzial']; ?>',
                            r_baza_danych:  '<?php echo $value['r_baza_danych']; ?>',
                        <?php echo '},' ?>
                    <?php $id++ ?>
                <?php } ?>
            ],
            }
        })
</script>
