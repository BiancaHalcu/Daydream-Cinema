<?php
include'dbh.php';
function invalidEmail($em)
{
$rezultat;
if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
$rezultat = true;
}
else{
$rezultat = false;
}
return $rezultat;
}

function pwd($pw,$pwr)
{
$rezultat;
if($pw !== $pwr){
$rezultat = true;
}
else{
$rezultat = false;
}
return $rezultat;
}

function emExista($conn, $em)
{
$sql = "SELECT * FROM users WHERE uemail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
{
header("location: signup.php?error=stmtfailed");
exit();
}
mysqli_stmt_bind_param($stmt,"s",$em);
mysqli_stmt_execute($stmt);

$rezultatData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($rezultatData)){
return $row;
}
else {
$rezultat = false;
return $rezultat;
}

mysqli_stmt_close($stmt);
}

function createUser($conn, $em, $pw)
{
$sql = "INSERT INTO users (uemail, uparola) VALUES (?, ?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
{
header("location: signup.php?error=stmtfailed");
exit();
}

$hashedPw=password_hash($pw, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt,"ss",$em,$hashedPw);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: signup.php?error=none");
exit();
}

function emptyInputLogin($em,$pw) {
$rezultat;
if(empty($em) || empty($pw)){
$rezultat = true;
}
else{
$rezultat = false;
}
return $rezultat;
}

function loginUser($conn, $em, $pw) {
$emExista = emExista($conn, $em);
if($emExista === false) {
header("location: login.php?error=wronglogin");
exit();
}
$passh = $emExista["uparola"];
$checkPw = password_verify($pw, $passh);

if($checkPw === false) {
header("location: login.php?error=wronglogin");
exit();
}
else if($checkPw === true) {
session_start();
$_SESSION["userem"]=$emExista["uemail"];
header("location: acasa.php");
}
}

function getID($conn)
{
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_SESSION["userem"])){

           $query = "SELECT uid FROM users WHERE uemail= '".$_SESSION['userem']."'";     

           $result = mysqli_query($conn, $query) or 

           die(mysql_error($conn)); 

           if (!$result) die('Query failed: ' . mysqli_error($conn)); 

           while($row = mysqli_fetch_array($result)){ 

           $rez= $row['uid'];

        }
        return $rez;
    }
    
}

function getAdmin($conn)
{
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_SESSION["userem"])){

           $query = "SELECT tip_user FROM users WHERE uemail= '".$_SESSION['userem']."'";

           $result = mysqli_query($conn, $query) or 

           die(mysql_error($conn)); 

           if (!$result) die('Query failed: ' . mysqli_error($conn)); 

           while($row = mysqli_fetch_array($result)){ 

           $rez= $row['tip_user'];

        }
        return $rez;
    }

}

function emptyInsert($nume, $regie, $distributie, $program, $pret)
{
    $result;
    if(empty($nume) || empty($regie) || empty($distributie) || empty($program) || empty($pret))
        {
            $result = true;
        }
        else { $result=false; }
    return $result;

}

function emptyDelete($denumire)
{
    $result;
    if(empty($denumire)) 
        {
            $result = true;
        }
        else { $result=false; }
    return $result;

}

function insertSpectacol($conn, $nume, $regie, $distributie, $program, $pret)
{
    $sql = "INSERT INTO spectacol (nume, regie, distributie, program, pret) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
    header("location: admin.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssd", $nume, $regie, $distributie, $program, $pret);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: admin.php?error=adaugat");
        exit();
}

function deleteSpectacol($conn, $denumire)
{
    $sql = "DELETE FROM spectacol where nume = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
    header("location: admin.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $denumire);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: admin.php?error=none");
        exit();
}

function deleteUser($conn, $username)
{
    $sql = "DELETE FROM users where uemail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
    header("location: admin.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: admin.php?error=none");
        exit();
}

function checkSeat($conn, $ra, $co)
{ 
    $sql = "SELECT rand, coloana FROM rezervari WHERE rand = ? and coloana = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ii",$ra,$co);
    mysqli_stmt_execute($stmt);
    $rezultatData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($rezultatData)){
        return $row;
    }
    else {
        $rezultat = false;
        return $rezultat;
    }
    mysqli_stmt_close($stmt);
}

function createRez($conn, $nm, $ph, $ad, $ch, $re, $fi, $ra, $co)
{ 
    $r=checkSeat($conn, $ra, $co);
    if($r==false)
    {$rd = getID($conn);
    $sql = "INSERT INTO rezervari (userid, nume, tel, adult, child, rezdata, film, rand, coloana) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: rezervare.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"issiissii",$rd, $nm, $ph, $ad, $ch, $re, $fi, $ra, $co);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: rezervare.php?error=none");
    exit();}
    else
    {
        echo '<script type="text/javascript">';
        echo ' alert("Locul este ocupat") ? "" : window.location.replace("rezervare.php")'; 
        echo '</script>';
    }
}