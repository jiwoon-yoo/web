//feet to meter
var anchor = document.getElementById("b8");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 0.3048 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p8");
    content.innerHTML = res + "m"; 
}