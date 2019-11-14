
var pageImages = [];
var crewImages = [];
function returnData(returnData){
	var UserScore = parseInt(returnData, 10);
  loadImages(UserScore);
	console.log("UserScore: " + UserScore);
}

function loadScore(){
  $.ajax({
    type: "POST",
    url: 'PHP/getUserScore.php',
    error: function(xhr, ajaxOptions, thrownError) {
      console.log(xhr.status);
    },
    success: returnData
  });
}

function loadImages(UserScore){
	if (UserScore >= 3 && UserScore <=11) {
		document.getElementById('Person1').src = "Images/1.jpg";
		document.getElementById('Person2').src = "Images/2.jpg";
		document.getElementById('Person3').src = "Images/3.jpg";
		document.getElementById('Person4').src = "Images/4.jpg";
		pageImages = [1,2,3,4];
	}
	else if (UserScore >= 15 && UserScore <= 20) {
			document.getElementById('Person1').src = "Images/5.jpg";
			document.getElementById('Person2').src = "Images/6.jpg";
			document.getElementById('Person3').src = "Images/7.jpg";
			document.getElementById('Person4').src = "Images/8.jpg";
			pageImages = [5,6,7,8];
	}
	else if (UserScore >= 21 && UserScore <= 30) {
		document.getElementById('Person1').src = "Images/9.jpg";
		document.getElementById('Person2').src = "Images/10.jpg";
		document.getElementById('Person3').src = "Images/11.jpg";
		document.getElementById('Person4').src = "Images/12.jpg";
		pageImages = [9,10,11,12];
	}
  for (var i = 5; i < 9; i++) {
    let randomNumber = getRandomNumber();
    document.getElementById('Person' + i).src = "Images/" + randomNumber + ".jpg";
  }
}

function getRandomNumber(){
  let goodNumber = false

  while (goodNumber === false) {
    var randomNumber = Math.ceil(Math.random() * 20);
    if (pageImages.includes(randomNumber)) {
      getRandomNumber();
    }
    else {
      pageImages.push(randomNumber);
      goodNumber = true;
    }
  }
  return randomNumber;
}

function sendToCrew(clickedImage){

  if(document.getElementById('C1').src === "http://localhost/ByteJam/empty"){
		crewImages.push(clickedImage);
    document.getElementById('C1').src = clickedImage;
  }
  else if (document.getElementById('C2').src === "http://localhost/ByteJam/empty") {
		if (crewImages.includes(clickedImage.src)) {
			alert('Outlaw already selected');
		}
		else {
			crewImages.push(clickedImage);
			document.getElementById('C2').src = clickedImage;
		}
  }
  else if (document.getElementById('C3').src === "http://localhost/ByteJam/empty") {
		if (crewImages.includes(clickedImage.src)) {
			alert('Outlaw already selected');
		}
		else {
			crewImages.push(clickedImage);
		 	document.getElementById('C3').src = clickedImage;
		}
  }
  else if (document.getElementById('C4').src === "http://localhost/ByteJam/empty") {
		if (crewImages.includes(clickedImage)) {
			alert('Outlaw already selected');
		}
		else {
			crewImages.push(clickedImage);
			document.getElementById('C4').src = clickedImage;
		}
  }
	else {
		alert('Max outlaws selected, click on one of your crew to remove them');
	}
}

function splitString(stringToSplit){
  let stringWithJPG = stringToSplit.substring(32);
  let finaString = stringWithJPG.replace('.jpg', '');
  return finaString;
}

function resetImage(clickedImage){
	let split = splitString(clickedImage.src);
	let index = crewImages.indexOf(splitString);
	crewImages.splice(index, 1);

  clickedImage.src = "http://localhost/ByteJam/empty";
}


function validateAndBlastOff(){
  let empty = "http://localhost/ByteJam/empty"
  if (document.getElementById('C1').src !== empty && document.getElementById('C2').src !== empty && document.getElementById('C3').src !== empty && document.getElementById('C4').src !== empty) {
    let c1Final = splitString(document.getElementById('C1').src);
    let c2Final = splitString(document.getElementById('C2').src);
    let c3Final = splitString(document.getElementById('C3').src);
    let c4Final = splitString(document.getElementById('C4').src);
    $.ajax({
      type: "POST",
      url: 'PHP/insertOutlaws.php',
      data: {C1 : c1Final, C2 : c2Final, C3 : c3Final, C4 : c4Final},
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
      },
      success: function(response)
      {
        window.location = ("MissionWithJSV2.php");
        console.log(response);
      }
    });

  }
  else {
    alert("Must Select 4 Outlaws");
  }
}
