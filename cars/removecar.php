<?php 
include("config.php");

if($_GET['car']);
{
    $car=$_GET['car'];
}

$sql="DELETE FROM old_cars WHERE reg_no='$car'";
$result=mysqli_query($con,$sql);

if($result)
{
    header("Location:admin.php");
}
else{
    echo "sorry";
}
?>