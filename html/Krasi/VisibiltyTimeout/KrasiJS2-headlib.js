function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
function ChangeDate() { document.getElementById("demo").innerHTML=Date(); document.getElementById("demo").style.color = "black"};
function ChangeColor() { document.getElementById("demo").style.color = "blue"};
function ChangeFontSize300() { document.getElementById("demo").style.fontSize = "300%"};
function ChangeFontSize100() { document.getElementById("demo").style.fontSize = "100%"};
function HideText() { document.getElementById("demo").style.visibility = "hidden" };
function ShowText() { sleep(100); document.getElementById("demo").style.visibility = "visible"};
