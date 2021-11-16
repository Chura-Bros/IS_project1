<?php
include_once 'connect.php';
$ID=7;
$name="";
$price=0;
$qty=0;
$desc="";

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once("header.php"); ?>
     <?php
              
              if($result){
               while($row=mysqli_fetch_assoc($result)) {
                $ID=$row['product_ID'];
                $name=$row['product_name'];
                $price=$row['product_price'];
                $qty=$row['product_qty'];
                $desc=$row['product_desc'];
                echo '  <div class="image">
                <img src="./Photos/HRX socks.jpg" alt="thisirt1">
                <h4>'.$name.'</h4>
              <p>KSH '.$price.'</p> 
              <button type="submit" name="add-cart">Add to cart </button> 
              </div>';
               }
                
              }

              ?> 
    
  <!-- <div class ="container">
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
   <a class="add-cart "href="#"> Add Cart</a> -->
   
</div>

  </div>  

  <?php include_once("footer.php"); ?>

</body>
</html>