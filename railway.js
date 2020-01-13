function submition()
{
var signname=document.getElementById("signname");
var gender1=document.getElementById("rd1");
var gender2=document.getElementById("rd2");
var phoneno=document.getElementById("phone");
var email=document.getElementById("email");
var adhar=document.getElementById("uid");
var city=document.getElementById("city");
var user=document.getElementById("user");
var pass=document.getElementById("password");
var cpass=document.getElementById("cpassword");
var regxphone=/^[7-9][0-9]{9}$/;
var regxemail=/([a-zA-Z0-9]+)@([a-z]+).([a-z]+)/;

if(signname.value.trim()==""||phoneno.value.trim()==""||gender1.checked==false&&gender2.checked==false||email.value.trim()==""||adhar.value.trim()==""||city.value.trim()==""||user.value.trim()=="")
{
	alert("Please fill the form completely!!!");
	return false;
}
else if(!regxphone.test(phoneno.value))
{
	alert("Your phone number must contain 10 digits and must be indian");
	document.getElementById("lbphone").style.visibility="visible";
	return false;
}
else if(!regxemail.test(email.value))
{
	alert("Enter valid Email Id");
	document.getElementById("lbemail").style.visibility="visible";
	return false;
}
else if(adhar.value.length!=12)
{
	alert("Enter valid Adhar number");
	document.getElementById("lbadhar").style.visibility="visible";
	return false;
}
else if(pass.value.trim()==""||cpass.value.trim()=="")
{
	alert("Enter Password");
	return false;
}
else if(pass.value.trim()!=cpass.value.trim())
{
	alert("Password is not matched.Try again!");
	return false;
}
else 
	return true;
}

function login()
{
	var lguser=document.getElementById("lguser");
	var lgpass=document.getElementById("lgpass");
	var lgcpass=document.getElementById("lgcpass");
	
	if(lguser.value.trim()=="")
	{
		alert("Fill the username");
		return false;
	}
	else if(lgpass.value.trim()=="")
	{
		alert("fill the password");
		return false;
	}
	else if(lgpass.value.trim()!=lgcpass.value.trim())
	{
		alert("password doesn't match");
		return false;
	}
	else
		return true;
}
	