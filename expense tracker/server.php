<?php
session_start();


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['signup'])){
$name=$_REQUEST['name'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];
if($cpassword!=$password){
  echo "<script> alert('Passwords doesnot match');
window.location.href='signup_page.php';
</script>";
}else{
$dpcon= new mysqli("localhost","root","","suraj");
$q="select * from user where email ='$username'  ";
$ro= mysqli_query($dpcon, $q);
if (mysqli_num_rows($ro) > 0){
 echo "<script>
alert('User already exists');
window.location.href='signup_page.php';
</script>";
    
} else {
 $query="insert into user values('$name','$username','$password')";
$result= mysqli_query($dpcon,$query);
if($result!=true){
 echo "<script>
alert('Try again');
window.location.href='signup_page.php';
</script>";
 
}   
else {
$_SESSION['firstname']=$name;
 echo "<script>
alert('Registered successfully');
window.location.href='loginpage.php';
</script>";

}
}
}
}
?>
