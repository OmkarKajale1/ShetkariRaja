<?php
if(isset($_POST['submit']))
{
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

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
//$sql = "INSERT INTO cv.`feedback` (`name`,`age`,`MobileNo`, `email`, `Sug`,`rating`)  VALUES ('$Name','$Age', '$MobileNo', '$Email', '$Suggestion','$RG1');";
//$conn->query($sql);
$sql = "INSERT INTO shetkariraja.`contact us` (`name`,`email`,`subject`,`message`) VALUES ('$Name','$Email','$Subject','$Message');";
$conn->query($sql);
header('Location:Shet.html');
//	echo "Database with name geekdata";
//} else {
//	echo "Error: " . $conn->error;
//}

// Closing connection
$conn->close();
?>
