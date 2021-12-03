<?php
session_start();
if(isset($_SESSION['ID']) && isset($_SESSION['email'])){

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
    
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<?php include_once("header.php"); ?>

    <h1>Hello, <?php echo $_SESSION['email']; ?></h1>
    <a href="logout.php">Logout</a>
    <?php include_once("footer.php"); ?>

</body>
<html>
 
<?php
}else{
    header("Location: User Log in .php");
    exit();
}
?>