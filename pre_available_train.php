<?php
session_start();
$_SESSION['train_so']=$_POST['departure'];
$_SESSION['train_des']=$_POST['destination'];
$_SESSION['passenger']=$_POST['no_passenger'];
$_SESSION['class']=$_POST['tier'];
$_SESSION['date']=$_POST['date'];

//$_SESSION['cost']=35000;
//$_SESSION['user']



?>
<html>
<head>
<title>main</title>
</head>


<frameset rows="70%,30%">
	
	    <frame name="side" src="available_train.php" noresize="noresize" frameborder="0" scrolling="no">
	    <frame name="body" src="footer_available_train.php"  frameborder="0" scrolling="auto">

	</frameset>

</frameset>


</html>