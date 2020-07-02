<?php
session_start();
if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
}
else{
   header("location: http://localhost:8080/ITA_PRO/home.php");
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

    <form class="well form-horizontal" action="search.php" method="post"  id="contact_form">
<fieldset>

<legend>Patient Details!</legend>

	<div ng-app="">
	<div class="form-group">
                        <label class="col-md-4 control-label">Patient I'd or Patient name</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="detail" value="id" ng-model="total"> Patient I'd
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="detail" value="name" ng-model="total"> Patient Name
                                </label>
                            </div>
                        </div>
  </div>
  <div class="form-group" ng-if="total=='id'">
  	<div >
  <label class="col-md-4 control-label">Patient Adhar number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="id" placeholder="patient id" class="form-control" type="number" maxdigit="11">
    </div>
  </div>
</div>
</div>
<div class="form-group" ng-if="total=='name'">
<div >
  <label class="col-md-4 control-label">Patient name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" placeholder="Patient name" class="form-control" type="text">
    </div>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-log-out"></span> search </button>
  </div>
</div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
    </body>
</html>