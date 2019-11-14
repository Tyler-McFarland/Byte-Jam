<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';
  $UserTotal = 0;

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $sql = "SELECT * FROM players";
  $results = mysqli_query( $connection, $sql);
  $count = mysqli_num_rows($results);

  $sqlPlayerScore = "SELECT QuestionTotal FROM players WHERE ID = $count";

  $selectPlayerScoreQuery = mysqli_query($connection, $sqlPlayerScore);
  $selectPlayerScore = mysqli_fetch_row($selectPlayerScoreQuery);
  $UserTotal = $selectPlayerScore[0];

  echo $UserTotal;
 ?>
