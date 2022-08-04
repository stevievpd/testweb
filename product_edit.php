<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
		$productDesc = $_POST['productDesc'];

		
		$sql = "UPDATE product SET product_code = '$productCode', product_name = '$productName', product_description = '$productDesc' WHERE product_id = '$productID'";
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

	header('location: product.php');
?>