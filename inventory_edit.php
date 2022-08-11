<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$product_id = $_POST['product_id'];
		$description = $_POST['description'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$cost = $_POST['cost'];

		$sql = "UPDATE inventory SET description = '$description', quantity = '$quantity', price = '$price', cost = '$cost' WHERE id = '$id'";
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
	header('location: inventory.php');
?>
