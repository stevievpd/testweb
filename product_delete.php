<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$productID = $_POST['id'];
<<<<<<< HEAD:supplier_product_delete.php
		$sql = "DELETE FROM supplier_product WHERE supplier_product_id = '$productID'";
=======
		$sql = "DELETE FROM product WHERE id = '$productID'";
>>>>>>> 669184148367ba983e600912d6321cfd6136f746:product_delete.php
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