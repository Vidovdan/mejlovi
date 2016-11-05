<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="bootstrap.min.css">
	  <link rel="stylesheet" href="styles.css">
	<title>Adresar</title>
</head>
<body>
<div class="container">
<h2>Pregled adresa</h2>
<table class="table">
	<tr>
		<th>Ime</th>
		<th>Adresa</th>
		<th>Grad</th>
		<th>Email</th>
		<th>Pol</th>
		<th>Prijatelj</th>
		<th>Slika</th>
	</tr>
	<?php
$datoteka = fopen("adresar.txt", "r");
if ($datoteka){
//čitanje iz datoteke
	fgets($datoteka);
	while (!feof($datoteka)) {
		$ime = fgets($datoteka);
		$adresa = fgets($datoteka);
		$grad = fgets($datoteka);
		$email = fgets($datoteka);
		$pol = fgets($datoteka);
		$prijatelj = fgets($datoteka);

		echo "<tr>";
		echo "<td>$ime</td>";
		echo "<td>$adresa</td>";
		echo "<td>$grad</td>";
		echo "<td><a href='UnosPoruke.php?email=$email'>$email</a></td>";
		echo "<td>$pol</td>";
		echo "<td>$prijatelj</td>";
		echo "<td><img src='Slike/$ime.jpg' width='50px'></td>";
		echo "</td>";
	}
	fclose($datoteka);
}
?>
</table>
<br>
<a href="adresar.html">Unos nove adrese</a>
&nbsp;
<a href="pregledadresa.php">Pregled Adresa</a>
</div>
</body>
</html>