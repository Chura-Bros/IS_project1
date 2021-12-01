<?php
session_start();
include_once 'connect.php';
if(isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $password=validate($_POST['password']);

    if(empty($email)){
        header("Location: User Log in .php?error=email is required");
        exit();
    }else if(empty($password)){
        header("Location: User Log in .php?error=password is required");
        exit();
    }else{
        $sql="SELECT * FROM customer_details WHERE email ='$email' AND password ='$password'";
        
        $result = $mysqli->query($sql) or die($mysqli->error);
        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
           if($row['email']==$email && $row['password']==$password){
            $_SESSION['email']=$row['email'];
            $_SESSION['first_name']=$row['first_name'];
            $_SESSION['last_name']=$row['last_name'];
            $_SESSION['address']=$row['address'];
            $_SESSION['ID']=$row['ID'];
            $_SESSION['phone_no']=$row['phone_no'];
            header("Location:UserDashBoard.php");
            exit();
           }else{
            header("Location: User Log in .php?error=Incorrect Emaill or password");
            exit();
        }
        }else{
            header("Location: User Log in .php?error=Incorrect Emaill or password");
            exit();
        }
    }

}else{
    header("Location: User Log in php");
    exit();
}