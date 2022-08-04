<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
<<<<<<< HEAD:supplier_product_row.php
		$sql = "SELECT * FROM supplier_product WHERE supplier_product_id = '$id'";
=======
		$sql = "SELECT * FROM product WHERE product_id = '$id'";
>>>>>>> 669184148367ba983e600912d6321cfd6136f746:product_row.php
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>