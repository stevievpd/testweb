<?php
	include 'includes/session.php';
	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE , inventory.id as inventoryID FROM inventory LEFT JOIN supplier_product on supplier_product.supplier_product_id = inventory.product_id WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Item deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: inventory.php');
	
?>