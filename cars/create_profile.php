<?php

include("config.php");

$first = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['mail'];

$sql = "INSERT INTO reg_table (first_name,last_name,user_name,password,email_id,phone_num,profile)VALUES (NULL,NULL,'$first','$pass','$email',NULL,NULL)";
$result = mysqli_query($con,$sql);

$sql1 = "INSERT INTO login_table (user_name,password,role)VALUES ('$first','$pass','USER')";
$result1 = mysqli_query($con,$sql1);

if(($result)&&($result1))
{
header("Location:index.php");
}
else {
echo  "sorry";
}
?>
