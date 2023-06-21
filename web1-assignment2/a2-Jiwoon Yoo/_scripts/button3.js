//centimeter to Meters
var anchor = document.getElementById("b3");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 0.01 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p3");
    content.innerHTML = res + "m";  
}