<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$productID = $_POST['id'];
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
		$productDesc = $_POST['productDesc'];

		
<<<<<<< HEAD:supplier_product_edit.php
		$sql = "UPDATE supplier_product SET supplier_product_code = '$productCode', supplier_product_name = '$productName', supplier_product_description = '$productDesc' WHERE supplier_product_id = '$productID'";
=======
		$sql = "UPDATE product SET product_code = '$productCode', product_name = '$productName', product_description = '$productDesc' WHERE product_id = '$productID'";
>>>>>>> 669184148367ba983e600912d6321cfd6136f746:product_edit.php
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