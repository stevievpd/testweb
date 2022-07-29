<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $id = $_POST['id'];
		$product_description = $_POST['product_description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $total = $_POST['amount'];
        $purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];


		$sql = "INSERT INTO purchase_order (product_description, quantity, price, total, purchase_date, expected_date) VALUES ('$product_description', '$quantity', '$price', '$total', '$purchase_date','$purchase_date')";
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

	header('location: purchase_order.php');

?>