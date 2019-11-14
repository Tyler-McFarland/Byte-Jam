<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


  $name = $_POST['Name'];
  $sql = "INSERT INTO players ";
  $sql .= "(Name) ";
  $sql .= "VALUES(";
  $sql .= "'" . $name . "'";
  $sql .= ")";
  $result = mysqli_query($connection, $sql);

  if ($result) {
    // code...
  }
  else {
    echo mysqli_error($connection);
  }

  header("Location: ../Test.php");

?>
