<?php
require_once('header.php');
require_once('dbh.php');
require_once('fctii.php');
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Daydream Cinema</title>
  <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="css/spect.css" />
  </head>
  
<h2 style="color:white;text-align:center;margin-top:40px">Spectacole:</h2>

<div class="article-container">
<?php

    $sql = "SELECT * FROM spectacol";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    echo"<table style='font-size: 15px; margin-left:auto;margin-right:auto;margin-top:60px'>";
    echo"<tr style='font-size:17px'><th>Titlul</th><th>Regia</th><th>Distributia</th><th>Program</th><th>Pret</th>";
    if($queryResults > 0){
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr style='height: 70px;'><th style='width:150px' class='nm'>".$row['nume']."</th>
                <th>".$row['regie']."</th>
                <th>".$row['distributie']."</th>
                <th>".$row['program']."</th>
                <th>".$row['pret']."</th></tr>";
}echo "</table>";
}
?>
</div>