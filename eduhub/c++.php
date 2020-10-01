<?php
session_start();

if(!isset($_SESSION['u'])){
   header('location:index.php');
   exit();
}
?>>      
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="c++.js"></script>
  <!--bootstrap drop down menu -->
  <style>
      input:focus{
          outline: none;
      }
      body{
          background-color: gray;
      }
  </style>
  
         
    </head>
    <body>
        <div id="top">
            <div id="phoneicon"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i><a href="tel to" style="text-decoration: none;color: white">&nbsp;&nbsp;+918186862986</a></div>
            <div id="mailicon"><i class="fa fa-envelope" aria-hidden="true" style="color: white"></i><a href="mail to" style="text-decoration: none;color: white">&nbsp;&nbsp;&nbsp;girishreddy1218@gmail.com</a></div>
            <div id='login' style='margin-left: 80%;color:white;'><i class="fa fa-user-circle-o" aria-hidden="true" style='color:white'></i>&nbsp;&nbsp; <?php echo $_SESSION['u']; ?>&nbsp;&nbsp;<a href='logout.php' id='anchor' style='color:blue;text-decoration: none' >Log Out
                
              
      
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
  
  
</div>
        </div>
            

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for videos" style="position: absolute;margin-top: -200px;width:400px;margin-left:700px;border-radius: 20px;border-color: red;">

<table  id="myTable" style="margin-top: -150px;margin-left: 400px;">
  
  <tr>
      <td style="color: gray">introduction</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/-vgzBOcEzQc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></td>
  </tr>
  <tr>
    <td style="color: gray">oops concept/classes and objects</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/h4kUiFOb_v0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></td>
  </tr>
  <tr>
    <td style="color: gray">Polymorphism</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/uc_Hr10cBBE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div></td>
  </tr>
  <tr>
    <td style="color: gray">inheritence</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/rr7HVs4d1Qo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div></td>
  </tr>
  <tr>
    <td style="color: gray">Abstraction/virtual functions</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/JU8DbwBvOWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"</iframe> </div></td>
  </tr>
  <tr>
    <td style="color: gray">encapsulation</td>
    <td><div><iframe width="500" height="200" src="https://www.youtube.com/embed/ZhTB24eWJ58" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" </iframe> </div></td>
  </tr>
</table>
            

  
        
    </body>
</html>

