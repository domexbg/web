$(document).ready(function () {
    $(".div_class").each(function () {
        var colors = ["red", "green", "blue", "yellow", "orange", "black", "purple", "violet", "pink", "lightgreen", "brown", "grey", "darkgrey", "lightblue", "beige"];
        var rand = Math.floor(Math.random() * (colors.length));
        var i = 1;
        for (i = 1; i < 4; i++) {
            $(this).css("borderColor", colors[rand + i]);
        }
    });
});