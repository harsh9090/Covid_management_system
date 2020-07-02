<?php
session_start();
if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
  $name=$_SESSION['name'];
}
else{
   header("location: http://localhost:8080/ITA_PRO/home.php");
 }
 $valid=1;
 $id="";
 $name="";
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$valid=0;

if($_POST['name']!=""){
   $name=$_POST['name'];
  $sql = "SELECT * FROM userdetail WHERE name='$name'";
 $result = $conn->query($sql);           
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                    $id=$row['p_id']; 
                                  }
}
$sql2 = "SELECT * FROM report WHERE p_id='$id'";
$result = $conn->query($sql2);           
                                 if ($result->num_rows > 0) {
                                     while ($row = $result->fetch_assoc()) {
                                     
                                    $valid =1; 
                                 }
}
if($valid!=1){
  $id="";
  $name="";
}
}
elseif($_POST['id']!=""){
  $id=$_POST['id'];
  $sql = "SELECT * FROM userdetail WHERE p_id='$id'";
 $result = $conn->query($sql);           
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        
                                        echo $id;
                                        $name=$row['name'];
                                    
}
}
$sql2 = "SELECT * FROM report WHERE p_id='$id'";
$result = $conn->query($sql2);           
                                 if ($result->num_rows > 0) {
                                     while ($row = $result->fetch_assoc()) {
                                   $valid =1; 
                                 }
}
if($valid==0){
  $id="";
  $name="";
}
echo $id;
echo $name;
}
if($id=="" || $name==""){
  echo "<script>alert('not found');
  </script>";
  $valid=0;
}
if($valid==1){
$sql = "SELECT * FROM report WHERE p_id='$id'";
$x=0;
$result = $conn->query($sql);           
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        if($row['p_id']==$id){
                                          $Phone=$row['phone'];
                                          $age=$row['age'];
                                          $address=$row['address'];
                                          $zip=$row['zip'];
                                          $travel=$row['travel'];
                                          $medical=$row['medical'];
                                          $gender=$row['gender'];
                                          
                                          if($travel==0){
                                            $travel= "No Travel History";
                                          }
                                          elseif($travel==1){
                                            $sql = "SELECT * FROM travel WHERE p_id='$id'";
                                            $result = $conn->query($sql);           
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {

                                            $travel="from ".$row['from_place']." to ".$row['to_place'];
                                          }
                                        }
                                          }
                                          elseif($travel==2){
                                            $sql = "SELECT * FROM country WHERE p_id='$id'";
                                            $result = $conn->query($sql);           
                                            if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                            $travel="Visited the country ".$row['country'];
                                          }
                                        }
                                          }
                                          
                                          break;
                                          }
                                         
                                        }
                                      }
$sql= "SELECT * FROM region WHERE p_id='$id'";
$result = $conn->query($sql);           
                                  if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        $city=$row['city'];
                                        $state=$row['state'];
                                        }
                                      }



?>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>
        body, html {
          height: 100%;
          margin: 0;
        }
        .bg {
          background-image: url("covid.jpg");
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>
    <body class="bg">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" >COVID-19</a>
          </div>
          <ul class="nav navbar-nav">
             <li class="active"><a href="adm.php">Home</a></li>
            <li><a href="patient.php">patient search</a></li>
            <li><a href="admcase.php">total cases</a></li>
            <li><a href="admpat.php">patient list</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><div id="contact"><span class="glyphicon glyphicon-log-in"></span> Logout </font></div></a></li>
            </ul>
          
         </div> 
      </nav>
      <br><BR><BR>
     <div class="container">

    <form class="well form-horizontal" action="patient.php" method="post"  id="contact_form">
<fieldset>

<legend>Patient Details!</legend>
   <div class="form-group">
  <label class="col-md-4 control-label">Patient Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input placeholder="<?php echo $name;?>" class="form-control" type=text readonly>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">patient I'd</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input placeholder="<?php echo $id;?>" class="form-control" type=text readonly>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Family Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input placeholder="<?php echo $Phone ?>" class="form-control" type="number" readonly>
    </div>
  </div>
</div>
<div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input placeholder="<?php echo $gender ?>" class="form-control" type="text" readonly>
    </div>
  </div>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label">age</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
  <input placeholder="<?php echo $age ?>" class="form-control"  type="text" readonly>
    </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input placeholder="<?php echo $address ?>" class="form-control" type="text" readonly>
    </div>
  </div>
</div>
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input placeholder="<?php echo $city?>" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input placeholder="<?php echo $state?>" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input placeholder="<?php echo $zip?>" class="form-control" readonly>
    </div>
</div>
</div>

<div ng-app="" >
 <div class="form-group">
                        <label class="col-md-4 control-label">Do they have travel history?</label>
                        <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
     <input placeholder="<?php echo $travel;?>" class="form-control" type=text readonly>
    </div>
  </div>
  </div>
   <div class="form-group" ng-if="travel" ng-hide="stop">
    <label class="col-md-4 control-label">travel details</label>
    <div class="col-md-4 selectContainer">
  <br>
  <div class="input-group" ng-hide="country=='out of country'">
   
  </div>
  <div class="input-group" ng-if="country=='out of country'">
    <div >
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-import"></i></span>
  <input name="c_name" placeholder="Country name" class="form-control" type="text">
    </div>
  </div>
  </div>
</div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Medical History</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" placeholder="<?php echo $medical?>" readonly></textarea>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-log-out"></span> back to search </button>
  </div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
    </body>
</html>
<?php 
}
else{
  ?>
  <html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>
        body, html {
          height: 100%;
          margin: 0;
        }
        .bg {
          background-image: url("covid.jpg");
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>
    <body class="bg">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" >COVID-19</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="adm.php">Home</a></li>
            <li><a href="patient.php">patient details</a></li>
            <li><a href="">patients</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><div id="contact"><span class="glyphicon glyphicon-log-in"></span> Logout </font></div></a></li>
            </ul>
          
         </div> 
      </nav>
      <br><BR><BR>
   

 <div class="container">

    <form class="well form-horizontal" action="patient.php" method="post"  id="contact_form">




<div class="form-group">
  <h1><font>Enter Valid Details Or Patient has not submitted the details</h1>
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-log-out"></span> back to search </button>
  </div>
</div>
</form>
    </body>
</html>

<?php
}
?>