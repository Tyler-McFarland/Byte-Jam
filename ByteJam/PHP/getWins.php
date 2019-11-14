<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $sql = "SELECT COUNT(Win) FROM players";

  $result = mysqli_query($connection, $sql);
  $count = mysqli_fetch_row($result);

  if ($result) {
    echo $count[0];
  }
  else {
    echo mysqli_error($connection);
  }
?>
