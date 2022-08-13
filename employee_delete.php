<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE employees, attendance FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN attendance ON attendance.employee_id=employees.id LEFT join cashadvance on cashadvance.employee_id=employees.id LEFT JOIN overtime on overtime.employee_id=employees.id WHERE employees.id='$id';";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: employee.php');
	
?>