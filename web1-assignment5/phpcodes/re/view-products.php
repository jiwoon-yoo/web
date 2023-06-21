<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color: #4CAF50;
                color: white;
            }

            h2, h3
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Database Connectivity Example</h1>

            <a href="index.php">Home</a> | 
            <a href="register.php">Register</a> | 
            <a href="logout.php">Logout</a> |

            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>| 
            
  
            <hr>

            <h2>View Products</h2>

            

                <?php
                // connect with database
                $host = 'localhost';        // database server name
                $user = 'yoojiw_user1';      // your database username
                $pswd = 'user1user1user1';      // your database password
                $dbName = 'yoojiw_practice';        // database name

                $conn = mysqli_connect($host, $user, $pswd, $dbName);

                // if connection wasn't established
                if (empty($conn))
                {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }


                // query to select data from table
                $query = "SELECT * FROM product";

                // execute the query
                $result = mysqli_query($conn, $query);

                // check if some rows were fetched
                if (mysqli_num_rows($result) > 0) 
                {    
                    // print table and header row
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Product Name</th>";
                    echo "<th>Product Price</th></tr>";
                    
                    $i = 1;     // to print the # of each row
                    
                    // loop through all the rows of the fetched data
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$i</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['product_price'] . "</td></tr>";

                        $i++;
                    }
                    
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }
                ?>
        </div>
    </body>
</html>
