<?php

	/* Retrieve the raw POST data
	$jsonData = file_get_contents('php://input');
	// Decode the JSON data
	$data = json_decode($jsonData);*/

	$uName = $_POST['name'];
	$uContact = $_POST['contact'];
	$uAddress = $_POST['address'];
	$uDelivery = $_POST['delivery'];
	// $totalFromJS = $_POST['totalOrder'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'ua');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO orders (name, contact, address, delivery) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("siss", $uName, $uContact, $uAddress, $uDelivery);
		$execval = $stmt->execute();

		if ($execval === TRUE) {
			echo '<script>alert("Order submitted successfully!"); window.location.href = "menu.html";</script>';
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
		$conn->close();
	}
?>
