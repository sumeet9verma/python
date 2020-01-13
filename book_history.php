<?php
include("connection.php");
session_start();
$user=$_SESSION['user'];
//$train_no=$_SESSION['trainno'];
//$train_name=$des=$source=$des="";
/*SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID
ORDER BY Customers.CustomerName;*/
$sql="select * from booked where Username='$user'";
$result=mysqli_query($conn,$sql);
//$sql1="select * from available_train where Username='$user' and `train no`='$train_no'";
//$result1=mysqli_query($conn,$sql1);


$total=mysqli_num_rows($result);
echo $total;
if($total==0)
{
	echo "<h1>sorry you didn't booked any ticket</h1>";
}
else
{
    echo "<html>";

echo "<head>";
echo "<style>";
echo "table {";
  echo "font-family: arial, sans-serif;";
  echo "border-collapse: collapse;";
  echo "width: 100%;";
echo "}";

echo "td, th {";
 echo" border: 1px solid #dddddd;";
  echo "text-align: left;";
  echo "padding: 8px;";
echo "}";

echo "tr:nth-child(even) {";
  echo "background-color: #dddddd;";
echo "}";
echo "</style>";
echo "</head>";



	 	  echo "<body>";
	 	  echo  "<table border=2 width=900px>";
	 	     echo  "<tr>";
                  echo "<th>key</th>";
                  echo "<th >Train number</th>";
                  echo "<th>Train name</th>";
                  echo "<th>Source</th>";
                  echo "<th>Destination</th>";
                  
                  echo "<th>Date and Time of booking</th>";
                  echo "<th>Journey date</th>";
                  echo "<th>Number of passengers</th>";
                  echo "<th>Class</th>";
                   echo "<th>Cost</th>";
               echo  "</tr>";
               //$row1=mysqli_fetch_assoc($result1);
	 while($row=mysqli_fetch_assoc($result))
	 {    if($row['train no']==12310)
          {
             $train_name="Rjpb Rajdhani";
             $source="New Delhi";
             $des="Patna JN";
            }
            if($row['train no']==12311)
          {
             $train_name="Rjpb Rajdhani";
             $source="Patna JN";
             $des="New Delhi";
            }
            if($row['train no']==15484)
           {
             $train_name="MAHANANDA EXP";
             $source="New Delhi";
             $des="Patna JN";
            }
            if($row['train no']==12953)
            {
             $train_name="august kranti rajdhani express";
             $source="Mumbai";
             $des="New Delhi";
            }
            if($row['train no']==12951)
            {
             $train_name="august kranti rajdhani express";
             $source="New Delhi";
             $des="Mumbai";
            }
             if($row['train no']==12322)
            {
             $train_name="Kolkata Mail";
             $source="Mumbai";
             $des="Gaya";
            }
            if($row['train no']==12312)
            {
             $train_name="Kolkata Mail";
             $source="Gaya";
             $des="Mumbai";
            }


       echo "<td>".$row['prn']."</td>";
	 	   echo "<td>".$row['train no']."</td>";
	 	   echo "<td>".$train_name."</td>";
	 	   echo "<td>".$source."</td>";
	 	   echo "<td>".$des."</td>";
	 	   echo "<td>".$row['time']."</td>";
       echo "<td>".$row['date']."</td>";
	 	   echo "<td>".$row['passengers']."</td>";
	 	   echo "<td>".$row['class']."</td>";
	 	   echo "<td>".$row['cost']."</td>";
	 	  
	 	   echo "<tr>";
          

	 	 
	     //echo "<br>".$row['train no']." ". ; 
          
	  }

	   echo  "</table>";
	 	  echo  "</body>";
	 	  echo   "</html>"; 
}

	
   

?>

<!--
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
  	<th>Train name</th>
    <td><?php   echo $row['train no']; ?></td>
    
    
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
</html>-->