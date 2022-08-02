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

		$sql = "INSERT INTO purchase_order (purchase_order_id, product_name, quantity, price, subtotal, sales_tax, total, purchase_date, expected_date) VALUES ('$purchase_order_id','$product_name', '$quantity', '$price', '$subtotal','$sales_tax','$total', '$purchase_date','$purchase_date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product added successfully';
		}
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
	$purchase_order_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: purchase_order.php');

?>