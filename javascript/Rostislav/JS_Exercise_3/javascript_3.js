$(document).ready(function clrs() {
    var colors1 = ["yellow", "pink", "lightgreen", "lightblue", "beige"];
    var colors2 = ["red", "green", "blue", "violet", "grey"];
    var colors3 = ["black", "purple", "brown", "darkgrey", "darkblue"];
    var rand = Math.floor(Math.random() * 5);
    $("#div1").css("borderColor", colors1[rand]);
    $("#div2").css("borderColor", colors2[rand]);
    $("#div3").css("borderColor", colors3[rand]);
});

$(document).ready(function divs() {
    $("#div1 > p").hover(function () {
        $(this).html("Changed Text 1");
    }, function () {
        $(this).html("Initial Text 1");
    });
    $("#div2 > p").click(function () {
        $(this).html("Changed Text 2");
    });
    $("#div2 > p").mouseout(function () {
        $(this).html("Initial Text 2");
    });
    $("#div3 > p").dblclick(function () {
        $(this).html("Changed Text 3");
    });
    $("#div3 > p").mouseout(function () {
        $(this).html("Initial Text 3");
    });
});

$(document).ready(function btns() {
    $("#btn1").click(function () {
        $("#div1").toggle();
        $("#btn1").html($("#btn1").text() == 'Show1' ? 'Hide1' : 'Show1');
    });
    $("#btn2").click(function () {
        $("#div2").toggle();
        $("#btn2").html($("#btn2").text() == 'Show2' ? 'Hide2' : 'Show2');
    });
    $("#btn3").click(function () {
        $("#div3").toggle();
        $("#btn3").html($("#btn3").text() == 'Show3' ? 'Hide3' : 'Show3');
    });
});