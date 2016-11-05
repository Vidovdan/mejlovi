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
<h1>Spremljena adresa</h1>
<?php
$ime = $_POST['ime'];
$adresa = $_POST['adresa'];
$grad = $_POST['grad'];
$email =$_POST['email'];
if (isset($_POST['pol'])){
	if ($_POST['pol'] == "M")
		$pol = "Muški";
		else 
		$pol = "Ženski";
}
else
$pol = "";
if (isset($_POST['prijatelj']))
	$prijatelj ="da";
else
	$prijatelj="ne";

echo "Ime: $ime <br>";
echo "Adresa: $adresa <br>";
echo "Grad: $grad <br>";
echo "Email adresa: $email <br>";
echo "Pol: $pol <br>";
echo "Prijatelj: $prijatelj <br>";
echo "Slika: <img src='Slike/$ime.jpg' width='50px'><br>";
$datoteka=fopen("adresar.txt", "a");
fwrite($datoteka, "\r\n$ime\r\n$adresa\r\n$grad\r\n$email\r\n$pol\r\n$prijatelj");
fclose($datoteka);
if ($_FILES["slika"]["name"] && $_FILES["slika"]["size"] != 0) {
	//spremi sliku
	move_uploaded_file($_FILES["slika"]["tmp_name"], "Slike/$ime.jpg");
}
?>
<a href="adresar.html">Unos nove adrese</a>
&nbsp;
<a href="pregledadresa.php">Pregled Adresa</a>
	</div>
</form>
</body>
</html>