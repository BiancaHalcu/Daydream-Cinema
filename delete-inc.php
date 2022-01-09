<?php
if (isset($_POST["submit"])) 
{
    $denumire = $_POST["denumire"];

    require_once 'dbh.php';
    require_once 'fctii.php';

    $denumire = mysqli_real_escape_string($conn,$denumire);
    if(emptyDelete($denumire)!==false)
    {  
        header("location: admin.php?error=emptyinput");
        exit();
    }
    else deleteSpectacol($conn, $denumire);

}

else
{  header("location: admin.php");}
?>