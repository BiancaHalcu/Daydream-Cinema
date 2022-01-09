<?php
if (isset($_POST["submit"])) 
{
    $nume = $_POST["nume"];
    $regie = $_POST["regie"];
    $distributie = $_POST["distributie"];
    $program = $_POST["program"];
    $pret = $_POST["pret"];
    require_once 'dbh.php';
    require_once 'fctii.php';

    $nume = mysqli_real_escape_string($conn,$nume);
    $regie = mysqli_real_escape_string($conn,$regie);
    $distributie = mysqli_real_escape_string($conn,$distributie);
    $program = mysqli_real_escape_string($conn,$program);
    $pret = mysqli_real_escape_string($conn,$pret);
    if (emptyInsert($nume, $regie, $distributie, $program, $pret) !== false){
        header("location: admin.php?error=emptyinput");
        exit();
        }

else 
{
insertSpectacol($conn, $nume, $regie, $distributie, $program, $pret);
}

}

else
{  header("location: admin.php");}