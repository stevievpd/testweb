<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$vendor_name = $_POST['vendor_name'];
		$product_name = $_POST['product_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $total = $_POST['total'];
        $purchase_date = $_POST['purchase_date'];
		$expected_date = $_POST['expected_date'];

	$sql = "INSERT INTO purchase_order (vendor_name, product_name, quantity, price, total, purchase_date, expected_date) VALUES ('$vendor_name', '$product_name','$quantity', '$price','$total', '$purchase_date','$expected_date')";
	if($conn->query($sql)){
		$_SESSION['success'] = 'Product added successfully';
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