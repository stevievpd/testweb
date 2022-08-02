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
        $query = $conn->query($sql);
        while($row = $query->fetch_assoc()){
            echo"
            <tr>
            <td>".$row['id']."</td>
            <td>".$row['product_name']."</td>
            <td>".$row['quantity']."</td>
            <td>".$row['price']."</td>
            <td>".$row['subtotal']."</td>
            <td>".$row['sales_tax']."</td>
            <td>".$row['total']."</td>
            </tr>
            ";
        }
        
		if($conn->query($sql)){

			$_SESSION['success'] = 'Inventory updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select product to edit first';
	}

	header('location: purchase_order.php');
?>