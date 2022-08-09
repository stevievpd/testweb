<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$productname = $_POST['productname'];
		$productdescription = $_POST['productdescription'];
		$supplier = $_POST['supplier'];
		
		$sql = "UPDATE supplier_product SET supplier_product_name = '$productname', supplier_product_description = '$productdescription' , supplier_product_id = '$supplier' WHERE id = '$id'";
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