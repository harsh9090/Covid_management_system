<?php

$q = $_REQUEST["q1"];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $sql="SELECT region.p_id,region.state AS state,list.affected AS affected,list.recovered AS recovered,list.death AS death
 FROM region INNER JOIN list ON region.p_id=list.p_id       
WHERE region.city='$q'";
  $result=$conn->query($sql);
  $num=0;
  $affected=0;
  $recovered=0;
  $death=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                      	$num++;
                                      	if($row['affected']==1)
                                        	$affected++;
                                        if($row['recovered']==1)
                                        	$recovered++;
                                        if($row['death']==1)
                                        	$death++;
                                      }
                                    }
echo $num." ".$affected." ".$recovered." ".$death;
?>