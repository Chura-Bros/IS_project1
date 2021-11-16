<?php
session_start();

include("connect.php");
include("AdminLoginFunction.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Something was posted
   $ID = $_POST['admin_ID'];
    
   $password = $_POST['password'];

   if(!empty($ID) && !empty($password) && is_numeric($ID)){
    // read from database
    $query = "SELECT * FROM `admin_details` WHERE `admin_ID`='$ID' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password){
            $_SESSION['admin_ID'] = $user_data['admin_ID'];
            header("Location: productList.php");
            die;
        }
    }  
    echo "Wrong ID or password!";
}else{
       echo "Wrong ID or password!";
   }
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
<?php include_once("header.php"); ?>
  
    <br><br>
    <form action=""method="post"> 
        <h3>Admin Login</h3>
        <label for="phone">Admin ID:</label>
    <input type="text" id="ID " name="admin_ID"
    placeholder="123">
    <br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="password"
    >

  

    
    
    <br><br>


    <input type ="reset">

    <button type="submit" name="login">Log in:</button> 
    </form>
    <?php include_once("footer.php"); ?>
</body>
</html>