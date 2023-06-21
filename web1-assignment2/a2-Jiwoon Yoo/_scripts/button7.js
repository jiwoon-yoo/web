//meter to feet
var anchor = document.getElementById("b7");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 3.28084 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p7");
    content.innerHTML = res + "feet";   
}