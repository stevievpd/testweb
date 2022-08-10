<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$description = $_POST['description'];
		$quantity = $_POST['quantity'];
        $cost = $_POST['cost'];
        $price = $_POST['price'];
		$filename = $_FILES["photo"]["name"];
    	$tempname = $_FILES["photo"]["tmp_name"];
    	$folder = "./images/" . $filename;
		$productID = $_POST['productID'];
	if(!empty($filename)){
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
	}
	// $letters = '';
	// 	$numbers = '';
	// 	foreach (range('A', 'Z') as $char) {
	// 	    $letters .= $char;
	// 	}
	// 	for($i = 0; $i < 10; $i++){
	// 		$numbers .= $i;
	// 	}
		
	// $product_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

	$sql = "INSERT INTO inventory (photo, product_id, description, quantity, cost, price, stamp) VALUES ('$filename', '$productID','$description', '$quantity', '$cost', '$price', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Inventory added successfully';
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