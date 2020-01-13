

<html>
<head>
<title>login</title>
<style type="text/css">
body{
/*background-color:powderblue;*/
background-image: url("img1/log1.jpg");
margin-left:600px;
}
form{
width:400px;
/*background-color:white;*/
margin-left:-150px
}
input{
width:60%;
}
h4{
margin-left:-90px;
color: white;
}
h1{
	color:white;
}
.loginsubmit{
margin-left:140px;
width:110px
}
form{
	color:white;
}
</style>
</head>

<body>
<h1>LOGIN</h1><br>
<h4>If you don't have account <a href="signup.php">click here</a> to Signup</h4>
<!--<br><br> <h1 style="color:text;"><a href="home1.php">Home</a></h1><br>-->
<form   method="post" onsubmit="return login()" action="login1.php">
User Name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" id="lguser" name="loginuser" placeholder="Enter your Username"/><br><br>
Password:&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="password" id="lgpass" name="loginpassword" placeholder="Enter your Password"/><br><br>
<input type="submit" name="loginsubmit" class="loginsubmit" value="submit"/>
</form>
</body>


<script type="text/javascript" src="railway.js">
</script>
</html>