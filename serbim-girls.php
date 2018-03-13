





<!doctype html>
<html lang="en">

<title>Serbim-an image world</title>


<head>

	<title>Serbim-jobs</title>
  <link rel="shortcut icon" href="http://serbim.in/img/serbimlogo.jpg"/>

</head>


<style>



		



		h1 {
			padding-left: 3cm;
			 font-family: "Times New Roman", Times, serif;
			 color: #0066FF;
			 
		}
		
			h2 {
			padding-left: 4cm;
			color: black;
			 font-family: Times New Roman, "Times", serif;
			 
		}
		
				h3 {
				padding-left: 4cm;
				}
				
				h4 {
				padding-left: 3cm;
				color: #0066FF;
				}
	
					
				h5 {
				padding-left: 4cm;
				font-size: 100%;
				}
				p {
					color: #808080;
					font-size: 50%;
					color: #0066FF;
					}

						p1 {
								padding-left: 2cm;
								font-size: 100%;
							}
							
						p2{
								color: blue;
								font-size: 100%;
							}
								
									
									p3
									{
										color: #0066FF;
										font-size: 170%;
										padding-left: 23cm;
										 font-family: "Times New Roman", Times, serif;
									}
									
									
									.error {
										
										color: #FF0000;
										}
										
										.floating-box {
															
															text-align: initial;
															display: default;
															margin: 2px;
															margin-right: 12cm;
															margin-left: 4cm;
															font-size: 100%;
														
															
														}
					

							
</style>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




















<?php
$servername = "localhost";
$username = "serbivhr_text";
$password = "ajith72397";
$dbname = "serbivhr_textstore";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
    {


$comment = $_POST['comment'];
$sql = ("INSERT INTO girlsstore (comment) VALUES ('$comment')");

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

	}
?>



	



	

	
		
	

	
	<body>
	
	
	
	
	
	
	
	
	
	<div id="header"><h1>Serbim </h1><br>




 


</div>
<br><br>

<h2> How to impress girls ? </h2>


<h3><img src= "http://serbim.in/img/girls.jpg" width="600" height="400" title="girls" alt="girls" /></h3>





<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
  <h4><strong><i>WAI..</i></strong><textarea name="comment" rows="7" cols="82"><?php echo $comment;?></textarea>
   
  
   
   <input type="submit" name="submit" value="Submit"> 
</form>



</h4>

<h5>




<br>

</h5>




<div class="floating-box">



<?php


$servername = "localhost";
$username = "serbivhr_text";
$password = "ajith72397";
$dbname = "serbivhr_textstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT comment FROM girlsstore";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["comment"]. "<br>";
		
		echo "<br />\n";
	echo "<br />\n";
	
    }
} else {
    echo "no yet abouts";
	
}
$conn->close();




?>

<hr>

</div>



</body>


</html>
