<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['edit_customer_first_name'];
		$lastname = $_POST['edit_customer_last_name'];
		$contact = $_POST['edit_customer_contact'];
		$address = $_POST['edit_customer_address'];
		
		$sql = "UPDATE customer SET customer_firstname = '$firstname', customer_lastname = '$lastname', customer_contact_info = '$contact', customer_address = '$address' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select products to edit first';
	}

	header('location: customer.php');
?>