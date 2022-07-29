<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){

        $supplier_name = $_POST['supplier_name'];
		$business_name = $_POST['business_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
        $bank = $_POST['bank'];
		$bank_account = $_POST['bank_account'];
        $branch = $_POST['branch'];
        $tin = $_POST['tin'];

		$sql = "INSERT INTO supplier (supplier_name , business_name, address, email,phone_number,bank,bank_account,branch,tin, stamp) VALUES ('$supplier_name', '$business_name', '$address', '$email', '$phone_number','$bank','$bank_account','$branch','$tin', NOW())";
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