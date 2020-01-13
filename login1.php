<?php
include("connection.php");
session_start();

$username=$_POST['loginuser'];
$password=$_POST['loginpassword'];

$sql="select * from signup";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{    

	 while($row=mysqli_fetch_assoc($result))
	 {



	 	if($row['Username']===$username and $row['password']===$password)
	 	{    
	 		   
               $_SESSION['name']=$row['Name'];
               $_SESSION['user']=$row['Username'];

	 		
	 		 header("Location:main_after_logino.php");
	 		 break;
	 		   
	    }

        
       }
   echo "invalid username or password";
  

}
else
{
	echo "database is empty";
}






?>