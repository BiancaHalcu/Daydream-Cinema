<?php
require_once('header.php');
require_once('dbh.php');
require_once('fctii.php');
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Daydream Cinema</title>
  <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="css/adm.css" />
  </head>

<body>
<section class="insert-form" style="text-align:center;">
<h3>Insereaza un spectacol</h3>
<div class="insert-form">
<form action="inserare-inc.php" method="post">
    <table><tr>
<th><input type="text" name="nume" placeholder="Titlu..."></th>
<th><input type="text" name="regie" placeholder="Regie..."></th></tr>
<tr><th><input type="text" name="distributie" placeholder="Distributia..."></th>
<th><input type="text" name="program" placeholder="Program..."></th></tr>
<th><input type="text" name="pret" placeholder="Pret..."></th>
<th><button class = "b" type="submit" name="submit">Adauga spectacolul</button></th></tr></table></form></div>
<h3>Sterge un spectacol</h3>

<div class="delete-form">
<form action="delete-inc.php" method="post">
<input type="text" name="denumire" placeholder="Titlu...">

<button class="b" type="submit" name="submit">Sterge spectacolul</button>
</form>
</div>

<h3>Sterge un utilizator</h3>

<div class="deleteuser-form">
<form action="deleteuser-inc.php" method="post">
<input type="text" name="username" placeholder="Adresa de email...">

<button class = "b" type="submit" name="submit">Sterge utilizator</button>
</form>
</div>
</form>
</div>
<?php
if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyinput")
        {
            echo "<p>Completeaza toate campurile!</p>";
        }
        else if ($_GET["error"] == "none")
        {
        echo "<p>Ati sters cu succes!</p>";
        }
        else if ($_GET["error"] == "adaugat")
        {
        echo "<p>Ati adaugat spectacolul cu succes!</p>";
        }
        else if ($_GET["error"] == "stmtfailed")
        {
        echo "<p>Mai incercati o data!</p>";
        }
}

?>
</body>
</html>