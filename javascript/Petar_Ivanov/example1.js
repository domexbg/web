element = document.getElementById("PeshoButton");
element2 = document.getElementById("PeshoButton2");
element3 = document.getElementById("PeshoButton3");
element.onclick = function() { document.getElementById("demo").innerHTML=Date(); document.getElementById("demo").style.color = "red"};
element2.onclick = function() { document.getElementById("demo").style.color = "blue"};
element3.onmouseover = function() { document.getElementById("demo").style.fontSize = "300%"};
element3.onmouseout = function() { document.getElementById("demo").style.fontSize = "100%"};