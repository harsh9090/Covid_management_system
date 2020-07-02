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
table, td { 
                border: 4px solid white; 
                text-align:center; 
            } 
td {
  color: black;
  padding: 10px; 
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
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </font></a></li>
            </ul>
         
         </div> 
      </nav>
      <br><BR><BR><BR>
      <?php 
      $servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ita_pro2";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$flag=0;
$sql="SELECT * from userdetail";
 $result = $conn->query($sql);
                                  
                                  if ($result->num_rows > 0) {
                                     echo "<table align=center cellpadding='15' cellspacing=\"10\" width=600>";
                                      echo "<tr align=center>";
                                      echo "<td><B><font size=4 color=blue>p_id<br></td>";
                                     echo "<td><B><font size=4 color=blue>p_name<br></td>";
                                     echo "<td><B><font size=4 color=blue>current status<br></td>";
                                     echo "<td><B><font size=4 color=blue>Affected<br></td>";
                                     echo "<td><B><font size=4 color=blue>recovered<br></td>";
                                     echo "<td><B><font size=4 color=blue>Death<br></td></tr>";
                                    while($row = $result->fetch_assoc()) {
                                      $dead=0;
                                       $id=$row['p_id'];
                                      $sql2="SELECT * from list";
                                      $result1=$conn->query($sql2);
                                      if($result1->num_rows>0){
                                        while($row1 = $result1->fetch_assoc()){
                                          if($row1['p_id']==$id){
                                          if($row1['death']==1){
                                            $dead=1;
                                          }
                                          elseif ($row1['recovered']==1) {
                                            $death=2;
                                          }
                                          else{
                                            $death=0;
                                          }
                                        }
                                        }
                                      }
                                      if($dead!=1){
                                    echo "<tr align=center>";
                                   
                                          echo "<td><font color=white>".$row['p_id']."<br></td>";
                                          echo "<td><font color=white>".$row['name']."<br></td>";
                                          if($death==2)
                                            echo "<td><font color=white>recovered<br></td>";
                                          else
                                            echo "<td><font color=white>affected<br></td>";
                                          ?>


                                          <form action="change.php" method="post"><?php
                                          echo "<td>
                                          <button class=\"btn btn-primary\" name=\"affected\" value=$id> Affected</button><br></td><td>
                                           <button value=$id class=\"btn btn-success\" name=\"recovered\"> recovered </button>
                                           <br></td>
                                           <td>
                                          <button value=$id class=\"btn btn-danger\" name=\"death\"> Death </button><br>
                                          </td>
                                          ";
                                      echo "</tr>";
                                     }
                                   }
                                      echo "</table>";
                                      }
                                    
                                  
                                  else {
                                      echo "0 results";
                                  }

                              
$conn->close();
?>
    </body>
</html>
<table cellspacing="10"></table>