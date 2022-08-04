<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$productID = $_POST['id'];
		$sql = "DELETE FROM product WHERE id = '$productID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: product.php');
	
?>