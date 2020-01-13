<?php
include("connection.php");
session_start();
$train_no=$_POST['train_no'];
$_SESSION['trainno']=$train_no;
//echo $_SESSION['trainno'];
$sql="select * from available_train where `train no`=$train_no";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
//echo $total;
if($total==1)
{
   header("Location:booked.php");

}
else
{
	echo "<br><h1>Sorry you have entered wrong train number please try again!</h1>";
}


?>

