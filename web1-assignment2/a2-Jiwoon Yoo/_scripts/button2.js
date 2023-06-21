//inches to centimeter
var anchor = document.getElementById("b2");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 2.54 + Number.EPSILON) * 100) / 100;;
    var content = document.getElementById("p2");
    content.innerHTML = res + "cm";
}