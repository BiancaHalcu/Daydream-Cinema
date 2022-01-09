<?php
if(isset($_POST["submit"])) {
$em = $_POST["em"];
$pw = $_POST["pw"];
$pwr = $_POST["pwr"];

require_once 'dbh.php';
require_once 'fctii.php';

if(invalidEmail($em) !== false)
{
header("location: signup.php?error=invalidemail");
exit();
}
if(pwd($pw,$pwr) !== false)
{
header("location: signup.php?error=parolaintrodusagresit");
exit();
}
if(emExista($conn, $em) !== false)
{
header("location: signup.php?error=emailfolositdeja");
exit();
}
createUser($conn, $em, $pw);
}
else { header("location: signup.php?error=none"); exit();}
?>