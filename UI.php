<?php
session_start();
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
        <li><a href="Admin log in.html" >Admin</a>
        <li>Welcome<?php echo $_SESSION ["email"]; ?></li>
        
        </li> 

       </ul>
        </nav>
    </header>
    
  <div class ="container">
      <div class="image">
          <img src="./Photos/HRX socks.jpg" alt="thisirt1">
          <h4>HRX socks</h4>
        <p>KSH 1,000</p> 
         <a class="add-cart cart1"href="#"> Add Cart</a>
    </div>
    <div class="image">
        <img src="./Photos/Roadstar Shoes jpg.jpg" alt="thisirt1">
        <h4>road star shoes </h4>
      <p>KSH 6,000</p> 
       <a class="add-cart "href="#"> Add Cart</a>
       
  </div>
  <div class="image">
    <img src="./Photos/Black reebok shoes .jpg" alt="thisirt1">
    <h4>reebok shoes </h4>
  <p>KSH 7,000</p> 
   <a class="add-cart "href=""> Add Cart</a>
   
</div>
<div class="image">
    <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
    <h4>Fossil watch</h4>
  <p>KSH 11,000</p> 
   <a class="add-cart "href="#"> Add Cart</a>
   
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
<div class="image">
  <img src="./Photos/Fossil watch .jpg" alt="thisirt1">
  <h4>Fossil watch</h4>
<p>KSH 11,000</p> 
 <a class="add-cart "href="#"> Add Cart</a>
 
</div>
  </div>  

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