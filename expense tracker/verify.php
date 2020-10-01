<?php
if(isset($_POST['login'])){

$u=$_POST['username'];
$p=$_POST['password'];
$conn=new mysqli("localhost","root","","suraj");
$q="select * from user where email ='$u' and password='$p' ";
$ro= mysqli_query($conn, $q);
if (mysqli_num_rows($ro) > 0)
{
session_start();
$_SESSION['u']=$u;
header("Location:loggedin.php");

}
else
{
 echo "<script>
alert('Invalid username or password');
window.location.href='loginpage.php';
</script>";  
}
}
?>
