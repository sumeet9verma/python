
<?php
include("connection.php");

$name=$_POST['name'];
$gender=$_POST['gender'];
$email_ID=$_POST['email'];
$phone=$_POST['phone'];
$adhar=$_POST['adhar'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];


/*
$sql="select * from signup";
$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)>0)
{    

	 while($row=mysqli_fetch_assoc($result))
	 {
              
        if($row['Username']==$username || $row['email']==$email_ID || $row['Adhar number']==$adhar)
	    {    
              
	 		 header("Location:signup1.php");
	 		
	     }
	     break;
	   // (`Name`,`Gender`,`Phone Number`,`email`,`Adhar number`,`City`,`Username`,`password`)  	    
     }
     */
    // $query="INSERT INTO `signup`(`Name`, `Gender`, `Phone Number`, `email`, `Adhar number`, `City`, `Username`, `password`) VALUES ('$name','$gender','$phone','$email_ID','$adhar','$city','$username','$password')";
 $query="insert into signup values('$name','$gender','$phone','$email_ID','$adhar','$city','$username','$password')";
 //$query="insert into signup values('aryan','male',997835,'zxed',94533332,'amla','zz','asd')";
  $result=mysqli_query($conn,$query);
  
  header("Location:login.php");

 
 /*}
else
{
	echo "database is empty";
}*/

/*
$query="insert into signup values('$name','$gender','$phone','$email_ID','$adhar','$city','$username','$password')";
header("Location:login.php");
//$data=mysqli_query($connect,$query);
if(!$query)
{
	echo"Same username entered.Value not inserted!!";
}

*/


?>