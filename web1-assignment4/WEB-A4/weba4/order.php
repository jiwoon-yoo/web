<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Horton's Orders</title>
</head>

<body>
    <h1 id="header3">Thanks for your order. Here it is:</h1>  
    <?php
    //get the data from form 
    $coffeeNum = $_REQUEST['coffeeNum']; 
    $coffeeSize = $_REQUEST['coffeeSize'];  //
    $creamNum = $_REQUEST['creamNum'];
    $sugarNum = $_REQUEST['sugarNum'];
    $smallCost = 2; 
    $smallCostFormatted = number_format($smallCost, 2); 
    $mediumCost = 3;
    $mediumCostFormatted = number_format($mediumCost, 2); 
    $largeCost = 4;
    $largeCostFormatted = number_format($largeCost, 2); 
    $extraLargeCost = 5;
    $extraLargeCostFormatted = number_format($extraLargeCost, 2); 

    //calculate 
    if($coffeeSize == "small"){
        $totalCost = $smallCost * $coffeeNum * 1.13;  
        for($i = 1; $i <= $coffeeNum; $i++){
            echo "<div class='div2'>"; 
            echo "<img src='_images/cup.jpg' id='img2'>";
            
            if($creamNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $creamNum; $j++){
                    echo "<img src='_images/cream.jpg'>";
                } 
            }
        
            if($sugarNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $sugarNum; $j++){
                    echo "<img src='_images/sugar.jpg'>";
                } 
            }

            echo "</div>";
        }
        echo "Cost: \$$smallCostFormatted x $coffeeNum + tax = $".number_format($totalCost, 2);
       
    }else if($coffeeSize == "medium"){
        $totalCost = $mediumCost * $coffeeNum * 1.13; 

        for($i = 1; $i <= $coffeeNum; $i++){
            echo "<div class='div2'>"; 
            echo "<img src='_images/cup.jpg' id='img3'>";
            
            if($creamNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $creamNum; $j++){
                    echo "<img src='_images/cream.jpg'>";
                } 
            }
        
            if($sugarNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $sugarNum; $j++){
                    echo "<img src='_images/sugar.jpg'>";
                } 
            }

            echo "</div>";
        }
        echo "Cost: \$$mediumCostFormatted x $coffeeNum + tax = $".number_format($totalCost, 2);
    }else if($coffeeSize == "large"){
        $totalCost = $largeCost * $coffeeNum * 1.13; 

        for($i = 1; $i <= $coffeeNum; $i++){
            echo "<div class='div2'>"; 
            echo "<img src='_images/cup.jpg' id='img4'>";
            
            if($creamNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $creamNum; $j++){
                    echo "<img src='_images/cream.jpg'>";
                } 
            }
        
            if($sugarNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $sugarNum; $j++){
                    echo "<img src='_images/sugar.jpg'>";
                } 
            }

            echo "</div>";
        }
        echo "Cost: \$$largeCostFormatted x $coffeeNum + tax = $".number_format($totalCost, 2);
    }else{
        $totalCost = $extraLargeCost * $coffeeNum * 1.13; 

        for($i = 1; $i <= $coffeeNum; $i++){
            echo "<div class='div2'>"; 
            echo "<img src='_images/cup.jpg' id='img5'>";
            
            if($creamNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $creamNum; $j++){
                    echo "<img src='_images/cream.jpg'>";
                } 
            }
        
            if($sugarNum != 0){
                echo "<img src='_images/plus.jpg'>";
                for($j = 1; $j <= $sugarNum; $j++){
                    echo "<img src='_images/sugar.jpg'>";
                } 
            }

            echo "</div>";
        }
        echo "Cost: \$$extraLargeCostFormatted x $coffeeNum + tax = $".number_format($totalCost, 2);
    }

    ?>

    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>    

</body>
</html>