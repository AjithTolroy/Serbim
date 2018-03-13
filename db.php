<!DOCTYPE html>
<html>
<body>

<?php
echo "data stored";
?>
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
$quantity = $_POST['quantity'];
$price = $_POST['price'];


$sql = ("INSERT INTO ds (name,quantity,price) VALUES ('$name','$quantity','$price')");

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

	}
?>

</body>
</html>