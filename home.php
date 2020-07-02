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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="case.php">total cases</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><div id="contact"><span class="glyphicon glyphicon-log-in"></span> Login </font></div></a></li>
              <li><a href="#"><div id="contact2"><span class="glyphicon glyphicon-log-in"></span> Register </font></div></a></li>
            </ul>
          
         </div> 
      </nav>
    <p style="margin-top: 50;">
      <img src="pic.jpg" align="left" height="450" width="800">
      <script>
      $(function() {
  
  $('#contact').click(function() {
    $('#contactForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
  $('#contact2').click(function() {
    $('#contactForm2').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm2");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});
      </script>
<style>
@import "https://fonts.googleapis.com/css?family=Raleway";
* { box-sizing: border-box; }


#contact:hover { background: #666; }
#contact:active { background: #444; }

#contactForm { 
  display: none;

  border: 6px solid salmon; 
  padding: 2em;
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}

#contactForm2 { 
  display: none;

  border: 6px solid salmon; 
  padding: 2em;
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}

input, textarea { 
  margin: .8em auto;
  font-family: inherit; 
  text-transform: inherit; 
  font-size: inherit;
  
  display: block; 
  width: 280px; 
  padding: .4em;
}
textarea { height: 80px; resize: none; }

.formBtn { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #fff;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  height: 30px;
}
</style>
<div id="contactForm">
  <form action="login.php" method="post"><font color=black>
  <h1 align=center>Login</h1>
    <input placeholder="adhar number" type="number" name="l-email" required />
    <input placeholder="password" type="password" name="l-password" required />

    <input class="formBtn" type="submit" />
    <input class="formBtn" type="reset" />
  </form>
  </font>
</div>
<div id="contactForm2">
  <form action="register.php" method="post"><font color=black>
  <h1 align=center>Register</h1>
    <input type="text" name="name" placeholder="name" required/>
    <input type="number" name="adhar" placeholder="adhar number" required />
    <input type="number" name="phone" placeholder="phone number" required />
    <input placeholder="email" type="email" name="email" required />
    <input placeholder="password" id="pass" type="password" name="pass" required />
    <input placeholder="reenter password" id="pass2" type="password" name="pass2" required />
    <input class="formBtn" type="submit" onclick="form1()" />
    <input class="formBtn" type="reset" />
  </form>
  <script type="text/javascript">
    function form1(){
     var pass= document.getElementById("pass").value;
     var pass2= document.getElementById("pass2").value;
     if(pass!= pass2){
      alert("not same reenter password");
     }
     else{
      alert("submitted sucessfully");
     }
    }
  </script>
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