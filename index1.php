<!doctype html>
<html>
<head>
       <title>Serbim-Home</title>
<link rel="shortcut icon" href="http://serbim.in/img/serbimlogo.jpg"/>

</head>

<style>


				h1{
			  
			  font-family:  Lucida Sans Unicode, "Lucida Grande", sans-serif;
			  color: white;
			 font-size:400%;
		       }
				
				h2{
					font-size:150%;
					 color: white;
					  font-family:  "Lucida Sans Unicode", "Lucida Grande", sans-serif;
				}
				
				
				
			    input[type=email], input[type=password],input[type=name] {
    width: 60%;
    padding: 12px 9px;
    margin: 1px 5px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
	
	
	p1{
		 font-family: "Times New Roman", Times, serif;
			  color: white;
			 font-size:120%;
		
	}
	
	p2{
		font-family: "Times New Roman", Times, serif;
			  color: white;
			 font-size:130%;
	}
	
	 p4{
									padding-left: 3cm;
									font-family: "Times New Roman", Times, serif;
									color: #0066FF;
									font-size: 100%;
			 
		       }
	
	  button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 3px 0;
    border:none;
    cursor: pointer;
    width: 18%;
}


.div2 {
    width: 500px;
    height: 230px;
    padding: 50px;
    border: 1px solid white;
}

a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: white;
    background-color: transparent;
    
}
a:active {
    color: white;
    background-color: transparent;
  
}
			
				
</style>


<body background="http://serbim.in/img/serbimbg.jpg">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passwordErr = "";
$name = $email = $gender = $comment = $password = "";



 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password address is well-formed
    if (!filter_var($password, FILTER_VALIDATE_PASSWORD)) {
      $passwordErr = "Invalid password format"; 
    }
  }
  
 
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<center><h1>Serbim</h1></center>

<center><h2>A platform where you can search best answer to any image</h2></center>
<br>
<center>
<p2><a href="http://serbim.in/serbim-about.php">About Us </a><p4><a href="http://serbim.in/serbim-hiring.php">We Are Hiring</a></p4></p2><br>
<div class="div2">
<form action="http://serbim.in/serbim.php" method="post">
<p1>Your Mail</p1> <br> <input placeholder="Enter Your Mail"  type="email" name="email" required/><br><br>
<p1>Your Name</p1><br> <input <input    placeholder="Enter Your Name"  type="name" name="name" required/><br><br>
<p1>Your Password</p1><br>  <input pattern=".{10}" title="10 characters"  
placeholder="Enter Your Password"  type="password" name="password" required/><br><br>

              <input type="checkbox" checked="checked"> <p1>Remember me</p1><br>
			  
<br><br><br>
<button type="submit">Submit</button>
</form>
</center>



</div>


</body>
</html>
