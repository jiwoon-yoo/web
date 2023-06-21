<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Horton's Orders</title>
</head>

<body>
    
    <img src="_images/logo-en.jpg" id="img1">

    
    <h1 id="header1">Welcome to Time Horton's</h1>
    <div id="div1">
        <form action="order.php" method="post">
            <h4 id="header2">Give us some numbers... </h4>    
            <br>
            Number of Coffees: <input type="number" min="1" step="1" name="coffeeNum"></label><br>
            Size:              
            <select name="coffeeSize">
                <option value="small">small</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
                <option value="extra-large">extra-large</option>
            </select>
            <br>
            How many creams? <input type="number" min="0" step="1" name="creamNum">
            <br>
            How many sugars? <input type="number" min="0" step="1" name="sugarNum">
            <br>
            <input type="submit" value="Order Coffee">
        </form>
    </div>
    
    <br><br><br><br>

    <table id="table1" >
    <tr>
        <td><h3>coffee price</h3></td>
    </tr>
    <tr>
        <td>
            small:2 dollar <br>
            medium:3 dollar <br>
            large:4 dollar <br>
            extra-large: 5 dollar <br>
            (cream and sugar are free) <br>
        </td>
    </tr>
    </table>


    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>    
    

</body>
</html>