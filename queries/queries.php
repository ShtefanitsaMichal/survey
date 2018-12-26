<?php
    $session_id = $_SESSION['session_id'];

    $SQL = array(
                'main_tools' => "SELECT `phone`,`write`,`face_to_face`,`dept_meet`,`prod_meet`,`proj_meet`,`budget_meet`,`smp_d`,`smp_w`,`cs`,`unformal_meet`,`own` 
                                FROM main_tools 
                                WHERE `main_tools`.`session_id` = '$session_id'; 
                                ORDER BY `main_tools`.`id` DESC" 
                            );

    class SQL{
        public function main_tools(){



            return "SELECT `phone`,`write`,`face_to_face`,`dept_meet`,`prod_meet`,`proj_meet`,`budget_meet`,`smp_d`,`smp_w`,`cs`,`unformal_meet`,`own` 
                FROM main_tools 
                WHERE `main_tools`.`session_id` = '$session_id'; 
                ORDER BY `main_tools`.`id` DESC";

        }
    }
    
    $answer = 'SELECT 
        employee.session_id AS ID,
        employee.typ AS typ, 
        employee.wiek AS wiek, 
        employee.stanowisko AS stanowisko, 
        source.zarzad AS zrodlo_zarzad, 
        source.przylozony AS zrodlo_przylozony, 
        source.dzial AS zrodlo_dzial, 
        source.inny_dzial AS zrodlo_inny_dzial, 
        source.baza_danych AS zrodlo_baza_danych,
        source_rate.zarzad AS ocena_zrodla_zarzad, 
        source_rate.przylozony AS ocena_zrodla_przylozony, 
        source_rate.dzial AS ocena_zrodla_dzial,  
        source_rate.inny_dzial AS ocena_zrodla_inny_dzial, 
        source_rate.baza_danych AS ocena_zrodla_baza_danych,
        employee.date AS pracownik_data,
        source.date AS zrodlo_data,
        source_rate.date AS ocena_zrodla_data 
    FROM employee 
    JOIN source 
    ON employee.session_id = source.session_id
    JOIN source_rate		
    ON employee.session_id = source_rate.session_id
    /* WHERE employee.session_id = ' . "'" . $session_id . "'" .' */ 
    GROUP BY ID, source.session_id, source_rate.session_id
    ORDER BY source_rate.session_id ASC'; 
?>

<?php
    $question1 = 'SELECT employee.session_id AS ID, 
    employee.typ AS typ, 
    employee.wiek AS wiek, 
    employee.stanowisko AS stanowisko, 
    employee.date AS pracownik_data
    FROM employee GROUP BY ID ORDER BY employee.date ASC'
?>

<?php
    $question2 = 'SELECT source.session_id AS ID, 
    source.zarzad, 
    source.przylozony,
    source.dzial,
    source.inny_dzial,
    source.baza_danych,
    source.total,
    source.date
    FROM source GROUP BY source.session_id ORDER BY source.date DESC'
?>

<?php



    // $question3 = 'SELECT employee.session_id AS ID, 
    // employee.typ AS typ, 
    // employee.wiek AS wiek, 
    // employee.stanowisko AS stanowisko, 
    // employee.date AS pracownik_data
    // FROM employee GROUP BY ID ORDER BY employee.date ASC'
?>