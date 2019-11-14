<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $sql = "SELECT * FROM players";
  $results = mysqli_query( $connection, $sql);
  $count = mysqli_num_rows($results);

  $sqlAlignment = "SELECT GroupType FROM players WHERE ID = $count";

  $selectAlignmentQuery = mysqli_query($connection, $sqlAlignment);
  $selectAlignment = mysqli_fetch_row($selectAlignmentQuery);

  echo $selectAlignment[0];
 ?>
