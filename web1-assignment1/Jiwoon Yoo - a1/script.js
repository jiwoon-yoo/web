var comScore = 0;
var userScore = 0;


do{
    var userMove;
    do{
        userMove = prompt("Press 1 for ROCK. Press 2 for PAPER. Press 3 for SCISSOR");
    }while(isNaN(userMove));
    while(!(parseInt(userMove) == 1 || parseInt(userMove) == 2 || parseInt(userMove) == 3)){
        userMove = prompt("Press 1 for ROCK. Press 2 for PAPER. Press 3 for SCISSOR");
    }
    
    
    userMove = parseInt(userMove);
    if(userMove == 1){
        alert("you pick ROCK");
    }else if(userMove == 2){
        alert("you pick PAPER");
    }else if(userMove == 3){
        alert("you picks SCISSOR");
    }
    

    var comMove; 
    comMove = Math.floor(Math.random()*3 + 1); 
    if(comMove == 1){
        alert("computer picks ROCK");
    }else if(comMove == 2){
        alert("computer picks PAPER");
    }else if(comMove == 3){
        alert("computer picks SCISSOR");
    }
    

    //result
    if(userMove == 1){
        if(comMove == 1){
            alert("it's tied");
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 2){
            alert("computer win");
            comScore++;
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 3){
            alert("you win");
            userScore++; 
            alert("You : " + userScore + " Computer : " + comScore);
        }
    }else if(userMove == 2){
        if(comMove == 1){
            alert("you win");
            userScore++;
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 2){
            alert("it's tied");
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 3){
            alert("computer wins"); 
            comScore++;
            alert("You : " + userScore + " Computer : " + comScore);
        }
    }else if(userMove == 3){
        if(comMove == 1){
            alert("computer wins");
            comScore++;
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 2){
            alert("you win");
            userScore++;
            alert("You : " + userScore + " Computer : " + comScore);
        }else if(comMove == 3){
            alert("it's tied");
            alert("You : " + userScore + " Computer : " + comScore);
        }
    }
    
    var answer = confirm("you want to play again?");
}while(answer == true);

alert("Final Score : " + "You : " + userScore + " Computer : " + comScore);
if(userScore > comScore){
    alert("You win!!");
}else if(userScore < comScore){
    alert("Computer wins!!");
}else{
    alert("it's tied!!")
}





