<?php

include("config.php");

$firstName = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['mail'];


$sql = "INSERT INTO reg_table (first_name,last_name,user_name,password,email_id,phone_num,profile)VALUES ('NULL', 'NULL', '$firstName','$password', '$email', 'NULL','NULL')";
$result = mysqli_query($con, $sql);

$sql1 = "INSERT INTO login_table (user_name,password,role)VALUES ($firstName,$password,'USER')";
$result1 = mysqli_query($con, $sql1);

if(($result)&&($result1))
{
header("Location: login.php");
}
else {
  echo "Sorry";
}
?>
