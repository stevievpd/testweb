<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$addressInfo = $_POST['address'];
		$birthDate = $_POST['birthdate'];
		$contactInfo = $_POST['contact'];
		$genderSelection = $_POST['gender'];
		$jobSelection = $_POST['job'];
		$departmentSelection= $_POST['department'];
		$scheduleSelection = $_POST['schedule'];
		
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], './images/'.$filename);	
		}
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_code = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		$sql = "INSERT INTO employees (employee_code, firstname, lastname, address, birthdate, contact_info, gender, job_id, department_id, schedule_id, photo, created_on) VALUES ('$employee_code','$firstName', '$lastName', '$addressInfo', '$birthDate', '$contactInfo', '$genderSelection', '$jobSelection', '$departmentSelection', '$scheduleSelection', '$filename', NOW() )";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: employee.php');
?>