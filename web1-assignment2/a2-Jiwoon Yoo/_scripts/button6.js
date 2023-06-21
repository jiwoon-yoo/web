//meter to Inches
var anchor = document.getElementById("b6");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 39.370079 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p6");
    content.innerHTML = res + "inch";  
}