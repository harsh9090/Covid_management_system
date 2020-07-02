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

    <style>
        body, html {
          height: 100%;
          margin: 0;
          color: white;
        }
        
        .bg {
          background-image: url("covid.jpg");
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        .blink {
  animation: blink-animation 0.5s steps(5, start) infinite;
  -webkit-animation: blink-animation 0.5s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
        </style>
    <body class="bg" >
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
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</font></a></li>
            </ul>
         </div> 
      </nav>
      <br><BR><BR><BR><blink>
       <marquee scrollamount=30> <h1 class="blink">Hello, Doctor <?php
          $name=$_SESSION['name'];
          echo "$name";
           ?></h1> </marquee>
    </body>
</html>