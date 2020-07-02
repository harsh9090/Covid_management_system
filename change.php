<?php
if(isset($_POST['affected']) && $_POST['affected']!=""){
	$id=$_POST['affected'];
	$case="affected";
}
if(isset($_POST['recovered']) && $_POST['recovered']!=""){
	$id=$_POST['recovered'];
	$case="recovered";
	echo "$case";
}
if(isset($_POST['death']) && $_POST['death']!=""){
	$id=$_POST['death'];
	$case="death";
	echo "$id";
}
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($case=="affected"){
	$sql = "UPDATE list SET affected='1',recovered='0',death='0' WHERE p_id='$id'";
	if(!mysqli_query($conn,$sql)){
  echo "not inserted1";
}
}

elseif($case=="recovered") {
	$sql1 = "UPDATE list SET affected='0',recovered='1',death='0' WHERE p_id='$id'";
	if(!mysqli_query($conn,$sql1)){
  echo "not inserted1";
}
}
elseif($case=="death") {
	$sql2 = "UPDATE list SET affected='0',recovered='0',death='1' WHERE p_id='$id'";
	if(!mysqli_query($conn,$sql2)){
  echo "not inserted1";
}
}
header("location: http://localhost:8080/ITA_PRO/admpat.php");

 ?>