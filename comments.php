<?php

	$uName = $_POST['name'];
	$uEmail = $_POST['email'];
	$uMessage = $_POST['message'];

	$conn = new mysqli('localhost', 'root', '', 'ua');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO comments (name, email, message) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $uName, $uEmail, $uMessage);
		$execval = $stmt->execute();

		if ($execval === TRUE) {
			echo '<script>alert("Message submitted successfully!"); window.location.href = "contact.html";</script>';
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
		$conn->close();
	}
?>
