<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$business_name = $_POST['business_name'];
		$product = $_POST['product'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		
		$sql = "UPDATE supplier SET id = '$id', business_name = '$business_name' , product = '$product',address = '$address', email = '$email', phone_number = '$phone_number', WHERE id = '$id'";
	    if($conn->query($sql)){
			$_SESSION['success'] = 'Employee updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select employee to edit first';
	}

	header('location: employee.php');
?>