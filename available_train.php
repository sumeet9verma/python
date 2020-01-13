<?php
include("connection.php");
session_start();
//$_SESSION['train_so']=$_POST['departure'];
//$_SESSION['train_des']=$_POST['destination'];
$train_so=$_SESSION['train_so'];
$train_des=$_SESSION['train_des'];
$tier=$_SESSION['class'];
echo "<br><br>";


$sql="select * from available_train where source='$train_so' and destination='$train_des'";
$result=mysqli_query($conn,$sql);

$total=mysqli_num_rows($result);
    
    echo $total;
if(mysqli_num_rows($result)>0)
{     echo "<html>";
	 	  echo "<body>";
	 	  echo  "<table border=2 width=900px>";
	 	     echo  "<tr>";
                  echo "<th >Train number</th>";
                  echo "<th>Train name</th>";
                  echo "<th>Source</th>";
                  echo "<th>Destination</th>";
                  echo "<th>I AC Fare</th>";
                  echo "<th>II AC Fare</th>";
                  echo "<th>III AC Fare</th>";
               echo  "</tr>";
	 while($row=mysqli_fetch_assoc($result))
	 {  
	 	   echo "<td>".$row['train no']."</td>";
	 	   echo "<td>".$row['train name']."</td>";
	 	   echo "<td>".$row['source']."</td>";
	 	   echo "<td>".$row['destination']."</td>";
	 	   echo "<td>".$row['fare1']."</td>";
	 	   echo "<td>".$row['fare2']."</td>";
	 	   echo "<td>".$row['fare3']."</td>";
	 	   echo "<tr>";
          

	 	 
	     //echo "<br>".$row['train no']." ". ; 
          
	  }

	   echo  "</table>";
	 	  echo  "</body>";
	 	  echo   "</html>"; 
	}
	


?>


