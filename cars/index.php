<!DOCTYPE html>
<html>
<title>Cars</title>
<?php include("config.php");
$count=0;
?>
<meta charset="UTF-8"
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.nav{
  position: fixed;
}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large" id="nav">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile">Turbo-GEEks</a>
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#new" class="w3-bar-item w3-button w3-mobile">New cars</a>
  <a href="#old" class="w3-bar-item w3-button w3-mobile">Old cars</a>
  <span onclick="loadDoc()"><a class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Login</a></span>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="images/grey.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
    <form action="check.php" method="post">
  <div class="w3-container-display-left w3-white w3-padding-16 w3-col l4 m8" id="login">
  </div>
    </form>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Registration</h3>

  </div>

  <div class="w3-row-padding">
    <form action="create_profile.php" method="POST">
    <div class="w3-col m2">
      <label>Username<span style="color:red">*</span></label>
      <input class="w3-input w3-border" type="text" placeholder="Enter user name" name="user" required >
    </div>
    <div class="w3-col m2">
      <label>Password<span style="color:red">*</span><input type="checkbox" onclick="myFunction()">Show Password</label>
      <input class="w3-input w3-border" type="password" placeholder="Enter password" name="password" id="txtPassword" required>
    </div>
    <div class="w3-col m2">
      <label>Conform Password</label>
      <input class="w3-input w3-border" type="password" placeholder="Enter same password"  id="txtConfirmPassword" required >
    </div>
    <div class="w3-col m3">
      <label>E-mail<span style="color:red">*</span></label>
      <input class="w3-input w3-border" type="email" placeholder="Enter your email" name="mail" required>
    </div>

    <div class="w3-col m2">
      <label>Submit</label>
      <button class="w3-button w3-block w3-black" onclick="return Validate()">Submit</button>
    </div>
  </form>
  </div>
  <div class="w3-container w3-margin-top" id="new">
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

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 m7">
      <h3>About</h3>
      <h6> about your company</h6>
    <p>hello</p>
    </div>


  <div class="w3-row w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Nagarbhavi bangalore</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: 9632898319</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: abc@abc.com</div>
  </div>


  <div class="w3-container" id="old">
    <h3>Used cars</h3>
  </div>

  <?php $sql0 = "select * from old_cars  ";
              $result0 = mysqli_query($con,$sql0);
              $row0=mysqli_fetch_array($result0);?>
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
      <?php   echo"  <img src=$row0[6] alt='New York' style='width:100%'>";
          echo"  <span class='w3-display-bottomleft w3-padding'>$row0[5]</span>";?>
      </div>
    </div>

    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <?php
              $row1=mysqli_fetch_array($result0);
          echo '<div class="w3-half w3-margin-bottom">';
          echo'<div class="w3-display-container">';
          echo"  <img src='$row1[6]' alt='New York' style='width:100%'>";
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
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i>Shreyas<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: 9632898319<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email:abc@abc.com<br>

  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-30 w3-black w3-center w3-margin-top">
  <p>Powered by <a href=" "target="_blank" class="w3-hover-text-green">Shreyas</a></p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
</footer>



<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
    function myFunction() {
    var x = document.getElementById("txtPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("login").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "login.php", true);
  xhttp.send();
}

</script>




</body>
</html>
