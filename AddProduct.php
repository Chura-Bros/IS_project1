<?php
include('connect.php');

if(isset($_POST['add-product'])){
    $ID=$_POST['product_ID'];
    $name=$_POST['product_name'];
    $price=$_POST['product_price'];
    $qty=$_POST['product_qty'];
    $desc=$_POST['product_desc'];


    $query="insert into product_details (product_ID,product_name,product_price,product_qty,product_desc,)

    values ('$ID', '$name', '$price', '$qty', '$desc')" ;

    $mysqli->query($query) or die($mysqli->error);

    (header("location: productList.php"));

}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
       
        <br><br>
    <form method="POST" action=""> 
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
        placeholder="product description ">    
        <br><br>  
     
        <button type="submit" name="add-product">Add</button> 
       
    </form>
    <footer>
<div class="footer-content ">
<h3>Footer deatails</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rem exercitationem quaerat! Vitae reiciendis nihil fugit dolore eligendi pariatur sunt consequuntur eveniet quod veniam?</p>
<ul class="socials">
<li><a href="#" class="fa fa-facebook"></a></li>
<li><a href="#" class="fa fa-twitter"></a></li>
<li><a href="#" class="fa fa-google-plus"></a></li>
<li><a href="#" class="fa fa-youtube"></a></li>
<li><a href="#" class="fa fa-linkedin"></a></li>
</ul>
</div>
<div class="footer-bottom">
  <p>copyright &copy; 2021 code0pacity. desgined by <span>Yusuf and shawn</span></p>
</div>

  </footer>
</body>
 </html>