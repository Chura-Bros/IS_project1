<?php
session_start();
$conn=mysqli_connect('localhost','root','','churabros')

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
              <li><a href="Admin log in.html" >Admin</a></li> 
              <li><a href="Cart.html" ><i class="fa fa-shopping-cart" style="font-size:24px"></i></a></li> 

             </ul>
        </nav>
    </header>
   
    <br><br>

    <form action="User Log in.php"method="post"> 
        <h3>User Login</h3>
 
    <label for="email">Email Address:</label>
    <input type="Email" id="email" name="email"
    placeholder="Yusuf.Ali@gmail.com">
    
 
    <br><br>
   
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass">
    <br><br>
  

    <input type ="reset">

    <button type="submit" name="login">Log in:</button> 

   <p>If you dont have an account click here <a href="create account.html" >Create account</a> </p>

    </form>

    <?php
    if(isset($post['login'])){
        $email=$_post['email'];
        $pass=$_post['pass'];

        $select=mysqli_query($conn,"SELECT*FROM customer_details WHERE email='$email' AND pass ='$pass'");
        $row=mysqli_fetch_array($select);
        
        
        if(is_array($row)){

            $_SESSION["email"]=$row['email'];
            $_SESSION["pass"]=$row['pass'];
        }else{
            echo'<script type="text/javascript>';
            echo 'alert("invalid email or password")';
            echo'window.location.href= "User Log in.php"';
            echo'</script>';
        }
    }
    if(isset($_SESSION["email"])){
        header("location:UI.php");
    }

    ?>
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