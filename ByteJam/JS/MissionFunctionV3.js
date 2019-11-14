var gangScore;
var selection;

function returnScore(returnScore){
	let Score = parseInt(returnScore, 10);
	if (selection === 1) {
		Catch(Score);
	}
	else if (selection === 2) {
		Cards(Score);
	}
	else if (selection === 3) {
		Rob(Score);
	}
}

function ajaxCall(alignment) {
	$.ajax({
		type: "POST",
		url: 'PHP/insertAlignment.php',
		data: {alignment: alignment},
		success: function(data){
			console.log(data);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(xhr.status);
		}
	});
	$.ajax({
		type: "POST",
		url: 'PHP/getGangName.php',
		success: returnScore
	});
}

var Qalignment;
//var resultsVic = ["Yee-haw, you and (current gang name) caught (gang name/player name)!", "You got the dirty chisler!", "I reckon you and (current gang name) hooked them clean!"];
//var resultsFail = ["Dang that/those dirty (gang name/player name) got away!", "You're a goner!", "To the hoosegow you and (current gang name) go, you dirty nibblers"];
//var QalignmentPHP = "Neutral"; /*Passed in With PHP From Previous page*/

function Cards(gangScore){
	if(gangScore > 45 && gangScore < 113){
		Victory();
	}
	else{
		Defeat();
	}
}
function Catch(gangScore){
	if(gangScore >= 15 && gangScore <= 45){
		Victory();
	}
	else{
		Defeat();
	}
}
function Rob(gangScore){
	if(gangScore >= 113 && gangScore <= 150){
		Victory();
	}
	else{
		Defeat();
	}
}

function Victory(){
	document.location.href = "victory.php";
}

function Defeat(){
	document.location.href = "defeat.php";
}

function EntrySelection(){
	if (document.getElementById('RB1').checked === true) {
		selection = 1;
		Qalignment = "good"; /*Send to PHP*/
		ajaxCall(Qalignment);
		//Catch();
  }
  else if (document.getElementById('RB2').checked === true) {
		selection = 2
		Qalignment = "neutral";
		ajaxCall(Qalignment);
  }
  else if (document.getElementById('RB3').checked === true) {
		selection = 3
		Qalignment = "bad";
		ajaxCall(Qalignment);
  }
}

//Outside of the file now
function CatchText(){
	document.getElementById('RB1').checked = true;
	var TargetName = document.getElementById("iTarName").textContent;
	document.getElementById("Catch").innerHTML = "Catch " + TargetName;
}

function Vic(){
	var TargetName = document.getElementById("iTarName").innerText;
	var QalignmentPHP = document.getElementById("iAlign").innerText;
	var GangName = document.getElementById("iCurGang").innerText;
	var resultsVic = ["Yee-haw, you and "+ GangName +" caught "+ TargetName, "You got the dirty chisler!", "I reckon you and "+ GangName +" hooked them clean!"];

	switch(QalignmentPHP){
		case "Good":
			document.getElementById("ResultLabel").innerHTML = resultsVic[0];
			break;
		case "Neutral":
			document.getElementById("ResultLabel").innerHTML = resultsVic[1];
			break;
		case "Bad":
			document.getElementById("ResultLabel").innerHTML = resultsVic[2];
			break;
	}
}

function Fail(){
	var TargetName = document.getElementById("iTarName").innerText;
	var QalignmentPHP = document.getElementById("iAlign").innerText;
	var GangName = document.getElementById("iCurGang").innerText;
	var resultsFail = ["Dang that/those dirty " + TargetName + "got away!", "You're a goner!", "To the hoosegow you and "+ GangName +" go, you dirty nibblers"];
	switch(QalignmentPHP){
		case "Good":
			document.getElementById("ResultLabel").innerHTML = resultsFail[0];
			break;
		case "Neutral":
			document.getElementById("ResultLabel").innerHTML = resultsFail[1];
			break;
		case "Bad":
			document.getElementById("ResultLabel").innerHTML = resultsFail[2];
			break;
	}
}
