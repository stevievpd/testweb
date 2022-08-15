<?php
	include 'includes/session.php';
	if(isset($_POST['status'])){
		$id = $_POST['id'];
		$status =$_POST['status'];

		$sql = "UPDATE purchase_order SET status_id = '$status' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Status updated successfully';
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