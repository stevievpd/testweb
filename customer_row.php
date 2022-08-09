<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
        $sql = "SELECT *, customer.id AS custid FROM customer LEFT JOIN sales ON sales.id=customer.id LEFT JOIN employees ON employees.id=customer.id LEFT JOIN items ON items.id=sales.id WHERE customer.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>