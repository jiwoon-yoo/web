//Inches to meter
var anchor = document.getElementById("b5");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 0.0254 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p5");
    content.innerHTML = res + "m";
}