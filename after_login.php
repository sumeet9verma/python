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
	<button style="position: absolute; right:15px;">Log out</button>
<br><br><br>
<h1 style="text-align:center;">welcome 

<?php echo $_SESSION['name']; ?>
</h1>
</body>
</html>