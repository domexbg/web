var users = ["rostislav", "krasi", "zahari", "petar"];

function validate() {
    validateUser();
    validatePassword();
}

function reset() {
    document.getElementById("validateMessage").innerHTML = "";
    document.getElementById("validateMessage").style.color = "black";
    document.getElementById("userdiv").style.borderColor = "white";
    document.getElementById("pwdMessage").innerHTML = "";
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
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролите не съвпадат!";
        return false;
    }
    if (pwd.length < 8) {
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролата трябва да съдържа поне 8 символа!";
        return false;
    }
    if (!(pwd.search(/!/) > 0 || pwd.search(/@/) > 0 || pwd.search(/#/) > 0 || pwd.search(/\$/) > 0 
	|| pwd.search(/\%/) > 0 || pwd.search(/\^/) > 0 || pwd.search(/&/) > 0 || pwd.search(/\*/) > 0 
	|| pwd.search(/\(/) > 0 || pwd.search(/\)/) > 0 || pwd.search(/\+/) > 0 || pwd.search(/\{/) > 0 
	|| pwd.search(/\}/) > 0 || pwd.search(/\?/) > 0 || pwd.search(/</) > 0 || pwd.search(/>/) > 0 
	|| pwd.search(/\./) > 0 || pwd.search(/\,/) > 0)) {
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролата трябва да съдържа поне един специален символ!";
        return false;
    }
	if (pwd.search(/[a-z]/) <0) {
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролата трябва да съдържа поне една малка буква!";
        return false;
    }
    if (pwd.search(/[A-Z]/) <0) {
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролата трябва да съдържа поне една главна буква!";
        return false;
    }
    if (pwd.search(/\d/) <0) {
        document.getElementById("pwdMessage").style.color = "red";
        document.getElementById("pwdMessage").innerHTML = "Паролата трябва да съдържа поне една цифра!";
        return false;
    }
    return true;
}