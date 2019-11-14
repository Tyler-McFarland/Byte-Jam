function ChangeText(){
  var label = ["Ideal First Date", "Ideal Job", "Ideal Hobby"];
  var rb1 = ["Theater", "Playwriter", "Picking Flowers"];
  var rb2 = ["Dinner Date", "Store Clerk", "Wood Carving"];
  var rb3 = ["Robbing a Restaurant", "I don't need no job", "Starting fights in a bar"];

  if (document.getElementById('RadioText1').innerHTML === 'Q1') {
    document.getElementById('Question').innerHTML = label[0];
    document.getElementById('RadioText1').innerHTML = rb1[0];
    document.getElementById('RadioText2').innerHTML = rb2[0];
    document.getElementById('RadioText3').innerHTML = rb3[0];
  }
  else {
    if (document.getElementById('RadioText1').innerHTML === rb1[0]) {
      document.getElementById('Question').innerHTML = label[1];
      document.getElementById('RadioText1').innerHTML = rb1[1];
      document.getElementById('RadioText2').innerHTML = rb2[1];
      document.getElementById('RadioText3').innerHTML = rb3[1];
    }
    else {
      if (document.getElementById('RadioText1').innerHTML === rb1[1]) {
        document.getElementById('Question').innerHTML = label[2];
        document.getElementById('RadioText1').innerHTML = rb1[2];
        document.getElementById('RadioText2').innerHTML = rb2[2];
        document.getElementById('RadioText3').innerHTML = rb3[2];
      }
      else {
        if (document.getElementById('RadioText1').innerHTML === rb1[2]) {
          $.ajax({
            type: "POST",
            url: 'PHP/insertAttribute.php',
            data: {AttributePoints : document.getElementById('selection').value},
            error: function(xhr, ajaxOptions, thrownError) {
              console.log(xhr.status);
            },
            success: function(response)
            {
              console.log(response)
              window.location.replace("SelectionV2.php")
            }
          });
        }
      }
    }
  }

    document.getElementById('Rb1').checked = true;

}

function ValidateEntry(){
  var numberSelected = 0

  if (document.getElementById('Rb1').checked === true) {
    numberSelected = 1;
  }
  else if (document.getElementById('Rb2').checked === true) {
    numberSelected = 5;
  }
  else if (document.getElementById('Rb3').checked === true) {
    numberSelected = 10;
  }
  let value = document.getElementById('selection').value;
  let number = parseInt(value, 10);
  number = number + numberSelected;
  if (isNaN(number)){
    number = 1;
  }
  document.getElementById('selection').value = number;
  console.log(document.getElementById('selection').value);
}
