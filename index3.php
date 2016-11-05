<!DOCTYPE html>
<html lang="sr">
    <head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="bootstrap.min.css">
	  <link rel="stylesheet" href="styles.css">

	  
	  <title></title>	  
	</head>	

<body>

	<div id="wrapper">

		<div id="header">
      		<header>
      		</header>

	<div id="content">

<h1 class="text-center">PHP vežbaonica Filipa Despotovića</h1>
<div class="container">

<h4 class="text-right">
<?php
$vreme = new DateTime();
print "The PHP time is: " . $vreme->format("G:i") . "<br>";
print "\n";
print $vreme->format("l");
print "\n";
?>
</h4>

<h4 class="text-right">
	<p>The JavaScript time is: <span id="time"></span></p>
	<p id="demo"></p>
</h4>

<p>
<?php
echo "Filip kraaalj" . "<br>";
echo "Saška kraljica<br>";
?>
</p>

<?php
$a = 10;
$b = 15;
echo $a;
echo "<br />";
echo $b;
echo "<hr />";
$c = (3*$a - $b)/2;
echo $c;
echo "<br /><br/>";
$tekst1 = "$\a = " . $a;
$tekst2 = "$\b = " . $b;
$tekst3 = "$\c = (3a - b) / 2 = " . $c;
echo $tekst1 . "<br>" . $tekst2 . "<hr>" . $tekst3;
/* ili bez operatora spajanja 
echo "$tekst1<br>$tekst2<hr>$tekst3";*/
echo "<br><br>";
?>

<?php
$filip = 11;
$saska = 5;
if ($filip < 10 and $saska < 10) {
	echo "Filip i Saška su manji od desetke";
}
elseif ($filip < 10 or $saska < 10){
	echo "Filip ili Saška je veća od desetke";
		echo "<br><br>";
}
else{
	echo "Niko nije veći od desetke";
}
?>

<?php
$ocjene = array(4, 5, 4);
$prosjek = ($ocjene[0] + $ocjene[1] + $ocjene[2])/3;
echo "Prosjek ocjena je $prosjek<br>";
echo "Hrvatski: $ocjene[0] <br>";
echo "Matematika: $ocjene[1] <br>";
echo "Povijest: $ocjene[2] <br><br>";
?>

<?php
$ocjene = array("Hrvatski" => 4,
				"Matematika" => 5,
				"Povijest" => 4);
$prosjek = ($ocjene["Hrvatski"] + $ocjene["Matematika"] + $ocjene["Povijest"])/3;
echo "Prosjek ocjena je $prosjek<br>";
echo "Hrvatski: {$ocjene["Hrvatski"]} <br>";
echo "Matematika: {$ocjene["Matematika"]} <br>";
echo "Povijest: {$ocjene["Povijest"]} <br><br>";
?>

<?php
$ocjene = array( "Filip" => array ("Hrvatski" => 4,
									"Matematika" => 5,
									"Povijest" => 4),
				"Saska" => array ("Hrvatski" => 5,
									"Matematika" => 5,
									"Povijest" => 5),
				"Ina" => array ("Hrvatski" => 3,
									"Matematika" => 5,
									"Povijest" => 4),
				"Boris" => array ("Hrvatski" => 5,
									"Matematika" => 3,
									"Povijest" => 5));
$prosjekFilip = ($ocjene["Filip"]["Hrvatski"] + $ocjene["Filip"]["Matematika"] + $ocjene["Filip"]["Povijest"]) / 3;
$prosjekSaska = ($ocjene["Saska"]["Hrvatski"] + $ocjene["Saska"]["Matematika"] + $ocjene["Saska"]["Povijest"]) / 3;
$prosjekIna = ($ocjene["Ina"]["Hrvatski"] + $ocjene["Ina"]["Matematika"] + $ocjene["Ina"]["Povijest"]) / 3;
$prosjekBoris = ($ocjene["Boris"]["Hrvatski"] + $ocjene["Boris"]["Matematika"] + $ocjene["Boris"]["Povijest"]) / 3;
?>

<table class="table table-bordered">
<tr class="info">
	<th></th>
	<th>Hrvatski</th>
	<th>Matematika</th>
	<th>Povijest</th>
	<th>Prosjek</th>
</tr>

<tr class="warning">
	<th>Filip</th>
	<td><?php echo $ocjene["Filip"]["Hrvatski"] ?></td>
	<td><?php echo $ocjene["Filip"]["Matematika"] ?></td>
	<td><?php echo $ocjene["Filip"]["Povijest"] ?></td>
	<td><?php echo $prosjekFilip ?></td>
</tr>
<tr class="warning">
	<th>Saska</th>
	<td><?php echo $ocjene["Saska"]["Hrvatski"] ?></td>
	<td><?php echo $ocjene["Saska"]["Matematika"] ?></td>
	<td><?php echo $ocjene["Saska"]["Povijest"] ?></td>
	<td><?php echo $prosjekSaska ?></td>
</tr>
<tr class="warning">
	<th>Ina</th>
	<td><?php echo $ocjene["Ina"]["Hrvatski"] ?></td>
	<td><?php echo $ocjene["Ina"]["Matematika"] ?></td>
	<td><?php echo $ocjene["Ina"]["Povijest"] ?></td>
	<td><?php echo $prosjekIna ?></td>
</tr>
<tr class="warning">
	<th>Boris</th>
	<td><?php echo $ocjene["Boris"]["Hrvatski"] ?></td>
	<td><?php echo $ocjene["Boris"]["Matematika"] ?></td>
	<td><?php echo $ocjene["Boris"]["Povijest"] ?></td>
	<td><?php echo $prosjekBoris ?></td>
</tr>
	
</table><br><br>

<?php
for ($i=1; $i<=10; $i++) {
	echo $i . " ";
}
?>
<br><br>
<?php
for ($i=1; $i<=10; $i++) {
	for ($j=1; $j<=10; $j++) {
		echo $i * $j . " ";
	}
	echo "<br>";
}
?>
<br><br>

<table class="table table-bordered">
<?php
for ($i=1; $i<=10; $i++) {
	echo $i . " ";
}
?>
<br><br>
<?php
for ($i=1; $i<=10; $i++) {
	echo "<tr>";
	for ($j=1; $j<=10; $j++) {
		echo "<td class='success'>";
		echo $i * $j . " ";
		echo "</td>";
	}
	echo "</tr>";
}
?>
</table><br><br>

<?php
$ocjene = array("Hrvatski" => 4,
				"Matematika" => 5,
				"Povijest" => 4);
$osnova = 0;
foreach ($ocjene as $predmet => $ocjena) {
	echo "$predmet: $ocjena <br>";
	$osnova += $ocjena;
}
echo "Prosjek ocjena je: " . $osnova/3;
?>
<br><br>

<?php
$ocjene = array( "Filip" => array ("Hrvatski" => 4,
									"Matematika" => 5,
									"Povijest" => 4),
				"Saska" => array ("Hrvatski" => 5,
									"Matematika" => 5,
									"Povijest" => 5),
				"Ina" => array ("Hrvatski" => 3,
									"Matematika" => 5,
									"Povijest" => 4),
				"Boris" => array ("Hrvatski" => 5,
									"Matematika" => 3,
									"Povijest" => 5));
?>
<table class="table table-bordered">
<tr class="info">
	<th></th>
	<th>Hrvatski</th>
	<th>Matematika</th>
	<th>Povijest</th>
	<th>Prosjek</th>
</tr>

<?php
foreach ($ocjene as $ime => $ucenik) {
	echo "<tr class='warning'>";
	echo "<th>$ime</th>";
	$osnova = 0;
	foreach ($ucenik as $ocjena) {
		echo "<td>$ocjena</td>";
		$osnova += $ocjena;
	}
	echo "<td>" . $osnova/3 . "</td>";
	echo "<tr>";
}
?>

</table><br><br>


<?php
/*function Prosjek($a, $b, $c){
	return ($a + $b + $c) / 3;
}

$a=3;
$b=4;
$c=4;
$d = Prosjek($a, $b, $c);
echo "Prosjek je: $d";*/
?>

<?php
$ocjene = array("Hrvatski" => 4,
				"Matematika" => 5,
				"Povijest" => 4);
require("prosjek.php");
$prosjek = Prosjek($ocjene["Hrvatski"],$ocjene["Matematika"],$ocjene["Povijest"]);
echo "Prosjek je: $prosjek";
?>


<?php
$ocjene = array( "Filip" => array ("Hrvatski" => 4,
									"Matematika" => 5,
									"Povijest" => 4),
				"Saska" => array ("Hrvatski" => 5,
									"Matematika" => 5,
									"Povijest" => 5),
				"Ina" => array ("Hrvatski" => 3,
									"Matematika" => 5,
									"Povijest" => 4),
				"Boris" => array ("Hrvatski" => 5,
									"Matematika" => 3,
									"Povijest" => 5));
?>
<table class="table table-bordered">
<tr class="info">
	<th></th>
	<th>Hrvatski</th>
	<th>Matematika</th>
	<th>Povijest</th>
	<th>Prosjek</th>
</tr>

<?php

require("prosek.php");
foreach ($ocjene as $ime => $ucenik) {
	echo "<tr class='warning'>";
	echo "<th>$ime</th>";
	foreach ($ucenik as $ocjena) {
		echo "<td>$ocjena</td>";
	}
	echo "<td>" . Prosek($ucenik) . "</td>";
	echo "<tr>";
}
?>
</table><br><br>

<?php
$trenutnovrijeme = date("d.m.Y H:i:s");
echo "Sada je: $trenutnovrijeme<br>";
$polje = explode(" ", $trenutnovrijeme);
echo "Datum: $polje[0]<br>";
echo "Vrijeme: $polje[1]<br>";
$poljedatum = explode(".", $polje[0]);
$dan=$poljedatum[0];
$mjesec=$poljedatum[1];
$godina=$poljedatum[2];
echo "Dan: $dan<br>";
echo "Mjesec: $mjesec<br>";
echo "Godina: $godina<br>";
$poljevrijeme = explode(":", $polje[1]);
$sat=$poljevrijeme[0];
$minut=$poljevrijeme[1];
$sekunda=$poljevrijeme[2];
echo "Sati je: $sat<br>";
echo "Minuta je: $minut<br>";
echo "Sekundi je: $sekunda<br>";
if (checkdate($mjesec, $dan, $godina))
{
	echo "Datum je ispravan.<br>";
	echo "Vremenska oznaka je " . mktime($sat, $minut, $sekunda, $mjesec, $dan, $godina);
}
?>

</div>
	</div>

	<div id="footer">
	  		<footer> 
	 		</footer>

	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  	  	  	  <script src="fika.js"></script>



</div>
</body>
</html>
