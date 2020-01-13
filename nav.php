<?php
session_start();


?>
<html>
<head>


<title>home_page_after_login </title>

<style>
body {
	   background-image: url("img/login_after.jpg");
       background-repeat:no-repeat;
       background-size:cover;
} 

</style>
</head>
<body>
	<button style="position: absolute; right:15px;">
  <a href="session_remove.php" target="_top"> Log Out</a>
	</button>
<br>
<h1 style="text-align:center;">Welcome <?php echo $_SESSION['name']; ?>
</h1>
</body>
</html>