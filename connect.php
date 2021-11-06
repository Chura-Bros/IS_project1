<?php
$user='root';
$pass='';
$db='churabros';

$con=new mysqli('localhost', $user,$pass,$db);

if(!$con)
{

    die(mysqli_error($con));
}
?>