<?php
<<<<<<< HEAD
$user='root';
$pass='';
$db='churabros';

$con=new mysqli('localhost', $user,$pass,$db);

if(!$con)
{

    die(mysqli_error($con));
}
?>
=======
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "churabros";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($mysqli));
>>>>>>> fbfa601275865ae4a905e490f7c9e0774674ef8e
