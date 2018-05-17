<?php
include("config.php");
if(isset($_GET['remove']))
{
  $remove=$_GET['remove'];
  $re="UPDATE old_cars set remove='remove' where reg_no='$remove'";
  $res = mysqli_query($db,$re);
  if($res)
  {
    header("Location:user.php");
  }
}
$first=$_POST['first_name'];
$last=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['number'];
$null="NULL";
$sql1="INSERT INTO reg_table (first_name,last_name,user_name,password,email_id,phone_num,profile) VALUES ('$first','$last','$user_name','$password','$email','$phone','$null')";
$result=mysqli_query($db,$sql1);

if($result)
{
header('Location:login.html');
}
else {
  echo "sorry";
}














?>
