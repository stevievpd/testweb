<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$supplier = $_POST['supplier'];
		$supplier_product = $_POST['supplier_product'];
		$payment_terms = $_POST['payment_terms'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
		$subtotal = $_POST['subtotal'];
		$sales_tax = $_POST['sales_tax'];
        $total = $_POST['total'];
        $purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];
		$status = $_POST['status'];

		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		
	$purchase_order_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

	$sql = "INSERT INTO purchase_order (purchase_order_id, supplier_id, supplier_product_id, payment_id, quantity, price,subtotal,sales_tax, total, purchase_date, expected_date,status_id) VALUES ('$purchase_order_id','$supplier','$supplier_product','$payment_terms','$quantity', '$price','$subtotal','$sales_tax','$total', '$purchase_date','$expected_date','$status')";
	if($conn->query($sql)){
		$_SESSION['success'] = 'Purchase Order added successfully';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}

}
else{
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: purchase_order.php');

?>