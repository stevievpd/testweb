<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$empid = $_POST['id'];
		$sql = "SELECT e.employee_id as empid, e.firstname, e.lastname, s.time_in, s.time_out from employees e INNER JOIN schedules as s on e.employee_id = s.employee_id WHERE e.employee_id = '$empid'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>