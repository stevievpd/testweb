<?php
	include 'includes/session.php';
	if(isset($_POST['view'])){
		$id = $_POST['id'];
		$product_name = $_POST['product_name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$subtotal = $_POST['subtotal'];
		$sales_tax = $_POST['sales_tax'];
		$total = $_POST['total'];
		$purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];

		$sql = "SELECT FROM purchase_order WHERE id = '$id'";


	header('location: purchase_order.php');
?>
