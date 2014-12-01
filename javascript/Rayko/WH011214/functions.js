function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function Big_text(){
	var c=getRandomColor();
	document.getElementById("demo").innerHTML =document.getElementById("i1").value+ ' '+c; 
	document.getElementById("demo" ).style.fontSize = 1000 + "%";
	document.getElementById("demo" ).style.color =c;
}