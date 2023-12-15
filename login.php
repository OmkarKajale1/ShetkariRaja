<?php
if(isset($_POST['Submit']))
    {$uname= $_POST['uid'];
        $passs = $_POST['pwd'];
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

//  $sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
//$sql = "select `uid`, `pwd`, `name`, `mobile` FROM test.`login` where uid='$uname';";
$sql = "select  `pass` FROM shetkariraja.`signupdata` WHERE name='$uname';";
$passwd="Hello";
if ($conn->query($sql) == TRUE) {
						$result= $conn->query($sql);
						if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
$passwd=$row["pass"];
    																	//	echo "<tr> <td>". $row["pwd"]. "</td></tr>" ;
  																	}//echo "$passwd";
                                                                 } 

                                    else {
                                    echo "0 results";
                                 }

	//echo strcmp("$passwd","$pass"); 
if ("$passwd"=="$passs") {echo "password is authenticated";header('Location:ind.html');}
else echo "user id and or password mismatch";
                                  }
 else {
	echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();
?>
