<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="bootstrap.min.css">
	  <link rel="stylesheet" href="styles.css">
	<title>Unos poruke</title>
</head>
<body>
<div class="container">
<form method="POST" action="PosaljiPoruku.php">
Naslov: <br>
<input type="text" name="naslov">
<br><br>
Tekst poruke: <br>
<textarea name="tekst" rows="4">	
</textarea>
<br><br>
<input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">
<input type="submit" value="Pošalji poruku">
<input type="reset" value="Odustani">
</form>
<br>
<a href="adresar.html">Unos nove adrese</a>
&nbsp;
<a href="pregledadresa.php">Pregled adresa</a>
</div>
</body>
</html>