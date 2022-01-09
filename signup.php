<?php
require_once('header.php');
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Înregistrare</title> 
  <link rel="stylesheet" type="text/css" href="../css/signup.css" />
  <link rel="stylesheet" type="text/css" href="../css/scroll.css" />
  </head>

<body>

<h1>Înregistrare</h1>
<form action = "signup-inc.php" method = "post">
        <div class="container"> 
            <label>Email : </label> 
            <input type="text" placeholder="Introduceți adresa de email" name="em" required>
            <label>Parola : </label> 
            <input type="password" placeholder="Introduceți parola" name="pw" required>
	    <input type="password" placeholder="Introduceți parola din nou" name="pwr" required>
            <button type="submit" name = "submit">Înregistrare</button>
            <button onClick="window.location.reload();" type="button" class="cancelbtn"> Cancel</button> 
<?php
if(isset($_GET["error"])){
if($_GET["error"] == "invalidemail")
{
echo "<p>Introduceti o adresa de email valida!</p>";
}
if($_GET["error"] == "parolaintrodusagresit")
{
echo "<p>Parola este gresita!</p>";
}
if($_GET["error"] == "emailfolositdeja")
{
echo "<p>Adresa de email a fost deja folosita!</p>";
}
if($_GET["error"] == "stmtfailed")
{
echo "<p>Ceva a mers gresit. Incercati din nou!</p>";
}
if($_GET["error"] == "none")
{
echo "<p>Inregistrarea a avut succes!</p>";
}
}
?>
</div> 
    </form> 

</body>
</html>