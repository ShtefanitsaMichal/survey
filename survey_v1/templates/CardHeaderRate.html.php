<?php $s_num = $_SESSION['source_number']?>

<div class="card-header" id="choose_source">
    <label v-if="source<?php echo $s_num ?> == 0 ">Jak oceniasz poniższe formy komunikacji z zarządem lub deryktorami SMP (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 1 ">Jak oceniasz poniższe formy komunikacji z bezpośrednim przełożonym (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 2 ">Jak oceniasz poniższe formy komunikacji ze swoim działem (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 3 ">Jak oceniasz poniższe formy komunikacji z pracownikami innego działu SMP (suma ma wynieść 100%) </label>
    <label v-else-if="source<?php echo $s_num ?> == 4 ">Jak oceniasz poniższe systemy informatyczne pod kontem komunikacji ? (suma ma wynieść 100%) </label> 
    <label v-else><span class="text-warning"> Żródło nie istnieje!!! </span>
</div>
