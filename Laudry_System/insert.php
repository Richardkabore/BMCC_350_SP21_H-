
<?php

session_start();
//connecting with database start 
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "tut";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
//connecting with database end

//the SESSION are get from the staffsignin.php page  
$user=$_SESSION['userId'];  
$checkbox=$_POST["gender"];

 
 // $gender=$_POST["gender"];
 // echo $gender;
$date = date('Y-m-d');
 // The purpose of select Query is that when the new user or user already checked the checkbox then it will show the mesg of this "this time is already reserved" 
//If a user not already check the checkbox then it will show the message of "your data submitted successfully"
$sql="SELECT * FROM time_table where by_user='$user' OR res_time='$checkbox'";
$data=mysqli_query($conn,$sql);
 $total=mysqli_num_rows($data);
if(!$total==0)
{ 
	while ($result=mysqli_fetch_assoc($data)) {
		
		 	echo "<h4 style='color:red;font-weight:bold'>Your  time is  already reserved</h4>";
		 	echo "<h5 style='color:red;'>".$result['res_time']." </h5>";
	

 }
}
 else
try
{
	 
 $connn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
 $connn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if(isset($_POST["gender"]))
 
 {
 	$user=$_SESSION['userId'];
 

//inserting  the value of checkbox in database code start here
 $query = "INSERT INTO time_table(res_time, by_user, time_applied) VALUES (:gender,'$user', '$date')";

 $statement = $connn->prepare($query);
 $statement->execute(
 array(
 'gender' => $_POST["gender"]
 )
 );
 $count = $statement->rowCount();
 if($count > 0)
 {
 echo "<h5 style='color:green;font-weight:bold'>Your request was submitted successfully!</h5>";
 }
 else
 {
 echo "Data Insertion Failed";
 }
 }
}
catch(PDOException $error)
{
 echo $error->getMessage();
}

?>
 


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
<input type="hidden" name="gender" value=<?php echo $_SESSION['userId'];?> >
</form>
</body>
</html>