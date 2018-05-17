<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<?php include("config.php");
    session_start();
    $user=$_SESSION['user'];?>
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

<!-- Header -->

  <div class="w3-display-right w3-padding w3-col l4 m8">
    <div class="w3-container w3-red">
      <h2>ADD NEW CAR</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16"  >
      <form action="updatenewcar.php" Method="POST" enctype="multipart/form-data">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Carname</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter carname" name="Ncarname" required>
          </div>
          <div class="w3-half">
            <label>Cartype</label><br>
            SUV<input  type="radio" value="SUV" name="Ncartype" >
            Hatchback<input  type="radio" value="Hatchback" name="Ncartype" >
            Seden<input  type="radio"  name="Ncartype" value="Seden" >
          </div>
          <div class="w3-half">
            <label>Reg_number</label>
            <input class="w3-input w3-border" type="text" placeholder="reg-number" name="Nreg_number" required>
          </div>
          <div class="w3-half">
            <label>Price</label>
            <input class="w3-input w3-border" type="number" placeholder="Price" name="Nprice" required>
          </div>
            <div class="w3-half">
            <label>Phone</label>
            <input class="w3-input w3-border" type="number" placeholder="Enter phone number" name="Nphone" required>
          </div>
          <div class="w3-half">
            <label>Owner</label>
            <input class="w3-input w3-border" type="text" placeholder='<?php echo "$user";  ?>'  name="Nowner" disabled>
          </div>
          <div class="w3-half">
            <label>front Pic</label>
            <input class="w3-input w3-border" type="file" name="Nfront_pic" >
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit">Submit</button>

      </form>
    </div>
  </div>




</body>
</html>
