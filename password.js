

$(function () {
    
 var mayus = new RegExp ("^(?=.*[A-Z].*[A-Z])");
 var numbers = new RegExp ("^(?=.*[0-9].*[0-9])");
 var lower = new RegExp ("^(?=.*[a-z])");
 var len = new RegExp ("^(?=.{8,})");

var regExp = [mayus, numbers, lower, len];
var elementos = [$("#mayus"),$("#numbers"),$("#lower"),$("#len")];

$("#password").on("keyup", function () {
    var pass = $("#password").val();
    var check =0;
    for(var i =0; i<4; i++){
        if(regExp[i].test(pass)){
            elementos[i].hide();
            check++;
        }else{
            elementos[i].show();
        }
    }

    if(check >= 0 && check <=2){
        $("#mensaje").text("Insegura").css("color","red");
    }else if (check == 3) {
        $("#mensaje").text("Media").css("color","orange");
    }else if (check == 4) {
        $("#mensaje").text("Segura").css("color","green");
    }
});



});