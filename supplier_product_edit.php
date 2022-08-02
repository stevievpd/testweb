<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
		$productDesc = $_POST['productDesc'];

		
		$sql = "UPDATE supplier_product SET supplier_product_code = '$productCode', supplier_product_name = '$productName', supplier_product_description = '$productDesc' WHERE supplier_product_id = '$productID'";
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

	header('location: supplier_product.php');
?>