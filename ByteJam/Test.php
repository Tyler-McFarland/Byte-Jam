<!DOCTYPE html>
<html lang= "en-us">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="JS/PersonalityFunctionality.js"></script>

   </head>
    <body id="content" onload="ChangeText()">
        <div id="container">
            <div id="center">
                <h2 id="Question">Please answer
                the questions below</h2> <br>
            <div id="radio">
                <input type="radio" name="group" id="Rb1" class="select">
                <label id="RadioText1">Q1</label> <br>

                <input type="radio" name="group" id="Rb2" class="select">
                <label id="RadioText2">Q2</label> <br>

                <input type="radio" name="group" id="Rb3" class="select">
                <label id="RadioText3">Q3</label> <br>
            </div>
              <button id="contButton" onclick="ValidateEntry(); ChangeText()">Continue</button>
            </div>
        </div>
    </body>
    <footer>
        <input type="hidden" id="selection">
    </footer>
</html>
