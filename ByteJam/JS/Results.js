function vicStart(){
	$.ajax({
		type: "POST",
		url: 'PHP/getAlignment.php',
		success: function(data){
			Vic(data);
		}
	});
}

function failStart() {
	$.ajax({
		type: "POST",
		url: 'PHP/getAlignment.php',
		success: function(data){
			Fail(data);
		}
	});
}


function Vic(QalignmentPHP){
	$.ajax({
		type: "POST",
		url: 'PHP/inputWin.php',
		success: function(data){
			console.log(data);
		}
	});
			let resultsVic = ["You won and are very wealthy!", "You call out a no good cheat to a duel. You take three paces and DRAW. The Cheat shot early and fired high, You got the dirty chisler right between the eyes!", "I reckon you hooked them clean!"];

			switch(QalignmentPHP){
				case "good":
					document.getElementById("ResultLabel").innerHTML = resultsVic[1];
					break;
				case "neutral":
					document.getElementById("ResultLabel").innerHTML = resultsVic[0];
					break;
				case "bad":
					document.getElementById("ResultLabel").innerHTML = resultsVic[2];
					break;
			}
}

function Fail(QalignmentPHP){
	$.ajax({
		type: "POST",
		url: 'PHP/inputFail.php',
		success: function(data){
			console.log(data);
		}
	});
			var resultsFail = ["Dang that dirty nibbler got away!", "You call out a no good cheat to a duel. You take three paces and DRAW. The Cheat shot early, You're a goner. ", "To the hoosegow you go, you dirty nibbler"];
			switch(QalignmentPHP){
				case "good":
					document.getElementById("ResultLabel").innerHTML = resultsFail[0];
					break;
				case "neutral":
					document.getElementById("ResultLabel").innerHTML = resultsFail[1];
					break;
				case "bad":
					document.getElementById("ResultLabel").innerHTML = resultsFail[2];
					break;
			}
}
function index(){
	document.location.href = "Index.php";
}
