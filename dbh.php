<?php

$serverName="localhost";
$dBemail="id17980891_aaa";
$dbPassword=">p0{2*V?Q(_R3!@V";
$dBName = "id17980891_login";

$conn = mysqli_connect($serverName, $dBemail, $dbPassword, $dBName);

if(!$conn)
{
die("Connection failed: ". mysqli_connect_error());
}