<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE supplier, supplier_product FROM supplier LEFT JOIN supplier_product ON supplier_product.supplier_id=supplier.id WHERE supplier.id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: supplier.php');
	
?>