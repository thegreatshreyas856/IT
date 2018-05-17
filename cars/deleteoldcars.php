<!DOCTYPE html>
<html>
<?php include("config.php");
$count=0;
session_start();

$user=$_SESSION['user'];
?>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.nav{
  position: fixed;
}
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
.hidden {
  display: none;
}
</style>

<!-- Page content -->
<div class="w3-bar w3-white w3-large" id="nav">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile">Turbo-GEEks</a>
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile">About</a>
  <spam onclick="add()"><a href="#" class="w3-bar-item w3-button w3-mobile">Add old cars</a></spam>
  <a class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile"><?php echo $user;?></a>
  <spam onclick="profile()"><a href="admin.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Back</a></spam>
  <a href="logout.php" class="w3-bar-item w3-right w3-button w3-mobile">Logout</a>
</div>
<div class="w3-content" style="max-width:1532px;">


  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Pre-owned cars</h3>
  </div>
  <div class="w3-row-padding w3-padding-16">
  <?php
  $sql = "select * from old_cars where taken='1' ";
  $result = mysqli_query($con,$sql);
  //$row=mysqli_fetch_array($result);
  while($row=mysqli_fetch_array($result)){
     echo"  <div class=w3-third w3-margin-bottom>";
       echo "<img src=$row[front] style=width:100%>";
      echo  "<div class=w3-container w3-white>";
      echo  "<h3>$row[carname]</h3>";
      echo  "<h6 class=w3-opacity>$row[price]</h6>";
      echo  "<p>Car type:-$row[cartype]</p>";
      echo  "<p>Car type:-$row[owner]</p>";
      echo  "<p>Car type:-$row[phone]</p>";
      echo  '<div class="popup" onclick="phone()"><i class="fa fa-phone" ></i>';
      echo  '<span class="popuptext" id="myPopup">A Simple Popup!</span></div>';
      echo  "<a href='removecar.php?car=$row[2]'><button class= 'w3-button w3-block w3-black w3-margin-bottom'>Delete</button></a>";
      echo  "</div>";
   echo  "</div>";}
 ?>

  <!--  <div class="w3-third w3-margin-bottom">
      <img src="images/grey.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Car name</h3>
        <h6 class="w3-opacity">cost 22222</h6>
        <p>Car type:-SUV</p>
        <p class="w3-large"><i class="fa fa-phone"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Buy</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="images/grey.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Car name</h3>
        <h6 class="w3-opacity">cost 22222</h6>
        <p>Car type:-SUV</p>
        <p class="w3-large"><i class="fa fa-phone"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Buy</button>
      </div>
    </div>-->
  </div>



<script>
function phone() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
$('#viewmore').on('click', function(){
	$('.item:hidden').show();
})
</script>



</body>
</html>
