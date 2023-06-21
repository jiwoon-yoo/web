//centimeter to inches

var anchor = document.getElementById("b1");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 0.393701 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p1");
    content.innerHTML = res + "inches";
}


