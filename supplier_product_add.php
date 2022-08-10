<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$supplier = $_POST['supplier'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
		
		$numbers = '';
		
		for($i = 0; $i < 12; $i++){
			$numbers .= $i;
		}
		
		$supplier_product_id = substr(str_shuffle($numbers), 0, 13);

		$sql = "INSERT INTO supplier_product (supplier_product_id, supplier_product_name, supplier_product_description, supplier_id) VALUES ('$supplier_product_id','$productName','$productDesc','$supplier')";
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