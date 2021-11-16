<?php
function check_login($con){

    if(isset($_SESSION['admin_ID'])){
        $ID = $_SESSION['admin_ID'];
        $query =  "SELECT * FROM `admin_details` WHERE `admin_ID`='$ID' LIMIT 1";
    
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    echo "redirecting....";
    header("Location: Admin log in.php");
    die;
}