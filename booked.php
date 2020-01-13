<?php
// after entering train number user click on booked ticked.
include("connection.php");
session_start();
//$train_so=$_SESSION['train_so'];
//$train_des=$_SESSION['train_des'];
/*$_SESSION['train_so']=$_POST['departure'];
$_SESSION['train_des']=$_POST['destination'];
$_SESSION['passenger']=$_POST['no_passenger'];
$_SESSION['class']=$_POST['coach'];*/

$username=$_SESSION['user'];
$train_no=$_SESSION['trainno'];
$class=$_SESSION['class'];
$passenger=$_SESSION['passenger'];
$date=$_SESSION['date'];
//$_SESSION['trainno']=$train_no;

$sql="select * from available_train where `train no`=$train_no";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
echo "<br><br>";
echo $total;

 $row=mysqli_fetch_assoc($result);
$tain_name=$row['train name'];
$source=$row['source'];
$destination=$row['destination'];
/*if($class=="I AC")
{
	echo "1st ac";
}*/
if($total==1)
{  
   if($class=="I AC")
  {
	$cost=$passenger*$row['fare1'];
	echo "<br><br>";
	echo "total cost $cost";
  }
  if($class=="II AC")
  {
	$cost=$passenger*$row['fare2'];
	echo "<br><br>";
	echo "total cost $cost";
  }
  if($class=="III AC")
  {
	$cost=$passenger*$row['fare3'];
	echo "<br><br>";
	echo "total cost $cost";
  }

	$sql="insert into booked (`Username`,`train no`,`class`,`passengers`,`cost`,`date`)	values('$username','$train_no','$class','$passenger','$cost','$date')";
	$result=mysqli_query($conn,$sql);
    echo "booked tickect";
}



?>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input 
{
color: blue;

position: relative;
    left: 200px;	
    margin-left:150px; 
}
</style>
</head>
<body><br>
	<h1 align="center">Successfully booked please download</h1>
	<table border=2 width=900px>
		<tr>
			<th>User name</th>
			<td align="center"> <?php echo $username;?></td>
		</tr>
		<tr>
			<th>Number of passenger</th>
			<td align="center"> <?php echo $passenger;?></td>
		</tr>
		<tr>
			<th>Train Number</th>
			<td align="center"><?php echo $train_no;?></td>
		</tr>
		<tr>
			<th>Train Name</th>
			<td align="center"> <?php echo $tain_name;?></td>
		</tr>
		<tr>
			<th>Class</th>
			<td align="center"> <?php echo $class;?></td>
		</tr>
		<tr>
			<th>Date</th>
			<td align="center"> <?php echo $date;?></td>
		</tr>
		<tr>
			<th>Source</th>
			<td align="center"> <?php echo $source;?></td>
		</tr>
		<tr>
			<th>Destination</th>
			<td align="center"> <?php echo $destination;?></td>
		</tr>
		<tr>
			<th>Date</th>
			<td align="center"><?php echo $date;?></td>
		</tr>
		<tr>
			<th>Total Cost</th>
			<td align="center"> Rs <?php echo $cost;?></td>
		</tr>
	</table>
	<br>
	<form action="pdf.php" target="_blank">
	<input type="submit" value="Please download your ticket" height="48" id="ticket" >
</form>
</body>
</html>