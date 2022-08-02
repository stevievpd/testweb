<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		
		$product_name = $_POST['product_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
		$subtotal = $_POST['subtotal'];
		$sales_tax = $_POST['sales_tax'];
        $total = $_POST['total'];
        $purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];

		$sql = "INSERT INTO purchase_order (product_name, quantity, price, subtotal, sales_tax, total, purchase_date, expected_date) VALUES ('$product_name', '$quantity', '$price', '$subtotal','$sales_tax','$total', '$purchase_date','$purchase_date')";
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