<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$description = $_POST['description'];
		$quantity = $_POST['quantity'];
		$cost = $_POST['cost'];
		$price = $_POST['price'];

		$sql = "UPDATE inventory SET description = '$description', quantity = '$quantity', cost = '$cost',price = '$price' WHERE id = '$id'";
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
