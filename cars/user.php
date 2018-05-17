<!DOCTYPE html>
<html>
<?php include("config.php");
    session_start();
$count=0;
$user=$_SESSION['user'];
    $count=0;?>
<title>User</title>
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
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile">About</a>
  <spam onclick="add()"><a href="#" class="w3-bar-item w3-button w3-mobile">Add old cars</a></spam>
  <a class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile"><?php echo $user;?></a>
  <spam onclick="profile()"><a href="profile.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">My profile</a></spam>
  <a href="logout.php" class="w3-bar-item w3-right w3-button w3-mobile">Logout</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/grey.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">

  <form action="updatecar.php" method="POST" enctype="multipart/form-data">
      <div class="w3-container-display-left w3-white w3-padding-16 w3-col l4 m8"  id="add">
  </div>
</form>
<form action="updatenewcar.php" method="POST" enctype="multipart/form-data">
    <div class="w3-container-display-left w3-white w3-padding-16 w3-col l4 m8"  id="addnew">
</div>
</form>

</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">


  <div class="w3-container w3-margin-top" >
    <h3>Pre-owned cars</h3>
  </div>
  <div class="w3-row-padding w3-padding-16">
  <?php

  $sql = "select * from old_cars where owner!='$user'";
  $result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result)){
    if($count!=3){
     echo"  <div class=w3-third w3-margin-bottom>";
       echo "<img src='$row[front]' style=width:100%>";
      echo  "<div class=w3-container w3-white>";
      echo  "<h3>$row[carname]</h3>";
      echo  "<h6 class=w3-opacity>$row[price]</h6>";
      echo  "<p>Car type:-$row[cartype]</p>";
      echo  "<p>Car type:-$row[owner]</p>";
      echo  "<p>Car type:-$row[phone]</p>";
      echo  '<div class="popup" onclick="phone()"><i class="fa fa-phone" ></i>';
      echo  '<span class="popuptext" id="myPopup">A Simple Popup!</span></div>';
      echo  '<button class= "w3-button w3-block w3-black w3-margin-bottom">Buy</button></a>';
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


  <div class="w3-container">
    <h3>your posted car</h3>
  </div>
  <?php $sql0 = "select * from old_cars WHERE owner='$user' ";
              $result0 = mysqli_query($con,$sql0);
              $row0=mysqli_fetch_array($result0);?>
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
      <?php   echo"  <img src='$row0[6]' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row0[5]</span>";?>
      </div>
    </div>

    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <?php
              $row1=mysqli_fetch_array($result0);
          echo '<div class="w3-half w3-margin-bottom">';
          echo'<div class="w3-display-container">';
          echo"  <img src=$row1[6] alt='New York' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row1[5]</span>";
          echo'</div>';?>
        </div>
        <?php
              $row2=mysqli_fetch_array($result0);?>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <?php echo"  <img src=$row2[6] alt='New York' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row2[5]</span>"; ?>
          </div>
        </div>
      </div>
      <?php
              $row3=mysqli_fetch_array($result0);?>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <?php echo"  <img src=$row3[6] alt='New York' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row3[5]</span>"; ?>
          </div>
        </div>
          <?php
              $row4=mysqli_fetch_array($result0);?>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <?php echo"  <img src=$row4[6] alt='New York' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row4[5]</span>"; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you want to report any spam please give detailes.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i>Shreyas<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: 9632898319<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email:abc@abc.com<br>
     <?php     $sqls = "select email_id from reg_table ";
              $results = mysqli_query($con,$sqls);

echo'<form action="updatespan.php" method="POST" enctype="multipart/form-data">';


    echo' <p><select class="w3-input w3-padding-16 w3-border" type="dropbox" name="email">';
     while($rows=mysqli_fetch_array($results)){
         echo"<option value='$rows[0]'>$rows[0]</option>";
        $count=$count+1;}


        echo'</select></p>';
     echo' <p><select class="w3-input w3-padding-16 w3-border" type="dropbox" name="reason">';
         echo"<option value='1'>contacting for other reason</option>";
     echo"<option value='2'>Not intrested in buying</option>";
     echo"<option value='3'>both </option>";



        echo'</select></p>';
        echo 'Proof for spamming';
     echo' <p><input class="w3-input w3-padding-16 w3-border" type="file"  name="front_pic" required></p>';
      echo'<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Enter if any problem"  name="message"></p>';
      echo'<p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>';
    echo'</form>';
     ?>
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
  xhttp.open("GET", "add_car.php", true);
  xhttp.send();
}



function addnew() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("addnew").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "addnewcar.php", true);
  xhttp.send();
}


</script>



</body>
</html>
