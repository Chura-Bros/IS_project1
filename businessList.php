<?php
include_once 'connect.php';
$ID=7;
$name="";
$price=0;
$qty=0;
$desc="";

$query="(SELECT * FROM business_details)" ;

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
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<?php include_once("header.php"); ?>
    <div class="button">
        <a href="./Addbusiness.php">Add Business</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Business ID</th>
                <th scope="col">Business Name </th>
                <th scope="col">business Email</th>
                <th scope="col">Business no</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
              <?php
          
              if($result){
               
               while($row=mysqli_fetch_assoc($result)) {
                $ID=(int)$row['business_ID'];
                $name=$row['business_name'];
                $email=$row['business_email'];
                $no=$row['business_no'];
                
                echo '<tr>
                <td>'.$ID.'</td>
                <td>'.$name.'</td>
                <td> '.$email.'</td>
                <td> '.$no.'</td>
               
                <td>
                 <button type="submit" name="delete"><a href="deleteBusiness.php?business_ID='.$ID.'">Delete<a></button>
                </td>
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