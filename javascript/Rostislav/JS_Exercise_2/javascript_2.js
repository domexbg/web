$(document).ready(function () {
    $("#btn").click(function () {
        var txt = $("#tekst").val();
        if (txt.length < 5) {
            $("#tekst").css("color", "red");
        }
        if (txt.length >= 5) {
            $("#tekst").css("color", "green");
        }
    });
});