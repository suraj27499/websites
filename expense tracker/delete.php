      <?php
      session_start();
if(!isset($_POST['deleterowbtn'])){
    header('location:manageexpenses.php');
}else{

$key=$_REQUEST['keyTodelete'];

  
$email=$_SESSION['u'];
$dpcon= new mysqli("localhost","root","","suraj");
$query="delete from expense where  id='$key'";
$result= mysqli_query($dpcon,$query);
if($result!=true){
      echo "<script>
alert('Unable to delete. Try Again!');
window.location.href='loggedin.php';
</script>";
 
}else{

header('Location:manageexpenses.php');

}
}
?>