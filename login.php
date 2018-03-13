<?php

if(!empty($_POST['email']))  !empty($_POST['password'])

endif;
?>



<!doctype html>
<html>
<head>

	<title>login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style" />
	
	</head>
	
	<body>
	
	<center><h1>please login/</h1></center>
	<center>
	
	<form action="login.php" method="post">
<p1>Your Mail</p1><br> <input <input    placeholder="Enter Your Mail"  type="email" name="email" required/><br><br>

<p1>Your Password</p1><br>  <input pattern=".{10}" title="10 characters"  
placeholder="Enter Your Password"  type="password" name="password" required/><br><br>

              <input type="checkbox" checked="checked"> <p1>Remember me</p1><br>
			  
<br>
<button type="submit">Submit</button>
</form>
	
	</center>
	
	</body>