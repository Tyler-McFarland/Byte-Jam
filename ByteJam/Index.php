<!DOCTYPE html>
<html lang= "en-us">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="JS/Index.js"></script>
    <script>
      function newPage(){
        window.location.replace("http://localhost/ByteJam/Test.php");
      }
    </script>

</head>
    <body id="content" onLoad="getWins()">
		<header id="Info">
			<h1>Wild News</h1>
			<h4>Wins:</h4></br><h4 id="wins"></h4>
			<h4>Defeats:</h4></br><h4 id="losses"></h4>
		</header>
        <div id="back">

            <h1>Tumble</h1>
            <h4>Enter your Name</h4>
            <br>
            <form action="PHP/InsertName.php" method="post">
              <input type="text" name="Name" id="Name">
              <br>
              <label>&nbsp</label>
              <input type="submit" id="play" href="Test.html" value="Submit" onclick="newPage()">
          </form>
        </div>
        <footer >
           <a href="info.html"> <img src="Images/horse.png" height="80" width="auto"></a>
        </footer>
    </body>
</html>
