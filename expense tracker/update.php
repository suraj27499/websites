<?php



if(isset($_POST['update'])){
$username=$_POST['username'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$dpcon= new mysqli("localhost","root","","suraj");
 $query="update user set password='$newpassword' where email='$username' and password='$oldpassword'";
   $result=mysqli_query($dpcon, $query);
   $no_rows=mysqli_affected_rows($dpcon); 
   if($no_rows>0){
    echo "<script>
alert('Password changed successfully');
window.location.href='loginpage.php';
</script>";
   }
   else{
        echo "<script>
alert('Invalid username or password');
window.location.href='loginpage.php';
</script>";
   }
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
