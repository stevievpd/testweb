<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$logo = $_POST['logo'];
		$business_name = $_POST['business_name'];
		$product = $_POST['[product]'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['logo']['tmp_name'], '../images/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO supplier (logo, business_name,product, address, email, phone_number, stamp) VALUES ('$logo', '$business_name','$product', '$address', '$email', '$phone_number', NOW())";
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