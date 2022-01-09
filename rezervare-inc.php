<?php
    include 'dbh.php';
    include 'fctii.php';
if(isset($_POST["submit"])) {
    $nm = $_POST["name"];
    $ph = $_POST["phone"];
    $ad = $_POST["adult"];
    $ch = $_POST["child"];
    $re = $_POST["rezerv"];
    $fi = $_POST["film"];
    $ra = $_POST["r"];
    $co = $_POST["c"];
    createRez($conn, $nm, $ph, $ad, $ch, $re, $fi, $ra, $co);
    }
    else { header("location: rezervare.php"); exit();}
?>