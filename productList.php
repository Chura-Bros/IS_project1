<?php
include 'connect.php';
<<<<<<< HEAD


$query="(SELECT * FROM product_details)" ;

$result = $mysqli->query($query) or die($mysqli->error);


=======
>>>>>>> 07d8863d783582f94076e42dedec69c00ff9c786
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
<<<<<<< HEAD
          
              if($result){
                $ID=0;
                $name="";
                $price=0;
                $qty=0;
                $desc="";
               while($row=mysqli_fetch_assoc($result)) {
                $ID=(int)$row['product_ID'];
=======
              $sql="select*from'product_details'";
              // $result=mysqli_query($con,$sql);
             $result= $mysqli->query($sql);

              if($result){
               while($row=mysqli_fetch_assoc($result)) {
                $ID=$row['product_ID'];
>>>>>>> 07d8863d783582f94076e42dedec69c00ff9c786
                $name=$row['product_name'];
                $price=$row['product_price'];
                $qty=$row['product_qty'];
                $desc=$row['product_desc'];
                echo '<tr>
<<<<<<< HEAD
                <td>'.$ID.'</td>
=======
                <td>$'.$ID.'</td>
>>>>>>> 07d8863d783582f94076e42dedec69c00ff9c786
                <td>'.$name.'</td>
                <td> '.$price.'</td>
                <td> '.$qty.'</td>
                <td> '.$desc.'</td>
<<<<<<< HEAD
=======
                <td>
                  <button><a href="">Update<a></button>
                 <button><a href="">Delete<a></button>
                </td>
              </tr>';
               }
                
              }

              ?>
           
            <!-- <tr>
                <td>1</td>
                <td>red shoe</td>
                <td>ksh 1200</td>
                <td>2</td>
>>>>>>> 07d8863d783582f94076e42dedec69c00ff9c786
                <td>
                  <button type="submit" name="update"><a href="./updateProduct.php?product_ID="'.$ID.'>Update<a></button>
                 <button type="submit" name="delete"><a href="./deleteProduct.php?product_ID="'.$ID.'>Delete<a></button>
                </td>
<<<<<<< HEAD
              </tr>';
               }
                
              }

              ?>        
             
=======
              </tr>
              <tr>
                <td>1</td>
               <td>Tracksuit</td>
               <td>ksh 10000</td>
               <td>6</td>
               <td>
                <button><a href="">Update<a></button>
                    <button><a href="">Delete<a></button>
            </td>
               
              </tr>
              <tr>
                <td>1</td>
                <td>Watch shoe</td>
                <td>ksh 5000</td>
                <td>5</td>
                <td> -->
                   
                </td>
              </tr>
>>>>>>> 07d8863d783582f94076e42dedec69c00ff9c786
            </tbody>
          </table>
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