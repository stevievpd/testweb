<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$supplierName = $_POST['supplier_product_id'];
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
		$supplier = $_POST['supplier'];
	
		$sql = "INSERT INTO supplier_product (supplier_product_code, supplier_product_name, supplier_product_description, supplier_id) VALUES ('$productCode', '$productName','$productDesc', '$supplier')";
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

	header('location: supplier_product.php');

?>