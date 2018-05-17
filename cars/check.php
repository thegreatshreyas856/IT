<?php
	include("config.php");
    session_start();
	$user_name = $_POST['user'];
	$password = $_POST['pass'];


	$sql = "SELECT * FROM login_table WHERE user_name = '$user_name' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
    
    $_SESSION['user']=$_POST['user'];
    
if($row['role']=="USER"){
	header('Location:user.php');
}
elseif($row['role']=="ADMIN"){

	header('Location:admin.php');

}




?>
