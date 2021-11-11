<?php
include('connect.php');

if(isset($_POST['add-user'])){
    $ID=$_POST['ID'];
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone_no'];
    $pass=$_POST['password'];
$hashed=hash('sha512',$pass);

    $query="insert into customer_details (ID,first_name,last_name,address,email,phone_no,password)
    values ('$ID', '$f_name', '$l_name', '$address', '$email','$phone','$hashed')" ;

    $mysqli->query($query) or die($mysqli->error);

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
        <h3>Create account</h3>
        <label for="ID">Customer ID:</label>
    <input type="text" id="ID" name="ID"
    placeholder="e.g 12345 ">
        <br><br>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"
    placeholder="e.g Yusuf ">
    
    <br><br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"
    placeholder="e.g Ali">
    <br><br>
    <label for="adress">customer address:</label>
    <input type="text" id="address" name="address"
    placeholder="naironi west">
    <br><br>
    <label for="email">Email:</label>
    <input type="Email" id="email" name="email"
    placeholder="Yusuf.Ali@gmail.com">

  

    <br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="password"
    >

    <br><br>
    <label for="phone">Phone number:</label>
    <input type="tel" id="phone " name="phone_no"
    placeholder="0712345678">
    <br><br>


    <input type ="reset">

    <button type="submit" name="add-user">create</button> 

   <p>if you already have an account click here  <a href="User Log in .html" >sign in</a> </p>

    </form>
   <?php include_once("footer.php"); ?>
</body>
</html>