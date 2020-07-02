<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
        ::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}
input::-webkit-input-placeholder{
    color:red;
}
input:-moz-placeholder {
    color:red;
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
           <li class="active"><a href="log.php">Home</a></li>
            <li><a href="form.php">add details</a></li>
            <li><a href="ucase.php">total cases</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</font></a></li>
            </ul>
         </div> 
      </nav>
      <br><BR><BR>
     <div class="container">

    <form class="well form-horizontal" action="ucase.php" method="post"  id="contact_form">
<fieldset>

<legend>Patient Details!</legend>

  <div ng-app="">
  <div class="form-group">
                        <label class="col-md-4 control-label">Search type</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="case" value="all" ng-model="all">All case
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="case" value="area" ng-model="all"> AreaWise case
                                </label>
                            </div>
                        </div>
  </div>
  <div ng-if="all=='all'" class="form-group">
  <label class="col-md-4 control-label">TOTAL CASES:-</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input placeholder="<?php
  $sql="SELECT p_id from region";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        $num++;
                                      }
                                    }
echo $num;
   ?>" class="form-control" type="text" readonly>
    </div>
  </div>
</div>
 <div ng-if="all=='all'" class="form-group">
  <label class="col-md-4 control-label">AFFECTED:-</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input placeholder="<?php
  $sql="SELECT p_id from list WHERE affected='1'";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        $num++;
                                      }
                                    }
echo $num;
   ?>" class="form-control" type="text" readonly>
    </div>
  </div>
</div>
 <div ng-if="all=='all'" class="form-group">
  <label class="col-md-4 control-label">RECOVERED:-</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input placeholder="<?php
  $sql="SELECT p_id from list WHERE recovered='1'";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        $num++;
                                      }
                                    }
echo $num;
   ?>" class="form-control" type="text" readonly>
    </div>
  </div>
</div>
 <div ng-if="all=='all'" class="form-group">
  <label class="col-md-4 control-label">DEATH:-</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input placeholder="<?php
  $sql="SELECT p_id from list WHERE death='1'";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        $num++;
                                      }
                                    }
echo $num;
   ?>" class="form-control" type="text" readonly>
    </div>
  </div>
</div>
<div ng-if="all=='area'">
                       <div class="form-group">
                        <label class="col-md-4 control-label">Search by</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="region" value="state" ng-model="st">State
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="region" value="city" ng-model="st">City
                                </label>
                            </div>
                        </div>
  </div>
<div ng-if="st=='state'" class="form-group"> 
  <label  class="col-md-4 control-label">Area Name:-</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="st" id="st" onchange="showHint(this.value)" value=" " class="form-control selectpicker" ng-model="stateName">

      <?php
      
      $sql="SELECT DISTINCT state FROM region";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        ?>
      <option value="<?php
      $state=$row['state'];
       echo $state;?>" ><?php
      $state=$row['state'];
       echo $state;?></option>
      <?php                                  
        }
      }
       ?>
    </select>
  </div>
</div>
<br><br>
<div ng-hide="!stateName">
<label class="col-md-4 control-label">TOTAL CASES:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data= this.responseText.split(" ");
        document.getElementById("sta").placeholder = data[0];
        document.getElementById("sta_aft").placeholder = data[1];
        document.getElementById("sta_rec").placeholder = data[2];
        document.getElementById("sta_death").placeholder = data[3];
      }
    }
    xmlhttp.open("GET", "state.php?q="+str, true);
    xmlhttp.send();
  }
}
function showCity(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         var data= this.responseText.split(" ");
        document.getElementById("cit").placeholder = data[0];
        document.getElementById("cit_aft").placeholder = data[1];
        document.getElementById("cit_rec").placeholder = data[2];
        document.getElementById("cit_death").placeholder = data[3];
      }
    }
    xmlhttp.open("GET", "city.php?q1="+str, true);
    xmlhttp.send();
  }
}
</script>
  <input id="sta" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>

<div ng-hide="!stateName">
<label class="col-md-4 control-label">AFFECTED:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="sta_aft" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>


<div ng-hide="!stateName">
<label class="col-md-4 control-label">RECOVERED:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="sta_rec" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>



<div ng-hide="!stateName">
<label class="col-md-4 control-label">DEATH:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="sta_death" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

</div>



<div ng-if="st=='city'" class="form-group"> 
  <label  class="col-md-4 control-label">Area Name:-</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="cty" id="cty" onchange="showCity(this.value)" value=" " class="form-control selectpicker" ng-model="cityName">

      <?php
      
      $sql="SELECT DISTINCT city FROM region";
  $result=$conn->query($sql);
  $num=0;
   if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                        ?>
      <option value="<?php
      $state=$row['city'];
       echo $state;?>" ><?php
      $state=$row['city'];
       echo $state;?></option>
      <?php                                  
        }
      }
       ?>
    </select>
  </div>
</div>
<br><br>
<div ng-if="cityName">
<label class="col-md-4 control-label">TOTAL CASES:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input id="cit" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>

<div ng-if="cityName">
<label class="col-md-4 control-label">AFFECTED:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input id="cit_aft" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>

<div ng-if="cityName">
<label class="col-md-4 control-label">RECOVERED:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input id="cit_rec" class="form-control"  type="text" readonly>
    </div>
  </div>
  <br><br>
</div>

<div ng-if="cityName">
<label class="col-md-4 control-label">DEATH:-</label>  
<div  class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input id="cit_death" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>
</div>


</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-log-out"></span> clear </button>
  </div>
</div>
</div>
</fieldset>
</form>
</div>
    </div>
    </body>
</html>