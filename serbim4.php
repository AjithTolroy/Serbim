
<!doctype html>
<html>


		<title>Serbim</title>
<head>

<?php

if(isset($_POST['upload_img'])){
	$file_name = $_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
	$file_tmp_name = $_FILES['image']['tmp_name'];
	
	if($file_name){
		move_uploaded_file($file_tmp_name,"img/$file_name");
		
	}
}
</head>
<style>





	h1 {
	padding-left: 4cm;
	font-size: 100%
	color: #8O8O8O;
	font-family: Arial, Helvetica, serif;
	
}



nav {

padding-left: 19cm;
color: brown;

}



</style>

<body>
<h1 class="serif">Serbim</h1>

<nav>


<a href="">Global Images</a>|
<a href="">Your Images</a>
</nav>
<hr>



<?php
	
	
$folder = "img/";
	
	if(is_dir($folder)){
		
	
	if($handle = opendir($folder)){
	
	
		while(($file=readdir($handle)) != false){
		if($file==='.' || $file==='..') continue;
		echo '<img src="img/'.$file.'"width="300" height="250" alt="">';
		}
		closedir($handle);
		}
	}
		
?>





</body>
</html>
		

