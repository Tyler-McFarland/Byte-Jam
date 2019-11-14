
<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="JS/Selection.js"></script>
        <style>
            p {
                font-size: 50px;
                text-align: center;
                align-content: center;
                text-decoration: underline;
            }
        </style>

    </head>
        <body id="content" onLoad="loadScore()">

            <div>
               <p id="WildWestern" style="font-size: 25px;" >Your Wold, Wild Western Crew!</p>
                <table style="width:100%">
                    <tr>
                        <td id="IntheCrew"><a href="Selection.php"><img id='C1' style="height: 300px; width: 300px" src="empty" alt="Crew Member 1" onclick="resetImage(this); event.preventDefault();"></a></td>
                        <td id="IntheCrew"><a href="Selection.php"><img id='C2' style="height: 300px; width: 300px" src="empty" alt="Crew Member 2" onclick="resetImage(this); event.preventDefault();"></a></td>
                        <td id="IntheCrew"><a href="Selection.php"><img id='C3' style="height: 300px; width: 300px" src="empty" alt="Crew Member 3" onclick="resetImage(this); event.preventDefault();"></a></td>
                        <td id="IntheCrew"><a href="Selection.php"><img id='C4' style="height: 300px; width: 300px" src="empty" alt="Crew Member 4" onclick="resetImage(this); event.preventDefault();"></a></td>
                    </tr>
                </table>
                <input type="submit" id="Submit" value="submit" onclick="validateAndBlastOff()">
            </div>

            <p>SELECT YOUR CREW MEMBERS!</p>
            <table style="width:100%">
                <tr>
                    <td><a href="Selection.php"><img id="Person1" style="height: 300px; width: 300px" src="images/TylerImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person2" style="height: 300px; width: 300px" src="images/ColbyImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person3" style="height: 300px; width: 300px" src="images/GrantImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person4" style="height: 300px; width: 300px" src="images/JordanImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                </tr>
                <tr>
                    <td><a href="Selection.php"><img id="Person5" style="height: 300px; width: 300px" src="images/TylerImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person6" style="height: 300px; width: 300px" src="images/ColbyImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person7" style="height: 300px; width: 300px" src="images/JordanImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                    <td><a href="Selection.php"><img id="Person8" style="height: 300px; width: 300px" src="images/ColbyImage.jpg" onclick="sendToCrew(this.src); event.preventDefault();"></a></td>
                </tr>
            </table>
        </body>
    </html>
