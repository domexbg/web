function validateEmail(email_box) {
    var x = email_box.value;
	var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		email_box.style.background = '#FE9898';
        //alert("Not a valid e-mail address")//;
        return false;
    }
	return true;
}
function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');     

   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = '#FE9898';
		return false;		
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        fld.style.background = '#FE9898';
		return false;
    } else if (!(stripped.length >=6 && stripped.length <=14)) {
        error = "The phone number is the wrong length. Make sure you included an area code.\n";
        fld.style.background = '#FE9898';
		return false;
    } 
    return true;
}