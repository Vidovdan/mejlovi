<h1>PHP vežbaonica Filipa Despotovića</h1>
<p>
<?php
echo "Filip kraaalj" . "<br>";
echo "Saška kraljica<br>";
?>
</p>

<h4>
<?php
$vreme = new DateTime();
print "<h4>" . "TAČNO VREME: " . $vreme->format("G:i") . "</h4>";
print "\n";
?>
</h4>;