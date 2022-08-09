<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$productName = $_POST['productName'];
		$productDesc = $_POST['productDesc'];
		$supplier = $_POST['supplier'];
		
		$sql = "UPDATE supplier_product SET productName = '$prouctName', productDesc = '$productDesc' , supplier_product_id = '$supplier'";
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