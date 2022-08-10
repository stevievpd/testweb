<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$business_name = $_POST['business_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$filename = $_FILES["photo"]["name"];
    	$tempname = $_FILES["photo"]["tmp_name"];
    	$folder = "./images/" . $filename;
		
	if(!empty($filename)){
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
	}
	$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
	$supplier_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

	$sql = "INSERT INTO supplier (supplier_id, photo, business_name, address, email, phone_number, time_stamp) VALUES ('$supplier_id', '$filename', '$business_name', '$address', '$email', '$phone_number', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier added successfully';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}

}
else{
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: supplier.php');

?>