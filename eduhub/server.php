<?php
session_start();


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['signup'])){
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$dpcon= new mysqli("localhost","id10912492_urk17cs308","Suraj@27499","id10912492_urk17cs308");
$query="insert into user2 values('$firstname','$lastname','$username','$password')";
$result= mysqli_query($dpcon,$query);
if($result!=true)
 echo "user already registered";
else {
//header("Location:loginpage.php ");
$_SESSION['firstname']=$firstname;
echo "Registration done";
}
}
?>
<html>
<head></head>
<body>
    <a href="loginpage.php">
Login/SignUp here
</a>
</body>
</html>