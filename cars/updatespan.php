<?php
include("config.php");
session_start();
$by=$_SESSION['user'];
$email=$_POST['email'];
$message=$_POST['message'];
$reason=$_POST['reason'];
if($reason==1)
{
    $reason="contacting for other reason";
}
elseif($reason==2)
{
    $reason="Not intrested in buying";
}
elseif($reason==3)
{
    $reason="both";
}


$front_pic=$_FILES['front_pic']['name'];
$front_pictmp= $_FILES['front_pic']['tmp_name'];
$front_pic1='proof/' .	basename($_FILES['front_pic']['name']);
move_uploaded_file($front_pictmp,$front_pic1);

$sql="INSERT INTO span(email, message, proof, reason,spamby) VALUES ('$email','$message','$front_pic1','$reason','$by')";
$result=mysqli_query($con,$sql);

if($result)
{
  $message = "updated!!!!!.";
  echo "<script type='text/javascript'>alert('$message');</script>";

    header("Location:user.php");
}
else
{
    echo "sorry";
}

?>
