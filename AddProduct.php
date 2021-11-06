<?php
<<<<<<< HEAD
include 'connect.php';
if(isset($_post['submit'])){
$ID=$_POST['product_ID'];
$name=$_POST['product_name'];
$price=$_POST['product_price'];
$qty=$_POST['product_qty'];
$desc=$_POST['product_desc'];


$sql="insert into 'product_details'(product_ID,product_name,product_price,product_qty,product_desc)
values ('$name','$ID','$qty','$desc','$price')" ;
$result=mysqli_query($con,$sql);
if($result){
    echo"Data inserted successfully";
}else{
    die(mysqli_error($con));
}
=======
include('connect.php');

if(isset($_POST['add-product'])){
    $ID=$_POST['product_ID'];
    $name=$_POST['product_name'];
    $price=$_POST['product_price'];
    $qty=$_POST['product_qty'];
    $desc=$_POST['product_desc'];

    $query="insert into product_details (product_ID,product_name,product_price,product_qty,product_desc)
    values ('$ID', '$name', '$price', '$qty', '$desc')" ;

    $mysqli->query($query) or die($mysqli->error);

>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
=======
 
>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
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
<<<<<<< HEAD
    <header>
        
        <nav>
           
        
            <ul>
                <ul>
                    <li><a href="UI.html" ><h2>ChuraBros Store</h2></a></li>
              <li><a href="UI.html" >Home</a></li>
              <li><a href="User Log in .html" >Log in </a></li>
              <li><a href="Cart.html" >Cart</a></li> 
              <li><a href="Admin log in.html" >Admin</a></li> 
=======
    <header>        
        <nav>      
            <ul>                
                <li><a href="UI.html" ><h2>ChuraBros Store</h2></a></li>
                <li><a href="UI.html" >Home</a></li>
                <li><a href="User Log in .html" >Log in </a></li>
                <li><a href="Cart.html" >Cart</a></li> 
                <li><a href="Admin log in.html" >Admin</a></li> 
>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
             </ul>
        </nav>
    </header>
       
        <br><br>
<<<<<<< HEAD
    <form method="post"> 
=======
    <form method="POST" action=""> 
>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
        <h3>Add product </h3>
        <label for="Product_ID">Product ID:</label>
        <input type="text" id="product_ID" name="product_ID"
        placeholder="product ID ">
        
        
        <br><br>
        <label for="Product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name"
        placeholder="product Name ">
        <br><br>
        <label for="price">Product Price:</label>
        <input type="text" id="product_price" name="product_price"
        placeholder="product price ">
       
        <br><br>
        <label for="QTY">Product Quantity:</label>
        <input type="text" id="product_Quantity" name="product_qty"
        placeholder="product Quantity ">
    
        <br><br>
        <label for="Product_description">Product description:</label>
        <input type="text" id="Product_description" name="product_desc"
<<<<<<< HEAD
        placeholder="product description ">
    
        <br><br>
     

        <button type="submit" class="btn"name="ADD">ADD </button>
=======
        placeholder="product description ">    
        <br><br>  
        <button type="submit" name="add-product">Add</button> 
       
>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
    </form>
</body>
 </html>