<?php
include('connect.php');

if(isset($_GET['business_ID'])){  
    
    $id = (int)$_GET['business_ID'];
    var_dump($id); 
    $query="DELETE FROM `business_details` WHERE business_ID=$id";
    
    $result = $mysqli->query($query) or die($mysqli->error);
 

    header('Location: businessList.php');
   
}