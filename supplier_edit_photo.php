<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/'.$filename);	
		}
		
		$sql = "UPDATE supplier SET photo = '$filename' WHERE supplier_id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select supplier to update photo first';
	}

	header('location: supplier.php');
?>