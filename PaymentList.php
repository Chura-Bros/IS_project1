<?php
include_once 'connect.php';
$ID=7;
$name="";
$price=0;
$qty=0;
$desc="";

$query="(SELECT * FROM payment_details)" ;

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
        <link rel="stylesheet" href="table.css?v=<?php echo time();?>">
</head>
<body>
<?php include_once("AdminHeader.php"); ?> 
<h1>Payments </h1>
<div class="button">

        <!-- <a href="./AddProduct.php">Add product</a> -->
        <br><br>

        <table class="table" id="customers">
            <thead>
              <tr>
                <th scope="col">Payment ID ID</th>
                <th scope="col">first Name </th>
                <th scope="col">Last Name</th>
                <th scope="col">email</th>
                <th scope="col">Phone no</th>
                <th scope="col">Method</th>

              </tr>
            </thead>
            <tbody>
              <?php
          
              if($result){
               
               while($row=mysqli_fetch_assoc($result)) {
                $ID=(int)$row['ID'];
                $f_name=$row['first_name'];
                $l_name=$row['last_name'];
                $email=$row['email'];
                $phone=$row['phone_no'];
                $method=$row['method'];
                echo '<tr>
                <td>'.$ID.'</td>
                <td>'.$f_name.'</td>
                <td>'.$l_name.'</td>
                <td> '.$email.'</td>
                <td> '.$phone.'</td>
                <td>'.$method.'</td>
              
              </tr>';
               }
                
              }

              ?>        
             
            </tbody>
          </table>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>