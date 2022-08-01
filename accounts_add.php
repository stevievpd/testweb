<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$type = $_POST['usertype'];
		$sql = "INSERT INTO admin (username, password, firstname, lastname, created_on ,type) VALUES ('$username', '$password', '$firstname', '$lastname', NOW(), '$type')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: accounts.php');
?>