<!DOCTYPE html>
<html>
<?php include("config.php");
    session_start();
$count=0;
$user=$_SESSION['user'];
//echo $user;
    $count=0;?>
<title>Admin</title>
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
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large" id="nav">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile">Turbo-GEEks</a>
  <a href="viewmember.php" class="w3-bar-item w3-button w3-mobile">Delete member</a>
  <span onclick="add()"><a  class="w3-bar-item w3-button w3-mobile">New cars</a></span>
  <a href="deleteoldcars.php" class="w3-bar-item w3-button w3-mobile">delete old cars</a>
    <a href="notifi.php" class="w3-bar-item w3-button w3-mobile">span Request</a>
    <a href="logout.php" class="w3-bar-item w3-right w3-button w3-mobile">Logout</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/grey.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">

  <form action="updatenewcar.php" method="POST" enctype="multipart/form-data">
      <div class="w3-container-display-left w3-white w3-padding-16 w3-col l4 m8"  id="add">
  </div>
</form>

</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">


  <div class="w3-container w3-margin-top" >
    <h3>New cars</h3>
  </div>
  <div class="w3-row-padding w3-padding-16">
  <?php
  $sql = "select * from new_cars ";
  $result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result)){
    if($count!=3){
     echo"  <div class=w3-third w3-margin-bottom>";
       echo "<img src='$row[front]' style=width:100%>";
      echo  "<div class=w3-container w3-white>";
      echo  "<h3>$row[carname]</h3>";
      echo  "<h6 class=w3-opacity>$row[price]</h6>";
      echo  "<p>Car type:-$row[cartype]</p>";
      echo  "</div>";
   echo  "</div>";
 $count=$count+1;}
  else { break;} }?>
<div class="w3-container w3-margin-top" id="rooms">
</div>
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





<!-- Footer -->
<footer class="w3-padding-30 w3-black w3-center w3-margin-top">
  <p>Powered by <a href=" "target="_blank" class="w3-hover-text-green">Shreyas</a></p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
</footer>


<script>
function phone() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
$('#viewmore').on('click', function(){
	$('.item:hidden').show();
})

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rooms").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "viewmore.php", true);
  xhttp.send();
}

function add() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("add").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "add_new_car.php", true);
  xhttp.send();
}


</script>



</body>
</html>
