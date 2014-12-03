
$(function() {
$('#hide1').click( function() {
  $('#p1').toggle(function(){
	if ($('#p1').is(':visible')) {
	 $('#hide1').val('Hide text 1') 
	} else {
		$('#hide1').val('Show text 1') 
	  }
    });
  });
});
$(function() {
$('#hide2').click( function() {
  $('#p2').toggle(function(){
	if ($('#p2').is(':visible')) {
	 $('#hide2').val('Hide text 2') 
	} else {
		$('#hide2').val('Show text 2') 
	  }
    });
  });
});
$(function() {
$('#hide3').click( function() {
  $('#p3').toggle(function(){
	if ($('#p3').is(':visible')) {
	 $('#hide3').val('Hide text 3') 
	} else {
		$('#hide3').val('Show text 3') 
	  }
    });
  });
});



function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function changeColor(){
	
	var c=getRandomColor();
	document.getElementById("p1").style.borderColor=c;
	document.getElementById("p2").style.borderColor=c;
	document.getElementById("p3").style.borderColor=c;
	
}


