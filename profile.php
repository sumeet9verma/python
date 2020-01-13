<?php
include("connection.php");
session_start();
$user=$_SESSION['user'];
$sql="select * from signup where Username='$user'";
$result=mysqli_query($conn,$sql);

$row=mysqli_num_rows($result);
    

	 $row=mysqli_fetch_assoc($result);

   echo "<br>";

?>

<html>
<head>
<title>profile</title>
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
</style>
</head>
</head>
<body>
	<table style="width:100%" border="4px">
  
  
  <tr>
  	<th>Name</th>
    <td><?php   echo $row['Name']; ?></td>
    
    
  </tr>
  <tr>
    <th>Gender</th>
    <td><?php   echo $row['Gender']; ?></td>
   
  </tr>
  <tr>
    <th>Mobile number</th>
    <td><?php   echo $row['Phone Number']; ?></td>
    
  </tr>
 <tr>
    <th>Email</th>
    <td><?php   echo $row['email']; ?></td>
    
  </tr>
   <tr>
    <th>Adhar number</th>
    <td><?php   echo $row['Adhar number']; ?></td>
    
  </tr>
  <tr>
    <th>City</th>
    <td><?php   echo $row['City']; ?></td>
    
  </tr>
   
 
</table>


</body>
</html>