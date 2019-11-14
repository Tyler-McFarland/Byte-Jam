<!DOCTYPE html>
<html lang="en-us">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="JS/MissionFunctionV3.js"></script>
</head>
<body id="content" onload="CatchText()">
    <div id="container">
        <div id="center">
            <div id="mission">
                <div id="radio">
                    <input type="radio" name="&nbsp" id="RB1"><label id="Catch">Catch gang name/player name.</label>
                    <br>
                    <input type="radio" name="&nbsp" id="RB2">Play Some Cards
                    <br>
                    <input type="radio" name="&nbsp" id="RB3">Rob Bank
                    <br>
				    <button id="btn" onclick="EntrySelection()" >Let's Ride</button>
              </div>
            </div>
        </div>
    </div>

</body>
<footer>
	<form hidden="true">
		<button id="iTarName">Billy Jones</button>
	</form>
</footer>
</html>
