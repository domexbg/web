element = document.getElementById("KrasiButton");
element2 = document.getElementById("KrasiButton2");
element3 = document.getElementById("KrasiButton3");
element.onclick = function() { document.getElementById("demo").innerHTML=Date(); document.getElementById("demo").style.color = "black"};
element2.onclick = function() { document.getElementById("demo").style.color = "blue"};
element3.onmouseover = function() { document.getElementById("demo").style.fontSize = "300%"};
element3.onmouseout = function() { document.getElementById("demo").style.fontSize = "100%"};

