<?php $s_num = $_SESSION['source_number']?>

<div class="card-header" id="choose_source">
    <label v-if="source<?php echo $s_num ?> == 0 ">Których form informowania najczęściej wykorzystujesz w komunikacji z zarządem lub deryktorami SMP (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 1 ">Których form najczęściej wykorzystujesz w komunikacji z bezpośrednim przełożonym (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 2 ">Ktorych form informowania najczęściej wykorzystujesz w komunikacji ze swoim działem (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 3 ">Ktorych form informowania najczęściej wykorzystujesz w komunikacji z pracownikami innego działu SMP (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 4 ">Które systemy informatyczne najczęściej wykorzystujesz w pracy ? (suma ma wynieść 100%) </label> 
    <label v-else><span class="text-warning"> Żródło nie istnieje!!! </span>
</div>