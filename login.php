<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from Form 
	$email=addslashes($_POST['email']); 
	$mypassword=addslashes($_POST['password']); 
	// SELECT password_field FROM mytable WHERE password_field=pwdencrypt(userEnteredValue);
	$sql="SELECT * FROM MyGuests WHERE email='$email' and password='$mypassword'";
	// $result=sql->query($sql);
	// $row=mysql_fetch_array($result);
	// $active=$row['active'];
	// $count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	// if($count==1)
	// {
	// 	session_register("$myusername");
	// 	$_SESSION['admin']=$myusername;

	// 	header("location: assignment1.php");
	// }
	// else 
	// {
	// 	$error="Your Login Name or Password is invalid";
	// 	echo"$error";
	// }

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$email = $row["email"];
			//session_register("$myusername");
			$_SESSION['email'] = $email;
			echo "<h3>Welcome $firstname $lastname.</h3>";
		}
	} else {
		echo "Failed to Login. Try again.";
	}
	header("location: index.php");
}
?>