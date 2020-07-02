<?php
session_start();

$id = $_SESSION['id'];
$phone = $_POST['phoneNo'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$travel = $_POST['travel'];
$medical = $_POST['history'];

if($travel == 'yes'){
	
	$from = $_POST['from'];
	if($from!='out of country'){
		$to = $_POST['to'];
		$travel=1;
}
	else
		$country = $_POST['c_name']; $travel=2;
}
else {
	$travel=0;
}

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO report (p_id,phone,age,gender,address,zip,travel,medical) VALUES ('$id','$phone','$age','$gender','$address','$zip','$travel','$medical')";

	
	if(!mysqli_query($conn,$sql)){
  echo "not inserted1";
}
$sql1="INSERT INTO region (p_id,city,state) VALUES ('$id','$city','$state')";
if(!mysqli_query($conn,$sql1)){
  echo "not inserted2";
 }
 if($from!='out of country'){
 $sql2="INSERT INTO travel (p_id,from_place,to_place) VALUES ('$id','$from','$to')";
 if(!mysqli_query($conn,$sql2)){
  echo "not inserted3";
 }
}
else{
$sql2="INSERT INTO country (p_id,country) VALUES ('$id','$country')";
 if(!mysqli_query($conn,$sql2)){
  echo "not inserted3";
 }
	}
$sql3="INSERT INTO list (p_id) VALUES ('$id')";
 if(!mysqli_query($conn,$sql3)){
  echo "not inserted4";
 }
   header("location: http://localhost:8080/ITA_PRO/log.php");
?>