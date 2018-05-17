<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>

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
      <h2>Login</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16"  >
      <form action="check.php" target="_blank" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Username</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Username name" name="user" required>
          </div>
          <div class="w3-half">
            <label>Password</label>
            <input class="w3-input w3-border" type="password" placeholder="Enter password" name="pass" required>
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit">Submit</button>
        <a href="">Not a member click here  </a>
      </form>
    </div>
  </div>





</body>
</html>
