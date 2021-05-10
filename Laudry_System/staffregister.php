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
  <!-- Header or Navbar start here-->
  <div class="header">
    <div class="logoWrapper">
   
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="index.php">Home</a>
      </div>
    </div>

  </div>
    <!-- Header or Navbar end here-->
  <body>
  <!-- Body part start  here-->
    <!-- Signup coding start here-->
    <!-- Classes are  defined in stylesbackup1.csss folder which are already defined in in head  -->
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up For New Users</h1>
        <hr>
        <br>
        <form action="finishregister.php" method="post">
          <label for="status">Status</label>
          <select class="statusSelect" name="status">
          
            <option value="USER">USER</option>
          </select>

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">

          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
          
          

          <label for="dob">Date of birth</label>
          <input type="date" id="dob" name="dateOfBirth" placeholder=""><br>

          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" placeholder="Ex. 0111111111">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Enter  Your  Address here...">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userid">ID for this website</label>
          <input type="text" id="userid" name="userId" placeholder="Your ID">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="staffRegisterSubmit"value="Submit">

        </form>
      </div>
    </div>

      <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>

     <!-- Singup coding end here-->

  </body>


     <!-- Body part  end here-->
</html>
