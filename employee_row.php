<?php 
	include 'includes/session.php';

	if(isset($_POST['employee_id'])){
		$id = $_POST['employee_id'];
		$sql = "SELECT e.employee_id, e.photo, e.employee_code, e.employee_id, e.firstname, e.lastname, e.address, e.birthdate, e.contact_info, e.gender, e.delete_flag, e.created_on, d.department_name, j.description, s.time_in, s.time_out FROM employees e INNER JOIN department as d on e.department_id=d.department_id INNER JOIN job as j on e.job_id=j.job_id INNER JOIN schedules as s on e.schedule_id=s.schedule_id WHERE e.employee_id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>