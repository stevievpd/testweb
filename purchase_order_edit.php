<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$product_name = $_POST['product_name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$subtotal = $_POST['subtotal'];
		$sales_tax = $_POST['sales_tax'];
		$total = $_POST['total'];
		$purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];

		$sql = "UPDATE purchase_order SET id = '$id', product_name = '$product_name', quantity = '$quantity', price = '$price', subtotal = '$subtotal', sales_tax = '$sales_tax', total = '$total', purchase_date = '$purchase_date' , expected_date = '$expected_date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Inventory updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select product to edit first';
	}

	header('location: purchase_order.php');
?>