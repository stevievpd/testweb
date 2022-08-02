<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$supplierName = $_POST['supplierName'];
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
	
		$sql = "INSERT INTO supplier_product (supplier_product_code, supplier_product_name, supplier_product_description) VALUES ('$productCode', '$productName','$productDesc')";
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

	header('location: supplier_product.php');

?>