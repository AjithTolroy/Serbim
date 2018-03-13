





<!doctype html>
<html lang="en">




<head>

	

</head>


<style>



		



		h1 {
			padding-left: 3cm;
			 font-family: "Times New Roman", Times, serif;
			 color: #0066FF;
			 
		}
		
			h2 {
			padding-left: 4cm;
			color: #0066FF;
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
															font-style: italic;
															
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

if(isset($_POST['upload_img'])){
	$file_name = $_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
	$file_tmp_name = $_FILES['image']['tmp_name'];

	if($file_name){
	move_uploaded_file($file_tmp_name,"uploads/$file_name");
	}
}


?>


















<center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "line";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
    {


$name = $_POST['name'];
$sql = ("INSERT INTO tag (name) VALUES ('$name')");

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

	}
?>
	
	
</center>


	

	
		
	

	
	<body>
	
	
	
	
	
	
	
	
	





 


</div>
<br><br>




<center>

<form action="" method="post" ><?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
   
  <h4><strong></strong><p1>tag</p1><br> <input placeholder="search here"  type="name" name="name" required/>
   
  <center>
	
  <br>


	

    Select image to upload:
   <form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" >
    
</form>


</form>

</center>
   
   
   
   
   <input type="submit" name="submit" value="Upload Image" name="upload_img" value="submit"   type="submit" value="Upload Image" name="upload_img">  </center>
</form>
</h4><h5>
</h5>
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "line";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name FROM tag";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["name"]. "<br>";

   
    }
} else {
    echo "";
}
$conn->close();


?>


</center>
<center>


<?php

$folder = "uploads/";

if(is_dir($folder)){
	
	if($handle = opendir($folder)){
		
		while(($file=readdir($handle)) != false){
			
			if($file==='.' || $file=== '..') continue;
			
			echo '<img src="img/'.$file.'" width="150" height="150" alt="" >';
			echo "<br />\n";
			
		}
		closedir($handle);
		
	}
	
	
}




?>

</center>



</body>


</html>
