<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$supplier = $_POST['supplier'];
		$supplier_product = $_POST['supplier_product'];
		$payment_terms = $_POST['payment_terms'];
		$status = $_POST['status'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$total = $_POST['total'];
		$purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];

		$sql = "UPDATE purchase_order SET quantity = '$quantity', price = '$price', total = '$total', purchase_date = '$purchase_date' , expected_date = '$expected_date',  supplier_id = '$supplier', supplier_product_id = '$supplier_product', payment_id = '$payment_terms', status_id = '$status' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Purchase Order updated successfully';
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
