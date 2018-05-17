<?php
include("config.php");
session_start();


$carname=$_POST['carname'];
if($_POST['cartype']){
$cartype=$_POST['cartype'];}
$reg_number=$_POST['reg_number'];
$price=$_POST['price'];
$phone=$_POST['phone'];
$owner=$_SESSION['user'];
//$owner=$_POST['owner'];



$front_pic=$_FILES['front_pic']['name'];
$front_pictmp= $_FILES['front_pic']['tmp_name'];
$front_pic1='upload/car/front/' .	basename($_FILES['front_pic']["name"]);
move_uploaded_file($front_pictmp,$front_pic1);



$sql="INSERT INTO old_cars (carname,cartype,reg_no,price,phone,owner,front) VALUES ('$carname','$cartype','$reg_number','$price','$phone','$owner','$front_pic1')";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:user.php");
}
else
{
    echo "sorry";
}

?>
