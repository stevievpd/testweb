<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$supplier = $_POST['supplier'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
		$letters = '';
		$numbers = '';
		
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		
	$supplier_product_code = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

		$sql = "INSERT INTO supplier_product (supplier_product_code, supplier_product_name, supplier_product_description, supplier_id) VALUES ('$supplier_product_code','$productName','$productDesc','$supplier')";
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