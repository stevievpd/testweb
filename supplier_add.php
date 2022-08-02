<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$business_name = $_POST['business_name'];
		$product = $_POST['product'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['logo']['tmp_name'], '../images/'.$filename);	
		}
	
		$sql = "INSERT INTO supplier (logo, business_name, product, address, email, phone_number, time_stamp) VALUES ('$filename', '$business_name','$product', '$address', '$email', '$phone_number', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: supplier.php');

?>