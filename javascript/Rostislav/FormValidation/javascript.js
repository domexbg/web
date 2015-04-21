var users = ["rostislav", "krasi", "zahari", "petar"];
var users = ["rostislav", "krasi", "zahari", "petar"];
var specialchars = "!@#$%^&*()+{}?><,.";

function validate() {
    validateUser();
    validatePassword();
}

function reset() {
    document.getElementById("validateMessage").innerHTML = "";
    document.getElementById("validateMessage").style.color = "black";
    document.getElementById("userdiv").style.borderColor = "white";
}

function validateUser() {
    reset();
    var userValue = document.getElementById("user").value;
    var i = 0;
    console.log(users);
    console.log(userValue);
    if (userValue == "") {
        document.getElementById("validateMessage").innerHTML = "Моля, въведете потребителско име!";
        document.getElementById("userdiv").style.border = "2px dashed red";
        document.getElementById("validateMessage").style.color = "red";
        return false;
    }

    for (i = 0; i < users.length; i++) {
        if (userValue === users[i]) {
            console.log(users[i]);
            document.getElementById("validateMessage").innerHTML = "Потребителят вече съществува!";
            document.getElementById("userdiv").style.border = "2px dashed red";
            document.getElementById("validateMessage").style.color = "red";
            break;
        }
    }
    if (i > 3) {
        document.getElementById("validateMessage").style.color = "green";
        document.getElementById("validateMessage").innerHTML = "Потребителското име е свободно.";
    }
}

function validatePassword() {
    var pwd = document.getElementById("pwd").value;
    var pwd2 = document.getElementById("pwd2").value;
    console.log(pwd);
    console.log(pwd2);
    if (pwd !== pwd2) {
    else if (pwd.length < 8)
    else if ( specialchars )
    else if ( 1x CAPS )
    else if ( 1x small )
    else
    return false;        
    }
}