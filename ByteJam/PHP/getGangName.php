<?php

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'tumble';
  $groupTotal = 0;

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $sql = "SELECT * FROM players";
  $results = mysqli_query( $connection, $sql);
  $count = mysqli_num_rows($results);

  $sqlPlayerScore = "SELECT QuestionTotal FROM players WHERE ID = $count";
  $sqlOutlaw1Id = "SELECT Crew1 FROM players WHERE ID = $count";
  $sqlOutlaw2Id = "SELECT Crew2 FROM players WHERE ID = $count";
  $sqlOutlaw3Id = "SELECT Crew3 FROM players WHERE ID = $count";
  $sqlOutlaw4Id = "SELECT Crew4 FROM players WHERE ID = $count";

  $selectPlayerScoreQuery = mysqli_query($connection, $sqlPlayerScore);
  $selectPlayerScore = mysqli_fetch_row($selectPlayerScoreQuery);
  $groupTotal = $groupTotal + $selectPlayerScore[0];

  $selectOutlaw1IdQuery = mysqli_query($connection, $sqlOutlaw1Id);
  $selectOutlaw1Id = mysqli_fetch_row($selectOutlaw1IdQuery);

  $selectOutlaw2IdQuery = mysqli_query($connection, $sqlOutlaw2Id);
  $selectOutlaw2Id = mysqli_fetch_row($selectOutlaw2IdQuery);

  $selectOutlaw3IdQuery = mysqli_query($connection, $sqlOutlaw3Id);
  $selectOutlaw3Id = mysqli_fetch_row($selectOutlaw3IdQuery);

  $selectOutlaw4IdQuery = mysqli_query($connection, $sqlOutlaw4Id);
  $selectOutlaw4Id = mysqli_fetch_row($selectOutlaw4IdQuery);


  $sqlOutlaw1Attribute = "SELECT OutlawAttribute FROM outlaws WHERE OutlawID = $selectOutlaw1Id[0]";
  $sqlOutlaw2Attribute = "SELECT OutlawAttribute FROM outlaws WHERE OutlawID = $selectOutlaw2Id[0]";
  $sqlOutlaw3Attribute = "SELECT OutlawAttribute FROM outlaws WHERE OutlawID = $selectOutlaw3Id[0]";
  $sqlOutlaw4Attribute = "SELECT OutlawAttribute FROM outlaws WHERE OutlawID = $selectOutlaw4Id[0]";

  $selectOutlaw1AttributeQuery = mysqli_query($connection, $sqlOutlaw1Attribute);
  $selectOutlaw1Attribute = mysqli_fetch_row($selectOutlaw1AttributeQuery);
  $groupTotal = $groupTotal + $selectOutlaw1Attribute[0];

  $selectOutlaw2AttributeQuery = mysqli_query($connection, $sqlOutlaw2Attribute);
  $selectOutlaw2Attribute = mysqli_fetch_row($selectOutlaw2AttributeQuery);
  $groupTotal = $groupTotal + $selectOutlaw2Attribute[0];

  $selectOutlaw3AttributeQuery = mysqli_query($connection, $sqlOutlaw3Attribute);
  $selectOutlaw3Attribute = mysqli_fetch_row($selectOutlaw3AttributeQuery);
  $groupTotal = $groupTotal + $selectOutlaw3Attribute[0];

  $selectOutlaw4AttributeQuery = mysqli_query($connection, $sqlOutlaw4Attribute);
  $selectOutlaw4Attribute = mysqli_fetch_row($selectOutlaw4AttributeQuery);
  $groupTotal = $groupTotal + $selectOutlaw4Attribute[0];

  echo $groupTotal;
?>
