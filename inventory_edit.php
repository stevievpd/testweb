<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$description = $_POST['description'];
		$quantity = $_POST['quantity'];
		$cost = $_POST['cost'];
		$price = $_POST['price'];
		$cost = $_POST['cost'];

<<<<<<< HEAD
		$sql = "UPDATE inventory SET description = '$description', quantity = '$quantity', cost = '$cost',price = '$price' WHERE id = '$id'";
=======
		$sql = "UPDATE inventory SET description = '$description', quantity = '$quantity', price = '$price', cost = '$cost' WHERE id = '$id'";
>>>>>>> 18a4124cbb593a64542ddf4fc2506963c93a22d7
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
