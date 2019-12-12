// JavaScript source code
function addpokemon() {

    window.location.href = "addpokemon.php"
}


function get_started(){
  var x = document.getElementById("list").selectedIndex;
var action = document.getElementsByTagName("option")[x].value;
console.log("here");
document.getElementById("search_form").action = action;
document.getElementById("search_form").submit();
}