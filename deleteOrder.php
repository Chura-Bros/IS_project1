<?php
include('connect.php');

if(isset($_GET['ID'])){  
    
    $id = (int)$_GET['ID'];
    var_dump($id); 
    $query="DELETE FROM `order_details` WHERE ID=$id";
    
    $result = $mysqli->query($query) or die($mysqli->error);
 

    header('Location: Cart.php');
   
}