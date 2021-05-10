  

 <?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="tut";

$conn=mysqli_connect($servername,$username,$password,$dbname);

?>


<!DOCTYPE html>

<html>
  <head>
    <title>Database project</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
<script  href=""></script>
  </head>
  <div class="header">
    <div class="logoWrapper">
 
      <div class="topnav">
          
        <a href="usermanagement.php">Home</a>
        <a href="index.php">Go back</a>
            <a href="index.php">Logout</a>
      </div>
    </div>
    <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
      <?php
 if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ 
 }
    
      if(isset($_SESSION['memberUserId']) ){
      }
    ?>
        <div class="boxWrapper">

         <!--  <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              // echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>  -->

          <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body><br><br><br>  
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
         
                <div class="container">
<div class="row">
 <div class="col-2" >
  <?php
 ?>  <?php
// if (isset($_POST['submit'])) {
// $checkbox=$_POST['name'];
// $today = date("F - j- Y");
// $nextday = date("F - j- Y",strtotime("7 day"));
// // $lastdate= strtotime("");
// // echo "$lastdate";
// $sql="INSERT INTO shedule(time_slot, entry_date,lastdate,user_id) VALUES ('$checkbox','$today','$nextday','$user_id')";
// $query=mysqli_query($conn,$sql);
// if($query)
// {
//   echo "insert data";

// }
// else
// {
//   echo "not insert";
// }
// }

?><!-- 
                 
                <table style="font-style: bold;font-weight: bold;font-size: 25px;margin-top: 8%" >
                    
                    <tr ><th>Monday</th></tr>
                       <tr > <th >Tuseday</th></tr><tr><th>Wednesday</th></tr>
                          <tr > <th> Thursday </th></tr><tr><th>Friday</th></tr>
                             <tr > <th> Sturday </th></tr><tr><th>Sunday</th></tr>
                       
                    </tr>

                  </table> -->   </div> 

                  <div class="col-12">
                        <table  style="font-style: bold;font-weight: bold; "   class="table table-bordered border-primary">
                    
                 <tr> <th></th><th>12:00AM TO 3:00AM </th><th> 3:00AM TO 6:00AM </th>
                      <th>6:00AM TO 9:00AM </th><th> 9:00AM TO 12:00PM </th>
                       <th>12:00PM TO 3:00PM </th><th> 3:00PM TO 6:00PM </th>
                        <th>6:00PM TO 9:00PM </th><th> 9:00PM TO 12:00PM </th>
                    </tr>
                       <tr> 
 

 



<!doctype html>
<html>
 
<head>
    <meta charset="UTF-8">
    <title>Please  Choose  your  time</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
 
<body>
    <h1> Choose your  time And day for booking laundary</h1>

     
            <?php 
            // echo $_SESSION['username'];

            ?>
                        <th>Monday </th>
                          


  <form action="" method="post">

  
 
  <label class="checkbox-inline" for="id1"> 
                     <td ><input id='id1' type='Checkbox' class="btn btn-success active"name="gender" value ="Monday: 12:00AM TO 3:00AM " onclick="chbx(this) " > 
                </td></label>

                      <td><Input id='id2' type='Checkbox' class="btn btn-success active"class="btn btn-success active"name='gender' 
                        value ="Monday: 3:00AM TO 6:00AM " onclick="chbx(this) " ></td>
                       <td><Input id='id3' type='Checkbox'class="btn btn-success active" name='name' value ="Monday: 6:00AM TO 9:00AM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id4' type='Checkbox'class="btn btn-success active" name='name' value ="Monday: 9:00AM TO 12:00PM    " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id5' type='Checkbox'class="btn btn-success active" name='name' value ="Monday: 12:00PM TO 3:00PM  " onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id6' type='Checkbox'class="btn btn-success active" name ='name' value ="Monday: 3:00PM TO 6:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id7' type='Checkbox'class="btn btn-success active" name ='name' value ="Monday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                               <td>

                

<Input id='id8' type='Checkbox' name ='name' value ="9:00PM TO 12:00PM Monday" onclick="chbx(this)"><br /></td>
                            </tr>
                            
                            <tr>
                            <th>Tuseday </th>
                         <td><Input id='id9' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 12:00AM TO 3:00AM";
                         $arr1 = str_split($str,18);
  
  onclick="chbx(this)"><br /></td>
                      <td ><Input id='id10' type='Checkbox' class="btn btn-success active"name ='name' value ="Tuseday: 3:00AM TO 6:00AM " onclick="chbx(this) " > </td>
                      <td><Input id='id11' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 6:00AM TO 9:00AM " onclick="chbx(this) " ></td>
                        
                            <td ><Input id='id12' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 9:00AM TO 12:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id13' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 12:00PM TO 3:00PM " onclick="chbx(this) "    ><br /></td>
                             <td ><Input id='id14' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 3:00PM TO 6:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id15' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                                  <td><Input id='id16' type='Checkbox'class="btn btn-success active" name ='name' value ="Tuseday: 9:00PM TO 12:00PM  " onclick="chbx(this) " ><br /></td>
                            </tr>
                     

 <tr>
                            <th>Wednesday </th>
                         <td><Input id='id17' type='Checkbox' name ='name' class="btn btn-success active" value ="Wednesday: 12:00AM TO 3:00AM " onclick="chbx(this)"><br /></td>
                      <td ><Input id='id18' type='Checkbox' name ='name'  class="btn btn-success active" value ="Wednesday: 3:00AM TO 6:00AM " onclick="chbx(this)" > </td>
                      <td><Input id='id19' type='Checkbox' name ='name' class="btn btn-success active" value ="Wednesday: 6:00AM TO 9:00AM " onclick="chbx(this) " ></td>
                       <td><Input id='id20' type='Checkbox' name ='name' value ="Wednesday: 9:00AM TO 12:00PM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id21' type='Checkbox' class="btn btn-success active" name ='name' value ="Wednesday: 12:00PM TO 3:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id22' type='Checkbox' class="btn btn-success active" name ='name' value ="Wednesday: 3:00PM TO 6:00PM " onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id23' type='Checkbox' class="btn btn-success active" name ='name' value ="Wednesday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id24' type='Checkbox' class="btn btn-success active" name ='name' value ="Wednesday: 9:00PM TO 12:00PM " onclick="chbx(this) " ><br /></td>
                            </tr>
                     
                     <tr>
                            <th>Thursday </th>
                         <td><Input id='id25' type='Checkbox'  class="btn btn-success active" name ='name' value ="Thursday: 12:00AM TO 3:00AM " onclick="chbx(this)"><br /></td>
                      <td ><Input id='id26' type='Checkbox' class="btn btn-success active" name ='name' value ="Thursday: 3:00AM TO 6:00AM " onclick="chbx(this) " > </td>
                      <td><Input id='id27' type='Checkbox'   class="btn btn-success active"name ='name' value ="Thursday: 6:00AM TO 9:00AM " onclick="chbx(this) " ></td>
                       <td><Input id='id28' type='Checkbox' class="btn btn-success active" name ='name' value ="Thursday: 9:00AM TO 12:00PM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id29' type='Checkbox' class="btn btn-success active" name ='name' value ="Thursday: 12:00PM TO 3:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id30' type='Checkbox' class="btn btn-success active" name ='name' value ="Thursday: 3:00PM TO 6:00PM" onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id31' type='Checkbox'class="btn btn-success active" name ='name' value ="Thursday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id32' type='Checkbox'class="btn btn-success active" name ='name' value ="Thursday: 9:00PM TO 12:00PM " onclick="chbx(this) " ><br /></td>
                            </tr>


                     <tr>
                            <th>Friday </th>
                         <td><Input id='id33' type='Checkbox' class="btn btn-success active" name ='name' value ="Friday: 12:00AM TO 3:00AM " onclick="chbx(this)"><br /></td>
                      <td ><Input id='id34' type='Checkbox'class="btn btn-success active" name ='name' value ="Friday: 3:00AM TO 6:00AM " onclick="chbx(this) " > </td>
                      <td><Input id='id35' type='Checkbox'class="btn btn-success active" name ='name' value ="Friday: 6:00AM TO 9:00AM  " onclick="chbx(this) " ></td>
                       <td><Input id='id36' type='Checkbox' class="btn btn-success active"name ='name' value ="Friday: 9:00AM TO 12:00PM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id37' class="btn btn-success active"type='Checkbox' name ='name' value ="Friday: 12:00PM TO 3:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id38'class="btn btn-success active" type='Checkbox' name ='name' value =" Friday: 3:00PM TO 6:00PM" onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id39' class="btn btn-success active"type='Checkbox' name ='name' value ="Friday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id40' class="btn btn-success active"type='Checkbox' name ='name' value ="Friday: 9:00PM TO 12:00PM " onclick="chbx(this) " ><br /></td>
                            </tr>

                            <tr>
                            <th>Sturday</th>
                         <td><Input id='id41' type='Checkbox' name ='name'class="btn btn-success active" value ="Sturday: 12:00AM TO 3:00AM " onclick="chbx(this)"><br /></td>
                      <td ><Input id='id42' type='Checkbox' name ='name'class="btn btn-success active" value ="Sturday: 3:00AM TO 6:00AM " onclick="chbx(this) " > </td>
                      <td><Input id='id43' type='Checkbox' name ='name' class="btn btn-success active"value ="Sturday: 6:00AM TO 9:00AM " onclick="chbx(this) " ></td>
                       <td><Input id='id44' type='Checkbox' name ='name'class="btn btn-success active" value ="Sturday: 9:00AM TO 12:00PM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id45' type='Checkbox' class="btn btn-success active"name ='name' value ="Sturday: 12:00PM TO 3:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id46' type='Checkbox' class="btn btn-success active"name ='name' value ="Sturday: 3:00PM TO 6:00PM " onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id47' type='Checkbox'class="btn btn-success active" name ='name' value ="Sturday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id48' type='Checkbox' class="btn btn-success active"name ='name' value ="Sturday: 9:00PM TO 12:00PM " onclick="chbx(this) " ><br /></td>
                            </tr>

     <tr>
                            <th>Sunday</th>
                         <td><Input id='id49' type='Checkbox' class="btn btn-success active"name ='name' value ="Sunday: 12:00AM TO 3:00AM " onclick="chbx(this)"><br /></td>
                      <td ><Input id='id50' type='Checkbox'class="btn btn-success active" name ='name' value ="Sunday: 3:00AM TO 6:00AM " onclick="chbx(this) " > </td>
                      <td><Input id='id51' type='Checkbox'class="btn btn-success active" name ='name' value ="Sunday: 6:00AM TO 9:00AM " onclick="chbx(this) " ></td>
                       <td><Input id='id52' type='Checkbox' class="btn btn-success active"name ='name' value ="Sunday: 9:00AM TO 12:00PM " onclick="chbx(this)"><br /></td>
                            <td ><Input id='id53' type='Checkbox'class="btn btn-success active" name ='name' value ="Sunday: 12:00PM TO 3:00PM " onclick="chbx(this) " ><br /></td> 
                            <td><Input id='id54' type='Checkbox'class="btn btn-success active" name ='name' value ="Sunday: 3:00PM TO 6:00PM " onclick="chbx(this) " ><br /></td>
                             <td ><Input id='id55' type='Checkbox' class="btn btn-success active"name ='name' value ="Sunday: 6:00PM TO 9:00PM " onclick="chbx(this) " ><br /></td>
                              <td><Input id='id56' type='Checkbox' class="btn btn-success active"name ='name' value ="Sunday: 9:00PM TO 12:00PM " onclick="chbx(this) " ><br /></td>
                            </tr>
  
 
 
            </form>
 

                           </table> 
     
    <h3 id="result"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var gender = $(this).val();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: {
                        gender: gender
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
<div class="col-12">
                        <table  style="font-style: bold;font-weight: bold; "   class="table table-bordered border-primary">
                    
                 
 

 

                        <script>
function chbx(obj)
{
var that = obj;
   if(document.getElementById(that.id).checked == true) {
      document.getElementById('id1').checked = false;
      document.getElementById('id2').checked = false;
      document.getElementById('id3').checked = false;
         document.getElementById('id4').checked = false;
      document.getElementById('id5').checked = false;
      document.getElementById('id6').checked = false;
         document.getElementById('id7').checked = false;
      document.getElementById('id8').checked = false;
      document.getElementById('id9').checked = false;
         document.getElementById('id10').checked = false;
      document.getElementById('id11').checked = false;
      document.getElementById('id12').checked = false;
         document.getElementById('id13').checked = false;
      document.getElementById('id14').checked = false;
      document.getElementById('id15').checked = false;
         document.getElementById('id16').checked = false;
      document.getElementById('id17').checked = false;
      document.getElementById('id18').checked = false;
         document.getElementById('id19').checked = false;
      document.getElementById('id20').checked = false;
      document.getElementById('id21').checked = false;
         document.getElementById('id22').checked = false;
      document.getElementById('id23').checked = false;
      document.getElementById('id24').checked = false;
         document.getElementById('id25').checked = false;
      document.getElementById('id26').checked = false;
      document.getElementById('id27').checked = false;
         document.getElementById('id28').checked = false;
      document.getElementById('id29').checked = false;
      document.getElementById('id30').checked = false;
         document.getElementById('id31').checked = false;
      document.getElementById('id32').checked = false;
      document.getElementById('id33').checked = false;
         document.getElementById('id34').checked = false;
      document.getElementById('id35').checked = false;
      document.getElementById('id36').checked = false;   
      document.getElementById('id37').checked = false;
      document.getElementById('id38').checked = false;
         document.getElementById('id39').checked = false;
      document.getElementById('id40').checked = false;
      document.getElementById('id41').checked = false;
         document.getElementById('id42').checked = false;
      document.getElementById('id43').checked = false;
      document.getElementById('id44').checked = false;
         document.getElementById('id45').checked = false;
      document.getElementById('id46').checked = false;
      document.getElementById('id47').checked = false;
         document.getElementById('id48').checked = false;
      document.getElementById('id49').checked = false;
      document.getElementById('id50').checked = false;
         document.getElementById('id51').checked = false;
      document.getElementById('id52').checked = false;
      document.getElementById('id53').checked = false;    
      document.getElementById('id54').checked = false;
      document.getElementById('id55').checked = false;
         document.getElementById('id56').checked = false;
      document.getElementById(that.id).checked = true;
   }
}
 
</script>
 
</body>
 
</html>

 

    </div>
  </div>

    
  </body>

</html>
