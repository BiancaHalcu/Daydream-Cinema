<?php
if (isset($_POST["submit"])) 
{
    $username = $_POST["username"];

    require_once 'dbh.php';
    require_once 'fctii.php';

    $username = mysqli_real_escape_string($conn,$username);


    if (emptyDelete($username) !== false)
    {
        header("location: admin.php?error=emptyinput");
        exit();
    }
    else 
    {
        deleteUser($conn, $username);
    }

}
else
{  header("location: admin.php");}
?>