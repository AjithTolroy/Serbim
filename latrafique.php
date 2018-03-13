<!doctype html>
<html>

	<head>
			<title>La Trafique</title>
	</head>

	
	
	<style>
	
		h1{
			padding-left:3cm;
			font-family: "Times New Roman", Times, serif;
			color:#0066ff;
			}
			h2 {
				padding-left:4cm;
			}
			
			
			h4 {
				padding-left:9cm;
				color:#0066ff;
				font-size:150%;
			}
			
			
			h5 {
				padding-left:9cm;
				color:#0066ff;
				font-size:100%;
			}
			
			h6 {
				
				color:#0066ff;
				font-size:100%;
			}
			
			
			
			h3 {
				
				color:#0066ff;
			}
			
			
			
			p1{
				font-family: "Times New Roman", Times, serif;
				color:#0066ff;
				font-size:50%;
			}
			
			
			
			p2{
				font-family: "Times New Roman", Times, serif;
				color:#0066ff;
				padding-left:4cm;
				
			}
			
	</style>
	
	
	
	<body>
	
	<h1>La Trafique,  <p1><i>a best result to a route traffic.</i></p1></h1>
	<br>
	<br>
	<center>
	<table style="width:0%">
  
  <tr>
    <td><img src="http://localhost/img/maxresdefault.jpg" width="400" height="300" title="mars" alt="mars" /></td>
    <td><img src="http://localhost/img/654508712-kamfaeng-fet-road-chatuchak-district-overloaded-carbon-dioxide.jpg" width="400" height="300" title="mars" alt="mars" /></td>
    <td><img src="http://localhost/img/traffictime.jpg" width="400" height="300" title="mars" alt="mars" /></td>
 </tr>
</table>
	
	<table style="100%"></center>
	
	<tr>
	
	
	
	
	<h3>Now, check out the traffic from where you are.</h3>	
	<td><form action="latrafique.php" method="post">
	<p2>From</p2><br>
  <h2><input list="places" name="from" required/>
  <datalist id="places">
    <option value="Kukatpally">
    <option value="Miyapur">
    <option value="Gachibowli">
    <option value="Uppal">
    <option value="L.B.Nagar">
  </datalist></h2>
  
  
  <p2>To</p2><br>
             <h2> <input list="places" name="To" required/>
  <datalist id="places">
    <option value="Kukatpally">
    <option value="Miyapur">
    <option value="Gachibowli">
    <option value="Uppal">
    <option value="L.B.Nagar">
  </datalist></h2><br>
 <p2><input type="submit"></p2>
</form></td>


<td><h5>
<?php 

	echo $_POST["from"]; ?> to
	<?php 
	
	echo $_POST["To"];?></h5><h4>Get the route traffic directly, <i>people just referred</i></h4></td>
</tr>
</table>
<br>
<br>
<br>

	
	
	
	
	<center><h3>People On Traffic</h3></center>	
	
	
	
	
	
	
	</body>

</html>