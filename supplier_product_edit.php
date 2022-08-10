<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$supplier_product_name = $_POST['productName'];
		$supplier_product_description = $_POST['productDescription'];
		$supplier = $_POST['supplier'];
		
		$sql = "UPDATE supplier_product SET supplier_product_name = '$supplier_product_name', supplier_product_description = '$supplier_product_description' , supplier_id = '$supplier' WHERE id = '$productID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier product updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select product to edit first';
	}

	header('location: supplier_product.php');
?>