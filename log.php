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
<script>
  function form(){
    
  }
</script>
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
        </style>
    <body class="bg" >
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
    <p style="margin-top: 50;">
      <img src="pic.jpg" align="left" height="450" width="800">
  </font>
</div>
      <p align=justify>
     &nbsp; &nbsp; COVID-19 is an infectious disease caused by severe acute respiratory syndrome coronavirus.
       The disease was first identified in December 2019 in Wuhan, the capital of China's Hubei province, and has since spread globally,
       resulting in the ongoing 2019-20 coronavirus pandemic. The first confirmed case of what was then an unknown coronavirus was
      traced back to November 2019 in Hubei province. Common symptoms include fever, cough, and shortness of breath. Other symptoms may include
      fatigue, muscle pain, diarrhoea, sore throat, loss of smell, and abdominal pain. The time from exposure to 
      onset of symptoms is typically around five days but may range from two to fourteen days. While the majority
       of cases result in mild symptoms, some progress to viral pneumonia and multi-organ failure.  As of 22 April 2020, more
        than 2.58 million cases have been reported across 185 countries and territories, resulting in more than 178,000 deaths.
         More than 693,000 people have recovered.<br>
         &nbsp; &nbsp; The virus is primarily spread between people during close contact, often via small droplets produced by coughing,
      sneezing, or talking. While these droplets are produced when breathing out, they usually fall to the ground or
       onto surfaces rather than remain in the air over long distances. People may also become infected by touching a 
       contaminated surface and then touching their eyes, nose, or mouth.The virus can survive on surfaces for up to 72
        hours. It is most contagious during the first three days after the onset of symptoms, although spread may be possible
         before symptoms appear and in later stages of the disease.<br>
         &nbsp; &nbsp; Recommendations for mask use by the general public vary, with some authorities recommending against their use, some recommending
         their use, and others requiring their use. Currently, there is no vaccine or specific antiviral treatment for COVID-19.
         Management involves treatment of symptoms, supportive care, isolation, and experimental measures.<br>
      </p>
    </p>
    </body>
</html>