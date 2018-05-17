<!DOCTYPE html>
<html>
    <?php include("config.php");
    session_start();

    $user=$_SESSION['user'];
    ?>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <div class="w3-bar w3-white w3-large" id="nav">
    <a href="#" class="w3-bar-item w3-button w3-red w3-mobile">Turbo-GEEks</a>
    <a href="#rooms" class="w3-bar-item w3-button w3-mobile">About</a>
    <a class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile"><?php echo $user;?></a>
    <spam onclick="profile()"><a href="admin.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Back</a></spam>
    <a href="logout.php" class="w3-bar-item w3-right w3-button w3-mobile">Logout</a>
  </div>
<div class="w3-container">
<center>  <h2 style=color:tomato;>Members</h2></center>
    <p>This all are my members</p>
<?php
  $sql = "select * from reg_table ";
  $result = mysqli_query($con,$sql);

  echo '<table class="w3-table-all">';
   echo' <tr>';
    echo'  <th>First Name</th>';
    echo' <th>Last Name</th>';
    echo'  <th>Email</th>';
    echo '</tr>';
    while($row=mysqli_fetch_array($result)){
        echo' <tr>';
        echo" <td>$row[0] </td>";
        echo" <td>$row[1] </td>";
        echo" <td>$row[4] </td>";
        echo" <td><h5 style=color:red; ><a href='removemember.php?member=$row[4]'>Delete</a></h5></td>";
        echo"</tr>";}
  echo '</table>';?>
</div>

</body>
</html>
