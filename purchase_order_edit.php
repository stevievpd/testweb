<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$product_description= $_POST['product_id'];
		$description = $_POST['description'];
		$unit = $_POST['unit'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

		$sql = "UPDATE inventory SET id = '$id', product_description = '$product_description', quantity = '$quantity', price = '$price', total = '$total', purchase-date = '$purchase_date' , expected_date = '$expected_date'WHERE id = '$id'";
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