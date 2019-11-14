function getWins(){
  $.ajax({
    type: "POST",
    url: 'PHP/getWins.php',
    success: function(data){
      console.log(data);
      getLosses(data);
    }
  });
}

function getLosses(wins){
  $.ajax({
    type: "POST",
    url: 'PHP/getLosses.php',
    success: function(data){
      document.getElementById('wins').innerHTML = wins - 1;
      document.getElementById('losses').innerHTML = data - 1;
    }
  });
}
