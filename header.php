<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include 'dbh.php';
include 'fctii.php'
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  </head>

<body>
<center>
<div class="scrollmenu">
  <a href="acasa.php">Acasă</a>
  <a href="filme.php">Filme</a>
  <a href="spectacole.php">Spectacole</a>
  <a href="contactați-ne.php">Contactați-ne</a>
  <a href="about.php">Despre noi</a>
<?php
$admin=getAdmin($conn);
if(isset($_SESSION["userem"]))
{
    if($admin==1)
    {echo "<a href= 'rezervare.php'>Rezervă bilet</a>";
    echo "<a href= 'admin.php'>Gestionare</a>";
    echo "<a href = 'logout.php'>Deconectare</a>";}
    else {
        echo "<a href= 'rezervare.php'>Rezervă bilet</a>";
        echo "<a href = 'logout.php'>Deconectare</a>";
    }
}
else {
echo "<a href='login.php'>Autentificare</a>";
echo "<a href='signup.php'>Înregistrare</a>";
}
?>
</div>
</center>
</body>
</html>