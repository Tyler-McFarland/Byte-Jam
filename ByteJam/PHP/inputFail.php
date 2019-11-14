<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


  $sql = "SELECT * FROM players";
  $results = mysqli_query( $connection, $sql);
  $count = mysqli_num_rows($results);

  $sql = "UPDATE players SET Loss=1 WHERE ID =  $count";

  $result = mysqli_query($connection, $sql);

  if ($result) {
    // code...
  }
  else {
    echo mysqli_error($connection);
  }
?>
