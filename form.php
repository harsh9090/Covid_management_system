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
       #success_message{ display: none;}
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
              <li><a href="logout.php"><div id="contact"><span class="glyphicon glyphicon-log-in"></span> Logout </font></div></a></li>
            </ul>
          
         </div> 
      </nav>
      <br><BR><BR>
     <div class="container">

    <form class="well form-horizontal" action="form1.php" method="post"  id="contact_form">
<fieldset>

<legend>Fill Details!</legend>

       
<div class="form-group">
  <label class="col-md-4 control-label">Family Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneNo" placeholder="(+91)0000000000" class="form-control" type="number" maxdigit="11">
    </div>
  </div>
</div>
<div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male"> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female"> Female
                                </label>
                            </div>
                        </div>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label">age</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="age" placeholder="age" class="form-control"  type="number" min="1" max="100">
    </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>

      <option>Gujarat</option>
      <option>Andhra Pradesh</option>
      <option>Arunachal Pradesh</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Chhattisgarh</option>
      <option>Goa</option>
      <option>Haryana</option>
      <option>Himachal pradesh</option>
      <option>Jammu and kashmir</option>
      <option>Jharkhand</option>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Madhya pradesh</option>
      <option>Maharastra</option>
      <option>Manipur</option>
      <option>Meghalaya</option>
      <option>Mizoram</option>
      <option>Nagaland</option>
      <option>Odisha</option>
      <option>Punjab</option>
      <option>Rajesthan</option>
      <option>Sikkim</option>
      <option>Tamilnadu</option>
      <option>Telangana</option>
      <option>Tripura</option>
      <option>Uttar pradesh</option>
      <option>Uttarakhand</option>
      <option>West bangal</option>

    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="number" min="000001" max="999999">
    </div>
</div>
</div>

<div ng-app="" >
 <div class="form-group">
                        <label class="col-md-4 control-label">Do you have travel history?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="travel" value="yes" ng-model="travel"> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="travel" value="no" ng-model="travel"> No
                                </label>
                            </div>
                        </div>
  </div>
   <div class="form-group" ng-if="travel=='yes'" >
    <label class="col-md-4 control-label">travel details</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-export"></i></span>
    <select placeholder="from" name="from" class="form-control selectpicker" ng-model="country">
      <option>out of country</option>
      <option>Gujarat</option>
      <option>Andhra Pradesh</option>
      <option>Arunachal Pradesh</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Chhattisgarh</option>
      <option>Goa</option>
      <option>Haryana</option>
      <option>Himachal pradesh</option>
      <option>Jammu and kashmir</option>
      <option>Jharkhand</option>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Madhya pradesh</option>
      <option>Maharastra</option>
      <option>Manipur</option>
      <option>Meghalaya</option>
      <option>Mizoram</option>
      <option>Nagaland</option>
      <option>Odisha</option>
      <option>Punjab</option>
      <option>Rajesthan</option>
      <option>Sikkim</option>
      <option>Tamilnadu</option>
      <option>Telangana</option>
      <option>Tripura</option>
      <option>Uttar pradesh</option>
      <option>Uttarakhand</option>
      <option>West bangal</option>
    </select>
  </div>
  <br>
  <div class="input-group" ng-hide="country=='out of country'">
        <span class="input-group-addon"><i class="glyphicon glyphicon-import"></i></span>
    <select name="to" class="form-control selectpicker" >
      <option value=" " >to</option><br>
      <option>Gujarat</option>
      <option>Andhra Pradesh</option>
      <option>Arunachal Pradesh</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Chhattisgarh</option>
      <option>Goa</option>
      <option>Haryana</option>
      <option>Himachal pradesh</option>
      <option>Jammu and kashmir</option>
      <option>Jharkhand</option>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Madhya pradesh</option>
      <option>Maharastra</option>
      <option>Manipur</option>
      <option>Meghalaya</option>
      <option>Mizoram</option>
      <option>Nagaland</option>
      <option>Odisha</option>
      <option>Punjab</option>
      <option>Rajesthan</option>
      <option>Sikkim</option>
      <option>Tamilnadu</option>
      <option>Telangana</option>
      <option>Tripura</option>
      <option>Uttar pradesh</option>
      <option>Uttarakhand</option>
      <option>West bangal</option>
    </select>
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
          <textarea class="form-control" name="history" placeholder="Medical history"></textarea>
  </div>
  </div>
</div>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    </body>
</html>