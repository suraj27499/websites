<?php
if(isset($_POST['login'])){

$u=$_POST['username'];
$p=$_POST['password'];
$conn=new mysqli("localhost","id10912492_urk17cs308","Suraj@27499","id10912492_urk17cs308");
$q="select * from user2 where username ='$u' and password='$p' ";
$ro= mysqli_query($conn, $q);
if (mysqli_num_rows($ro) > 0)
{
session_start();
$_SESSION['u']=$u;
//echo "Welcome:".$_SESSION['u'];
header("Location:loggedin.php");

}
else
{
echo "username or password invalid";   
}
}
?>
<html>
<head></head>
<body>
    <a href="loginpage.php"><br>
Login here
</a>
</body>
</html>