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
    <form > 
        <h3>Admin Login</h3>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"
    placeholder="e.g Yusuf ">
    
    <br><br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"
    placeholder="e.g Ali">
    <br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass"
    >

    <br><br>


    
    <label for="phone">Admin ID:</label>
    <input type="number" id="ID " name="ID"
    placeholder="123">
    <br><br>


    <input type ="reset">

   <input type ="submit">

    </form>
    <?php include_once("footer.php"); ?>
</body>
</html>