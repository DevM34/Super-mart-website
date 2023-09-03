<?php
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];

	// Database connection
	$conn = new mysqli('localhost','root','','Register1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FirstName, Password, Email, Number) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $Username, $Password, $Email, $Phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
?>