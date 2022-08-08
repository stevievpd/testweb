<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$customer_firstname = $_POST['customer_firstname'];
		$customer_lastname = $_POST['customer_lastname'];
		$customer_address = $_POST['customer_address'];
		$customer_contact_info = $_POST['customer_contact_info'];
		$employee = $_POST['employee'];

		//creating customer id
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$customer_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO customer (customer_id, customer_firstname, customer_lastname, customer_contact_info, customer_address, employee_id, customer_created_on) VALUES ('$customer_id', '$customer_firstname', '$customer_lastname', '$customer_contact_info', '$customer_address', '$employee', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer added added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: customer.php');
?>