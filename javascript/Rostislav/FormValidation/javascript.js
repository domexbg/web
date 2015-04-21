var users = ["rostislav", "krasi", "zahari", "petar"];
var userValue = document.getElementById("user").value;

function validate() {
    console.log(userValue);
    var i = 0;
    for (i = 0; i < users.length; i++)
    if (userValue === users[i]) {
        document.getElementById("userdiv").style.border = "2px dashed red";
        document.getElementById("validateMessage").style.color = "red";
        document.getElementById("validateMessage").innerHTML = "Потребителят вече съществува!";
    } else {
        document.getElementById("validateMessage").style.color = "green";
        document.getElementById("validateMessage").innerHTML = "Потребителското име е свободно.";
    }

}