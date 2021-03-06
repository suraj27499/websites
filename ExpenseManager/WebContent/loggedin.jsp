<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
  <title>ExpenseManager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
      
body {
  font-family: "Lato", sans-serif;
   width:100%;
        height: auto;
        background-image: url("https://www.thesitsgirls.com/wp-content/uploads/2011/05/Welcome.jpg");
        background-size: cover;
        background-repeat: no-repeat;
}

.sidenav {
  height: 93.2%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #292929;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color:#292929;
       color: white;
       text-align: left;
       height: 50px;
    }
    </style>
</head>


<body>
<%
response.setHeader("Cache-Control","no-cache,no-store,must-revalidate");
if(session.getAttribute("username")==null){
	response.sendRedirect("loginpage.jsp");
}
	%>

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="loggedin.php">Expense Manager</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="loggedin.php">Home</a></li>
    </ul>
    <div id='login' style="color:white;position: absolute;right: 0px;padding: 15px" >
    <i class="fa fa-user-circle-o" aria-hidden="true" style='color:white'></i>
    ${username} &nbsp;&nbsp;|&nbsp;<a href='logout.jsp' id='anchor' style='color:white;text-decoration: none' >Log Out</a>
  </div>
  </div>
</nav>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="addexpenses.jsp">Add Expenses</a>
  <a href="manageexpenses.jsp">Manage Expenses</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="footer">
  <div id="phoneicon"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i><a href="tel to" style="text-decoration: none;color: white">&nbsp;&nbsp;+917903137936</a></div>
  <div id="mailicon"><i class="fa fa-envelope" aria-hidden="true" style="color: white"></i><a href="mail to" style="text-decoration: none;color: white">&nbsp;&nbsp;&nbsp;surajkumardubey27499@gmail.com</a></div>
</div>
</body>
<script>
  window.onUsersnapCXLoad = function(api) {
    api.init();
  }
  var script = document.createElement('script');
  script.async = 1;
  script.src = 'https://widget.usersnap.com/load/19a4b622-d48f-4884-87d6-2d53b504ef48?onload=onUsersnapCXLoad';
  document.getElementsByTagName('head')[0].appendChild(script);
</script>
</html>