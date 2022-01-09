<?php
require_once('header.php');
?>

<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Rezervare bilet</title> 
  <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="css/rez.css" />
  </head>

<body>

<h1>Rezervare bilet</h1>
<center>
<form action="rezervare-inc.php" method = "post">
<div class="nume">
<label for="name">Numele și prenumele</label>
<input type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required></div>
<div class="nume">
<label for="phone">Numărul de telefon</label>
<input type="tel" id="phone" name="phone" placeholder="076-654-7542" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required></div>
<div class="pers">
<label for="adult">Adulți</label>
<input type="number" id="adult" name="adult" placeholder="0" min="1" required></div>
<div class="pers">
<label for="child">Copii</label>
<input type="number" id="child" name="child" placeholder="0" min="0">
</div>
<div class="nume">
<label for="rezerv">Rezervare pentru data de:</label>
<input type="date" id="rezerv" name="rezerv" required>
</div>
<div class="nume">
<label for="film">Introduceți numele filmului/spectacolului:</label>
<input type="text" id="film" name="film" placeholder="Regatul de gheață 2" required></div>
<div class="nume">
<p>Alegeți-vă locul:</p>
<div class="pers">
<label for="adult">Rând</label>
<input type="number" id="r" name="r" placeholder="3" min="1" required></div>
<div class="pers">
<label for="child">Coloana</label>
<input type="number" id="c" name="c" placeholder="2" min="1" required>
</div>
<div class="nume">
<img src="../poze/loc.png"></div>
<div class="butoane">
<input type="reset" value="Anulează">
<input type="submit" name = "submit" value="Trimite">
</div>
</form>
</center>
</body>
</html>