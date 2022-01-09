<?php
require_once('header.php');
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Autentificare</title>
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  </head>
<body>


<h1>Autentificare</h1>
<form action = "login-inc.php" method = "post">
        <div class="container"> 
            <label>Email : </label> 
            <input type="text" placeholder="Introduceți adresa de email" name="em" required>
            <label>Parola : </label> 
            <input type="password" placeholder="Introduceți parola" name="pass" required>
            <button type="submit" name = "submit" >Login</button> 
            <input type="checkbox" checked="checked"> <span id = "culoare"> Remember me 
            <button onClick="window.location.reload();" type="button" class="cancelbtn"> Cancel</button>
<?php
if(isset($_GET["error"])){
if($_GET["error"] == "wronglogin")
{
echo "<p>Informatii introduse gresit!</p>";
}
if($_GET["error"] == "emptyinput")
{
echo "<p>Completati toate campurile!</p>";
}
if($_GET["error"] == "none")
{
echo "<p>V-ati logat cu succes!</p>";
}
}
?>
        </div> 
    </form>   
</body>
</html>