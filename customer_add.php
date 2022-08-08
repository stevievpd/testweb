<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact_info = $_POST['contact_info'];
		$employee = $_POST['employee'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/'.$filename);	
		}
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
		$sql = "INSERT INTO customer (customer_id, photo, firstname, lastname, contact_info, address, employee_id, created_on) VALUES ('$customer_id', '$filename', '$firstname', '$lastname', '$contact_info', '$address', '$employee', NOW())";
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