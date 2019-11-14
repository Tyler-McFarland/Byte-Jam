<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tumble';
$Attribute = $_POST['AttributePoints'];

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM players";
$results = mysqli_query( $connection, $sql);
$count = mysqli_num_rows($results);

$updateSql = "UPDATE players SET QuestionTotal= $Attribute WHERE ID =  $count";

mysqli_query($connection, $updateSql);

 ?>
