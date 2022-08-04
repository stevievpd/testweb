<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
	
		$sql = "INSERT INTO product (product_code, product_name, product_description) VALUES ('$productCode', '$productName','$productDesc')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: product.php');

?>