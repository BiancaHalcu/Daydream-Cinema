<?php
if(isset($_POST["submit"])) {
$em=$_POST["em"];
$pw=$_POST["pass"];

require_once 'dbh.php';
require_once 'fctii.php';

if(emptyInputLogin($em, $pw) !== false) {
header("location: login.php?error=emptyinput");
exit();
}
loginUser($conn, $em, $pw);
}
else { 
header("location: login.php"); 
exit();
}