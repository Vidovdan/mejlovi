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
	<h2>Slanje poruke</h2>
	<?php
	$email = $_POST['email'];
	$naslov = $_POST['naslov'];
	$tekst = $_POST['tekst'];
	echo "Primatelj: $email<br>";
	echo "Naslov: $naslov<br>";
	echo "Tekst poruke: $tekst<br><br>";
	ini_set("SMTP", "filip.despotovic@gmail.com");
	ini_set("sendmail_from", "ime.prezime@domen.hr");
	if (mail($email, $naslov, $tekst)){
		echo "Poruka je uspješno poslata!";
	}
	else {
		echo "Poruka nije uspješno poslata!";
	}
	?>
	<br><br>
<a href="adresar.html">Unos nove adrese</a>
&nbsp;
<a href="pregledadresa.php">Pregled adresa</a>
</div>
</body>
</html>