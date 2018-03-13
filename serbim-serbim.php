

<!doctype html>
<html>
<head>

	<title>Serbim-search by image</title>
	
	<link rel="shortcut icon" href="http://serbim.in/img/serbimlogo.jpg"/>
	
	
</head>










<style>

				h1{
			  
			  font-family: "Times New Roman", Times, serif;
			  color: #0066FF;
			 
		       }
			   
			   
			   
			
				h2 {
			  padding-left: 3cm;
			  font-family: "Times New Roman", Times, serif;
			  color: #0066FF;
			 
		       }
			   
			   
			   
			   
			   
															
				h3 {
			  
			  font-family: "Times New Roman", Times, serif;
			  color: black;
			  font-size: 120%;
			   
			 
		       }
			   
				 
								p1 {
									padding-left: 3cm;
									font-family: "Times New Roman", Times, serif;
									color: #0066FF;
			 
		       }
			   
			   
			   
								p2{
									padding-left: 21cm;
									font-family: "Times New Roman", Times, serif;
									color: #0066FF;
									font-size: 130%;
			 
		       }
			   
			   
			   
			   
			   p3{
									padding-left: 23cm;
									font-family: "Times New Roman", Times, serif;
									color: #0066FF;
									font-size: 100%;
			 
		       }
			    
			   p5{
				    font-family: "Comic Sans MS", cursive, sans-serif;
					color: black;
					font-size: 100%;
			   }
			   
			   
			    p6{
				    
					color: #0066FF;
					font-size: 100%;
			   }
			   
			   
			   
			.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
	


a:link {
    color: #0066FF;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: #0066FF;
    background-color: transparent;
    text-decoration: none;
}

p2.serif {
    font-family: "Comic Sans MS", cursive, sans-serif
}

p3.serif {
    font-family: "Comic Sans MS", cursive, sans-serif
}





@media only screen and (min-device-width : 200px) and (max-device-width : 400px) {
   p1,p2,p3,p4,h2{
		padding-left: 3cm;
  }


 
			   
			   
</style>







<?php
$servername = "localhost";
$username = "serbivhr_images";
$password = "ajith72397";
$dbname = "serbivhr_image";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];


function CheckEmail()
{
     $email = $_POST['email'];
     $query = @mysql_query("SELECT email FROM valuetype WHERE email='" . $email . "'");
     $a = mysql_num_rows($query);
     while($row = mysql_fetch_array($query)){
        if($row['email'] == $email){
            echo "Email you entered is already registered";
        }
     }
}
	
	  	
$sql = ("INSERT INTO valuetype(email,name,password) VALUES('$email','$name','$password')") ;


if (isset($_POST['Submit'])) {
    if ($_POST['login'] == "" || $_POST['password'] == "" || $_POST['confirm'] == "" || $_POST['name'] == "" || $_POST['phone'] == "" || $_POST['email'] == "") {
        echo "error: all fields are required";
    } else {
        echo "proceed...";
    }
}














if ($conn->query($sql) === TRUE) {
    echo "                               
	
	
	
	
	
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
?>

<body>

<h2>Serbim</h2>
<p1><i>a platform where you can get best answer to any image.</i></p1><br><br>

<p2 class="serif">Welcome to Serbim, <?php  echo $name;?> <img src="http://serbim.in/img/user.gif" alt="user" width="35" height="35"><br><br></p2>
 <p3 class="serif" id="demo"><a href="https://mail.google.com/mail/u/0/#inbox?compose=1573e19c17e3bdb2" target="_blank">serbimjupiter@gmail.com</a>
 </button>

</p3>
<p5 class="Comic Sans MS"><a href="http://serbim.in/">,Logout</a></p5>



<hr>






<center><p6>Don't worry soon you will get a chance to upload</p6></center>

<br>
<br>
<center>
<a href="http://serbim.in/serbim-oscar.php">
<h3>Why top actors don't deserve oscar ?</h3>
<h3><img src="http://serbim.in/img/oscar.jpg" width="300" height="200" title= "oscar" alt="oscar" /></h3></a><br>

<a href="http://serbim.in/serbim-MODIVSRAHULGANDHI.php">
<h3>What are some differences between MODI<br> and RAHUL GANDHI ?</h3>
<h3><img src="http://serbim.in/img/MODI%20and%20RAHUL%20GANDHI.jpg" width="300" height="200" title= "MODI and RAHUL GANDHI" alt="MODI and RAHUL GANDHI" /></h3></a><br>


<a href="http://serbim.in/serbim-markzuckerberglife.php">
<h3>How to design a image like this for myself ?</h3>
<h3><img src="http://serbim.in/img/markzuckerberg.png" width="300" height="200" title= "life of mark" alt="life of mark" /></h3></a><br>

<a href="http://serbim.in/serbim-listofcompanies.php">
<h3>Why only few companies have become great<br> while others not ?</h3>
<h3><img src="http://serbim.in/img/list.jpg" width="300" height="200" title= "list" alt="list" /></h3></a><br>


<a href="http://serbim.in/serbim-rainroads.php">
<h3>Why indian roads get worse after raining ,<br>is there any best solution ?</h3>
<h3><img src="http://serbim.in/img/rainroads.jpg" width="300" height="200" title= "rain roads" alt="rain roads" /></h3></a><br>



<a href="http://serbim.in/serbim-love.php">
<h3>What are some facts of LOVE ?</h3>
<h3><img src="http://serbim.in/img/love.jpe" width="300" height="200" title= "love" alt="love" /></h3></a><br>


<a href="http://serbim.in/serbim-windows.php">
<h3>What is the actual story behind this desktop wallpaper ?</h3>
<h3><img src="http://serbim.in/img/windows.png" width="300" height="200" title= "windows" alt="windows" /></h3></a><br>

<a href="http://serbim.in/serbim-vijaymalya.php">
<h3>What is the main reason behind VIJAY MALYA'S downfall ?</h3>
<h3><img src="http://serbim.in/img/Vijay%20Mallya.JPG" width="300" height="200" title= "vijay malya" alt="vijay malya" /></h3></a><br>




<a href="http://serbim.in/serbim-differences.php">
<h3>What are some differences between success and unsuccess<br> people that are facing actually ?</h3>
<h3><img src="http://serbim.in/img/difference.jpg" width="300" height="200" title= "success and unsuccess" alt="success and unsuccess" /></h3></a><br>


<a href="http://serbim.in/serbim-characters.php">
<h3>How ,to some heros which suits every character <br>and who are some other ?</h3>
<h3><img src="http://serbim.in/img/character.jpg" width="300" height="200" title= "characters" alt="characters" /></h3></a><br>


<a href="http://serbim.in/serbim-socialnetworking.php">
<h3>Why india is lack of social networking sites ?</h3>
<h3><img src="http://serbim.in/img/socialnetwork.png" width="300" height="200" title= "social networking" alt="social networking" /></h3></a><br>


<a href="http://serbim.in/serbim-technology.php">
<h3>What would be the future technology that is going to<br> occupy the entire industry  ?</h3>
<h3><img src="http://serbim.in/img/technology.jpg" width="300" height="200" title= "technology" alt="technology" /></h3></a><br>


<a href="http://serbim.in/serbim-farmers.php">
<h3>What are some problems of farmers faced and how can we<br> reduce with technology being a citizen ?</h3>
<h3><img src="http://serbim.in/img/farmers.jpg" width="300" height="200" title= "farmers" alt="farmers" /></h3></a><br>


<a href="http://serbim.in/serbim-roms.php">
<h3>What are ROMS and how to use this in mobiles ?</h3>
<h3><img src="http://serbim.in/img/roms.jpg" width="300" height="200" title= "roms" alt="roms" /></h3></a><br>

<a href="http://serbim.in/serbim-iphone7.php">
<h3>What's your opinion on iphone 7 and <br>what are some facts about it ?</h3>
<h3><img src="http://serbim.in/img/iphone7.jpeg" width="300" height="200" title= "iphone 7" alt="iphone 7" /></h3></a><br>

<a href="http://serbim.in/serbim-language.php">
<h3>What are the easiest and hardest languages to learn  ?</h3>
<h3><img src="http://serbim.in/img/language.jpg" width="300" height="200" title= "language" alt="language" /></h3></a><br>

<a href="http://serbim.in/serbim-facts.php">
<h3>Tell me some facts that replaced by the existance <br>one like jio replacing all sims ?</h3>
<h3><img src="http://serbim.in/img/facts.jpe" width="300" height="200" title= "facts" alt="facts" /></h3></a><br>


<a href="http://serbim.in/serbim-craze.php">
<h3>why people are craze about unwanted things  but not
<br> important aspects like education , climate and bussiness ?</h3>
<h3><img src="http://serbim.in/img/craze.png" width="300" height="200" title= "craze" alt="craze" /></h3></a><br>
<a href="http://serbim.in/serbim-interview.php">
<h3>How to attend interview affectively and impress HR'S? ?</h3>
<h3><img src="http://serbim.in/img/interview.png" width="300" height="200" title= "interview" alt="interview" /></h3></a><br>
<a href="http://serbim.in/serbim-product.php">
<h3>why India is lack of product based companies ?</h3>
<h3><img src="http://serbim.in/img/product.jpg" width="300" height="200" title= "products" alt="products" /></h3></a><br>
<a href="http://serbim.in/serbim-movies.php">
<h3>why today's movies are becoming worst than ever?</h3>
<h3><img src="http://serbim.in/img/movies.jpg" width="300" height="200" title= "movies" alt="movies" /></h3></a><br>
<a href="http://serbim.in/serbim-perfect.php">
<h3>what are the best things to be perfect?</h3>
<h3><img src="http://serbim.in/img/perfect.jpg" width="300" height="200" title= "perfect" alt="perfect" /></h3></a><br>
<a href="http://serbim.in/serbim-companies.php">
<h3>which is the best company to work and why?</h3>
<h3><img src="http://serbim.in/img/company.jpg" width="300" height="200" title= "companies" alt="companies" /></h3></a><br>
<a href="http://serbim.in/serbim-simple.php">
<h3>How it is possible for billionares and leaders to be simple?</h3>
<h3><img src="http://serbim.in/img/leaders.jpg" width="300" height="200" title= "leaders" alt="leaders" /></h3></a><br>
<a href="http://serbim.in/serbim-politics.php">
<h3>why politics are going into a wrong way mainly<br> against to people after coming to power? ?</h3>
<h3><img src="http://serbim.in/img/politics.jpg" width="300" height="200" title= "politics" alt="politics" /></h3></a><br>
<a href="http://serbim.in/serbim-billion.php">
<h3>why most dropouts are billionares like<br> billgates and richard branson ?</h3>
<h3><img src="http://serbim.in/img/billionare.jpg" width="300" height="200" title= "billionare" alt="billionare" /></h3></a><br>
<a href="http://serbim.in/serbim-timcook.php">
<h3>who is best CEO for Apple steve (or) cook?</h3>
<h3><img src="http://serbim.in/img/steve.jpg" width="300" height="200" title= stevejobs and timcook" alt="stevejobs and timcook" /></h3></a><br>
<a href="http://serbim.in/serbim-einstein.php">
<h3>why einstein's IQ is high when compare to normal humans?</h3>
<h3><img src="http://serbim.in/img/einstein.jpg" width="300" height="200" title="einstein" alt="einstein" /></h3></a><br>
<a href="http://serbim.in/serbim-book.php">
<h3>How to publish a book?</h3>
<h3><img src="http://serbim.in/img/book.jpg" width="300" height="200" title="book" alt="book" /></h3></a><br>
<a href="http://serbim.in/serbim-jio.php">
<h3>Does jio affect on other networks and how?</h3>
<h3><img src="http://serbim.in/img/jio.cms" width="300" height="200" title="jio" alt="jio" /></h3></a><br>
<a href="http://serbim.in/serbim-poverty.php">
<h3>why still there are some countries with poverty<br>even that country is developing?</h3>
<h3><img src="http://serbim.in/img/poverty.jpg" width="300" height="200" title="poverty" alt="poverty" /></h3></a><br>
<a href="http://serbim.in/serbim-planets.php">
<h3>why planets around the sun revolves on the same plane <br>
but not random like one is up and down?</h3>
<h3><img src="http://serbim.in/img/planets.png" width="300" height="200" title="planets" alt="planets" /></h3></a><br>
<a href="http://serbim.in/serbim-olympic.php">
<h3>why india is lack of olympic medals even though it<br> has great talent with population?</h3>
<h3><img src="http://serbim.in/img/olympics.jpg" width="300" height="200" title="olympic logo" alt="olympic logo" /></h3></a><br>
<a href="http://serbim.in/serbim-online.php">
<h3>which is the best online shopping site and why?</h3>
<h3><img src="http://serbim.in/img/online.gif" width="300" height="200" title="online" alt="online" /></h3></a><br>
<a href="http://serbim.in/publicprivate-serbim.php">
<h3>What is the difference between public and private universities? </h3>
<h3><img src="http://serbim.in/img/publicprivate.jpg" width="300" height="200" title="public and private" alt="public and private" /></h3></a><br>
<a href="http://serbim.in/serbim-girls.php">
<h3>How to impress girls? </h3>
<h3><img src="http://serbim.in/img/girls.jpg" width="300" height="200" title="girls" alt="girls" /></h3></a><br>
<a href="http://serbim.in/serbim-jobs.php">
<h3>What if STEVE JOBS is not out of his<br> own company from SCULLEY</h3>
<h3><img src="http://serbim.in/img/steve%20jobs.jpg" width="300" height="200" title="steve jobs" alt="steve" /></h3></a><br>
<a href="http://serbim.in/serbim-mars.php">
<h3>Does it possible to live on mars?</h3>
<h3><img src="http://serbim.in/img/Mars.jpg" width="300" height="200" title="mars" alt="mars" /></h3></a><br>
<a href="http://serbim.in/serbim-global.php">
<h3>How to stop global warming in this modern <br>era by using available<br> natural resources ? </h3>
<h3><img src="http://serbim.in/img/global.jpeg" width="300" height="200" title="global" alt="global" /></h3></a><br>
<a href="http://serbim.in/serbim-travelling.php">
<h3>Why people say travelling makes you creative,<br> what is there in it<br> dont say me to travel ?  </h3>
<h3><img src="http://serbim.in/img/travelling.jpeg" width="300" height="200" title="travelling" alt="travelling" /></h3></a><br>
<a href="http://serbim.in/serbim-traffic.php">
<h3>why there is huge traffic in cities due to people <br>(or) vehicles, how we can reduce this by using latest <br>existence technology ?  </h3>
<h3><img src="http://serbim.in/img/traffic.jpeg" width="300" height="200" title="traffic" alt="traffic" /></h3></a><br>
<a href="http://serbim.in/serbim-fuck.php">
<h3>why characters in hollywood movies and serials<br> usually use word FUCK, why do they need this<br>unparliamentry language? </h3>
<h3><img src="http://serbim.in/img/fuck.jpeg" width="300" height="200" title="fuck" alt="fuck" /></h3></a><br>
</center>

</body>
</html>