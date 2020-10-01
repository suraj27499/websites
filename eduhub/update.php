<?php



if(isset($_POST['update'])){
$username=$_POST['username'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$dpcon= new mysqli("localhost","id10912492_urk17cs308","Suraj@27499","id10912492_urk17cs308");
 $query="update user2 set password='$newpassword' where username='$username' and password='$oldpassword'";
   $result=mysqli_query($dpcon, $query);
   $no_rows=mysqli_affected_rows($dpcon); 
   if($no_rows>0)
       echo "Password Changed Successfully";
   else
       echo " invalid username or password";
}


?>
<html>
<head></head>
<body>
    
    <a href="updatepassword.php"><br>
Try Again!
    </a>
    <br>
    <a href="index.php">Home page</a>
    
    
</body>
</html>
