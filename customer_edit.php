<!-- <?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
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
?> -->



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