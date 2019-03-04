<?php 
    include "head.php";
    require_once __ROOT__."/controller/dbConnect.php";
    require_once __ROOT__."/controller/GetController.php";
    require_once __ROOT__."/controller/PostController.php";
    //require_once __ROOT__."/admin/functions.php";
    $db = DB::getInstance();    
    DB::setCharsetEncoding();

    $number = 1; 
    $tool = "Rozmowa osobista";
    function tools_oceny($number, $tool) {
            global $db;
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql1 = "select Distinct(employee.session_id) as employee, 
                        AVG(main_tools_rate.opcja_".$number.") as t".$number."_grade,
                        main_tools_rate.opcja_".$number."_title as t".$number."_grade_title
                        from employee
                        left join main_tools_rate
                        ON employee.session_id = main_tools_rate.session_id 
                        where main_tools_rate.opcja_".$number." <> 0 
                        and main_tools_rate.opcja_".$number."_title like '".$tool."'
                        and employee.typ like '%'
                        and employee.stanowisko like '%'";

            $get = $db->prepare($sql1);
            $get -> execute(array($sql1));
            $all_row = $get->fetchAll(PDO::FETCH_ASSOC);  
            return $all_row[0]['t'.$number.'_grade'];
    }
?>

<div class="App">
    
</div>

<script>
        var summary = new Vue({
        el: '.App',
        data: {
                ankiety: [  ocena1: '<?php echo tools_oceny(2,"Rozmowa osobista"); ?>',
                            ocena2: '<?php echo tools_oceny(2,"Rozmowa osobista"); ?>',
                            ocena3: '<?php echo tools_oceny(3,"Rozmowa osobista"); ?>',
                            ocena4: '<?php echo tools_oceny(4,"Rozmowa osobista"); ?>',
                            ocena5: '<?php echo tools_oceny(5,"Rozmowa osobista"); ?>',]
            },
       
        
    })
</script>

