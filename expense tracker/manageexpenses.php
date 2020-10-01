


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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
      
body {
  font-family: "Lato", sans-serif;
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
    th{
        background-color: #DC143C;
    }

    </style>
</head>


<body>

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
    <?php echo $_SESSION['u']; ?> &nbsp;&nbsp;|&nbsp;<a href='logout.php' id='anchor' style='color:white;text-decoration: none' >Log Out</a>
  </div>
</nav>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="addexpenses.php">Add Expenses</a>
  <a href="manageexpenses.php">Manage Expenses</a>
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

<div class="container">
  <h2 style="color:dodgerblue">Expense Report</h2>
  <p>Here are all your expenses</p> 
  
  <?php 
  
  ?>
  <table class="table table-bordered">
    <thead>
      <tr>
          <th>S. No.</th>
        <th>Expense Item</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Check to delete</th>
        <th>Delete</th>
      </tr>
    </thead>
    <?php
$email=$_SESSION['u'];
$dpcon= new mysqli("localhost","root","","suraj");
$query="select item,cost,date from expense where email='$email'";
$result= mysqli_query($dpcon,$query);
if($result!=true){
 echo "<script>
alert('Try again');
window.location.href='addexpenses.php';
</script>";
 
}else{ 
    $counter=1;
while($row = mysqli_fetch_array($result)){?>
    
       <tbody>
       <form action='delete.php' method='post' role="form">
      <tr>
      <td><?php echo $counter ?></td>
      <td><?php echo $row['item'] ?></td>
      <td><?php echo $row['cost'] ?></td>
      <td><?php echo $row['date'] ?></td>
      <td><input type="checkbox" name="keyTodelete" value="<?php echo $row['id'];?>" required></td>
      <td><button style="background-color:dodgerblue" type="submit"   name="deleterowbtn" class="btn btn-info">Delete</button></td>
      </tr>
      </form>
      </tbody>
     <?php $counter++;
}


}


?>
  </table>
</div>


    


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

