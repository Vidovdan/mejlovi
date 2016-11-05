<?php
function Prosek($polje){
	$osnova = 0;
	$i = 0;
	foreach($polje as $broj){
	$osnova += $broj;
	$i++;
	}
	$finall = $osnova/$i;
	return round($finall, 2);
}
?>