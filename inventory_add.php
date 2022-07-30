<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $product_id = $_POST['product_id'];
		$description = $_POST['description'];
        $quantity = $_POST['quantity'];
		$price = $_POST['price'];


		$sql = "INSERT INTO inventory (product_id, description, quantity, price, stamp) VALUES ('$product_id', '$description', '$quantity', '$price', NOW())";
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

	header('location: inventory.php');

?>