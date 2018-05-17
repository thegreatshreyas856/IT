<?php
include("config.php");

if($_GET['member']);
{
    $member=$_GET['member'];
}

$sql="Select * from reg_table WHERE email_id='$member'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$username=$row[2];


$sql1="DELETE FROM reg_table WHERE email_id='$member'";
$result1=mysqli_query($con,$sql1);

$sql2="DELETE FROM login WHERE user_name='$username'";
$result2=mysqli_query($con,$sql2);

if($result)
{
    header("Location:admin.php");
}
else{
    echo "sorry";
}
?>
