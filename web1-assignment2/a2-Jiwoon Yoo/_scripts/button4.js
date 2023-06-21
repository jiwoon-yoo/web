//Meters to centimeter
var anchor = document.getElementById("b4");

anchor.onclick = function(){
    var inputVal = document.getElementById("textbox").value;
    var res = Math.round((inputVal * 100 + Number.EPSILON) * 100) / 100;
    var content = document.getElementById("p4");
    content.innerHTML = res + "cm"; 
}