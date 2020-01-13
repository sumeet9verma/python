<?php

echo "footer";



?>
<html>
<head>
	<style type="text/css">
		body
		{
			background-color: #fafafa ;
		}
	</style>
</head>
<body>
	<form action="before_booked.php" method="POST" target="_parent">
		<input type="text" name="train_no" placeholder="Please enter 5 digit train number" pattern="\d{5}"maxlength="5" >
		<input type="submit" name="submit">
	</form>
</body>
</html>