<?php
if(isset($_POST['Submit']))
{
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Product = $_POST['product'];
$Qty = $_POST['qty'];
$Rate = $_POST['rate'];
$Addrs = $_POST['add'];
$Msg = $_POST['msg'];
$Phone = $_POST['phone'];
}
$servername = "localhost";
$username = "root";
$password = "";
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
$sql = "INSERT INTO shetkariraja.`sales`(`fname`, `lname`, `pname`, `quantity`, `rate`, `address`, `message`, `phone`) 
VALUES ('$Fname','$Lname','$Product','$Qty','$Rate','$Addrs','$Msg','$Phone')";
$conn->query($sql);
//	echo "Database with name geekdata";
//} else {
//	echo "Error: " . $conn->error;
//}

// Closing connection
$conn->close();
?>