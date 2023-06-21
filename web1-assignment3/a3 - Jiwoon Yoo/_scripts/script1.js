document.form1.onsubmit=function()
{
   return validate();
}


var validate=function()
{  
    var isValid=true;
    //check for error
   
    //Name section validation 
    var name = document.getElementById("textbox1").value;
    var result1 = document.getElementById("result1");
    

    if(name == ""){
        result1.innerHTML = "name is required";
        result1.style.color = "red";
        isValid = false;
    }
    if(name.length < 6 || name.length > 12){
        result1.innerHTML = "Length must be between 6 and 12";
        result1.style.color = "red";
        isValid = false;
    }


    //Password section validation 
    var password = document.getElementById("textbox2").value; 
    var result2 = document.getElementById("result2");
    if(password.length < 6){
        result2.innerHTML = "Must be at least 6 characters long.";
        result2.style.color = "red";
        isValid = false;
    }

    
    //confirm password section validation 
    var passwordForMatch = document.getElementById("textbox3").value;    
    var result3 = document.getElementById("result3");
    if(passwordForMatch !== password){
        result3.innerHTML = "Password and confirm password must match";
        result3.style.color = "red";
        isValid = false;
    }

    

    //address section validation 
    var address = document.getElementById("textbox4").value;
    var result4 = document.getElementById("result4");

    if(address == ""){
        result4.innerHTML = "address is required";
        result4.style.color = "red";
        isValid = false;
    }



    //city section validation 
    var city = document.getElementById("selectCities").value; 
    var result5 = document.getElementById("result5");
    if(city == "1"){
        result5.innerHTML = "Must select one option";
        result5.style.color = "red";
        isValid = false;
    }


    //course section validation 
    var course = document.getElementById("selectCourses").value
    var result6 = document.getElementById("result6");
    if(course == "2"){
        result6.innerHTML = "Must select one option";
        result6.style.color = "red";
        isValid = false;
    }


    return  isValid;
}