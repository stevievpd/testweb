<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $product_id = $_POST['product_id'];
		$description = $_POST['description'];
        $quantity = $_POST['quantity'];
		$price = $_POST['price'];
		
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$product_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//

		$sql = "INSERT INTO inventory (product_id, description, quantity, price, stamp) VALUES ('$product_id', '$description', '$quantity', '$price', NOW())";
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

	header('location: inventory.php');

?>