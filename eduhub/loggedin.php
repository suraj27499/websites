<?php
session_start();

if(!isset($_SESSION['u'])){
   header('location:index.php');
   exit();
}
?>
     <!DOCTYPE html>

<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--bootstrap drop down menu -->
  
         
    </head>
    <body>
        <div id="top">
            <div id="phoneicon"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i><a href="tel to" style="text-decoration: none;color: white">&nbsp;&nbsp;+918186862986</a></div>
            <div id="mailicon"><i class="fa fa-envelope" aria-hidden="true" style="color: white"></i><a href="mail to" style="text-decoration: none;color: white">&nbsp;&nbsp;&nbsp;girishreddy1218@gmail.com</a></div>
            <div id='login' style='margin-left: 80%;color:white;'><i class="fa fa-user-circle-o" aria-hidden="true" style='color:white'></i>&nbsp;&nbsp; <?php echo $_SESSION['u']; ?> &nbsp;&nbsp;<a href='logout.php' id='anchor' style='color:blue;text-decoration: none' >Log Out
                
              
      
        </div>
        <div class="navbar">
                      <a href="loggedin.php" style="color: white; font-family: sans-serif bold;text-decoration: none;font-size: 15px;">Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="about.php" style="color: white; font-family: sans-serif bold;text-decoration: none;font-size: 15px;">About&nbsp;&nbsp;&nbsp;&nbsp;</a>
              
            
            <div class="dropdown">
  <button class="dropbtn">Courses&nbsp;&nbsp;&nbsp;</button>
  <div class="dropdown-content">
      
     <a href="c++.php">C++</a>
    <a href="java.php">JAVA</a>
   
  </div>
</div>
                  <a href="contact.php" style="color: white; font-family: sans-serif bold;text-decoration: none;font-size: 15px;">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a>
  
 
   
        </div>
        
        <div id="banners">
        <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://image.shutterstock.com/image-photo/portrait-female-college-student-smiling-260nw-462360148.jpg" alt="Los Angeles" style="width:100%; height:400px">
      </div>

      <div class="item">
        <img src="https://image.shutterstock.com/image-photo/portrait-female-college-student-smiling-260nw-462360148.jpg" alt="Chicago" style="width:100%; height: 400px">
      </div>
    
      <div class="item">
        <img src="https://image.shutterstock.com/image-photo/portrait-female-college-student-smiling-260nw-462360148.jpg" alt="New york" style="width:100%; height: 400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        </div>

  
 <script>
  window.onUsersnapCXLoad = function(api) {
    api.init();
  }
  var script = document.createElement('script');
  script.async = 1;
  script.src = 'https://widget.usersnap.com/load/19a4b622-d48f-4884-87d6-2d53b504ef48?onload=onUsersnapCXLoad';
  document.getElementsByTagName('head')[0].appendChild(script);
</script>
    </body>
    

</html>

