<?php
include 'connect.php';


$query="(SELECT * FROM product_details)" ;

$result = $mysqli->query($query) or die($mysqli->error);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <title>Document</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
        <nav>
           
        
            <ul>
              <li><a href="UI.html" ><h2>ChuraBros Store</h2></a></li>
        <li><a href="UI.html" >Home</a></li>
        <li><a href="User Log in .html" >Log in </a></li>
        <li><a href="Cart.html" >Cart</a></li> 
        <li><a href="Admin log in.html" >Admin</a></li> 
       </ul>
        </nav>
    </header>
    <div class="button">
        <a href="./AddProduct.php">Add product</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name </th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Description</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
              <?php
          
              if($result){
                $ID=0;
                $name="";
                $price=0;
                $qty=0;
                $desc="";
               while($row=mysqli_fetch_assoc($result)) {
                $ID=(int)$row['product_ID'];
                $name=$row['product_name'];
                $price=$row['product_price'];
                $qty=$row['product_qty'];
                $desc=$row['product_desc'];
                echo '<tr>
                <td>'.$ID.'</td>
                <td>'.$name.'</td>
                <td> '.$price.'</td>
                <td> '.$qty.'</td>
                <td> '.$desc.'</td>
                <td>
                  <button type="submit" name="update"><a href="./updateProduct.php?product_ID="'.$ID.'>Update<a></button>
                 <button type="submit" name="delete"><a href="./deleteProduct.php?product_ID="'.$ID.'>Delete<a></button>
                </td>
              </tr>';
               }
                
              }

              ?>        
             
            </tbody>
          </table>
    </div>
</body>
</html>