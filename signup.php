<?php
if(isset($_POST['Submit']))
{
$Name = $_POST['name'];
$Phoneno = $_POST['number'];
$Pass = $_POST['pass'];
$Hint = $_POST['hint'];

}

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

// Creating a connection
$conn = new mysqli($servername,
			$username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}

// Creating a database named geekdata
//$sql = "INSERT INTO `feedback` (`Name`, `Age`, `Marks`, `Mobile`) VALUES ('Sanjeev', '45', '78', '1818982888');";
//if ($conn->query($sql) == TRUE) {
//$sql = "INSERT INTO shetkariraja.`contact us` (`name`,`email`,`subject`,`message`) VALUES ('$Name','$Email','$Subject','$Message');";
//$conn->query($sql);
$sql = "INSERT INTO shetkariraja.`signupdata` (`name`, `number`, `pass`, `hints`) VALUES ('$Name', '$Phoneno', '$Pass', '$Hint');";
$conn->query($sql);
header('Location:login.html');
//	echo "Database with name geekdata";
//} else {
//	echo "Error: " . $conn->error;
//}

// Closing connection
$conn->close();
?>