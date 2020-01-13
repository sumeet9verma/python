<?php
include("connection.php");
session_start();
$user=$_SESSION['user'];
  if (isset($_POST['submit'])) 
  { 
 
    $key=$_POST['del'];
    $sql="DELETE FROM  booked where prn='$key' and username='$user'";
    $result=mysqli_query($conn,$sql);

    //echo "Sucessfully cancelled ";
 }
?>

<html>
<head>
	<style>
		input
		{
			width:60%;
			margin-top: 50px;
			margin-left:30px;
		}
		form button
		{
			margin-left:300px;
		}
	</style>
</head>

<body>
	<form action="" method="POST">
	<input type="number" width="90%"name="del" placeholder="type key number from booked history to a cancel ticket"><br><br>
	 
	 <button type="submit" name="submit" value="submit">submit
</button>
</form>
</body>
</html>
<!--<?php
/*include("connection.php");
$key=$_POST['del'];
$sql="delete from booked where key='$key'";
$result=mysqli_query($conn,$sql);
echo "Sucessfully deleted";



*/
?>-->
