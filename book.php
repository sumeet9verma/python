<html>
	<head>
		<title> Railway Ticket Booking </title>
		<center><h1 style="color:white;background:black"> WELCOME &nbsp TO  &nbsp ONLINE &nbsp RAILWAY &nbsp RESERVATION </h1></center>
		<script>
			
		</script>
	</head>
	
	<body background="booktrain.jpg">
		<font color="white" size=5>
			<form action="pre_available_train.php" method="POST">
			<pre>
Number of passengers:<input type="number" id="no_passenger" min="1" max="4" required name="no_passenger" > <br>
Departure Form	:<select name="departure" required>
<option value="New Delhi">New Delhi   </option>
<option value="Mumbai">Mumbai   </option>
<option value="Gaya">Gaya   </option>
<option value="Patna JN">Patna JN</option>

</select>
<br>
Destination to	:<select name="destination" required>
<option value="Patna JN">Patna JN  </option>
<option value="Gaya">Gaya   </option>
<option value="Mumbai">Mumbai   </option>
<option value="New Delhi">New Delhi   </option>

</select>
<br>
class   : <input type=radio name="tier" required value="I AC"> I AC
          <input type=radio name="tier" required value="II AC"> II AC
          <input type=radio name="tier" required value="III AC"> AC chair car
<br>	
Date of journey  :<input type=date name="date" required>
<br>
<input type=submit value="Book Your Ticket" >		
				</pre>				
			</form>
		</font>
	
	<!--<script>
		function only_no()
		{
			var no_passenger=document.getElementById("no_passenger").value;
			if(!(no_passenger<=4 && no_passenger>0))
			{
				alert("You can book only 4 tickets");

			}
			
		}


	</script>-->
	</body>
</html>