<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>ITS351_PROJECT</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <!-- Header or navbar start here-->
  <div class="header">
    <div class="logoWrapper">
      
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="index.php">Home</a>
      </div>
    </div>

  </div>
    <!-- Header end here-->
  <body>
    <!-- Signin part start here-->
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign In here--</h1>
        <hr>
        <br>
        <form action="checklogin.php" method="post">


          <label for="userName">Username</label>
          <input type="text" id="mail" name="userName" placeholder="Your Username">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">


          <a href="index.php">Forget password ? </a>

          <input type="submit" name="signInSubmit" value="SignIn">

        </form>
      </div>
</div>
 <!-- Signin part start here-->

 <!-- side image coding start here-->
 <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>

      <!--Side image end here-->

</body>
 <!-- Signin part end here-->

</html>
