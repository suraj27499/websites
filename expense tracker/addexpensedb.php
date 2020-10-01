<?php
session_start();


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['addexpense'])){
$date=$_REQUEST['date'];
$item=$_REQUEST['item'];
$cost=$_REQUEST['cost'];
$email=$_SESSION['u'];

$dpcon= new mysqli("localhost","root","","suraj");
$query="insert into expense (email,item,cost,date) values('$email','$item','$cost','$date')";
$result= mysqli_query($dpcon,$query);
if($result!=true){
 echo "<script>
alert('Try again');
window.location.href='addexpenses.php';
</script>";
 
}else{ 
 echo "<script>
alert('Added Successfully');
window.location.href='addexpenses.php';
</script>";


}
}

?>
