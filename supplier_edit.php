<?php
	include 'includes/session.php';
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$business_name = $_POST['business_name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		
		$sql = "UPDATE supplier SET business_name = '$business_name', address = '$address', email = '$email', phone_number = '$phone_number' WHERE id = '$id'";

	    if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select supplier to edit first';
	}

	header('location: supplier.php');
?>
