<html>
<head>
<title>signup</title>
<style type="text/css">
body{
/*background:powderblue;*/
background-image: url("img1/log1.jpg");
}
h1{
color: white;
text-align:center;
}
form{
margin-left:350px;
align:auto;
width:600px;
color:white;
font-weight: 1000;
font-size: large;
/*background:yellow;*/
}
input{
width:50%;
}
h4{
color:white;
margin-left:470px;
}
.sub{
width:200px;
margin-left:200px;
}
</style>
</head>
<body>
<h1>SIGN UP</h1>
<h4>If you already have account <a href="login.php">click here</a> to login</h4>
  <!--onsubmit="return submition()"-->
<pre>
  <form action="signup_d.php" onsubmit="return submition()" method="post">
Name:                <input type="text" placeholder="Enter your Name" id="signname" name="name"/>
Gender:   <br>    <input type="radio" name="gender" value="male" id="rd1">MALE
    <input type="radio" name="gender" value="female" id="rd2"/>FEMALE
Phone Number:        <input type="number" placeholder="Enter Phone Number" name="phone" id="phone"/><label id="lbphone" style="color:red;visibility:hidden;">Invalid Phone Number</label>
Email ID:            <input type="text" placeholder="Enter Email" id="email" name="email"/><label id="lbemail" style="color:red;visibility:hidden;">Invalid Email Id</label>
Adhar number:        <input type="number" placeholder="Enter UID" id="uid" name="adhar"/><label id="lbadhar" style="color:red;visibility:hidden;">Invalid UID</label>
City:                <input type="text" placeholder="Enter your City" id="city" name="city"/>
Username:            <input type="text" placeholder="Enter Username" id="user" name="username"/>
Password:            <input type="password" placeholder="Enter Password" id="password" name="password"/>
Confirm Password:    <input type="password" placeholder="Confirm your Password"id="cpassword" name="cpassword"/><br>
<button class="sub" type="submit" name="submit">submit</button>
   </form>
</pre>

<script type="text/javascript" src="railway.js">
</script>


</body>
</html>