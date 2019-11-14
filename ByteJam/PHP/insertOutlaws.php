<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tumble';
$c1 = $_POST['C1'];
$c2 = $_POST['C2'];
$c3 = $_POST['C3'];
$c4 = $_POST['C4'];


$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM players";
$results = mysqli_query( $connection, $sql);
$count = mysqli_num_rows($results);

$updateSql = "UPDATE players SET Crew1=$c1, Crew2=$c2, Crew3=$c3, Crew4=$c4 WHERE ID =  $count";

mysqli_query($connection, $updateSql);

 ?>
