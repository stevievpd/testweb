<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
<<<<<<< HEAD:supplier_product _add.php
		$supplierName = $_POST['supplier_product_id'];
=======
>>>>>>> a89577ca612ec2ec4d11ec7be853e94af6444d39:product_add.php
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
		$supplier = $_POST['supplier'];
	
<<<<<<< HEAD:supplier_product _add.php
		$sql = "INSERT INTO supplier_product (supplier_product_id, supplier_product_name, supplier_product_description) VALUES ('$productCode', '$productName','$productDesc')";
=======
		$sql = "INSERT INTO product (product_code, product_name, product_description, supplier_id) VALUES ('$productCode', '$productName','$productDesc', '$supplier')";
>>>>>>> a89577ca612ec2ec4d11ec7be853e94af6444d39:product_add.php
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

	header('location: product.php');

?>