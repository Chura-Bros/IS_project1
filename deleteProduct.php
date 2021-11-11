<?php
include('connect.php');

if(isset($_GET['product_ID'])){  
    
    $id = (int)$_GET['product_ID'];
    var_dump($id); 
    $query="DELETE FROM `product_details` WHERE product_ID=$id";
    
    $result = $mysqli->query($query) or die($mysqli->error);
 

    header('Location: productList.php');
   
}