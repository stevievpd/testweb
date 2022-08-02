<?php
include 'includes/session.php';
if (isset($_POST['view'])) {
$id = $_POST['id'];
$query = mysql_query("SELECT * FROM purchase_order WHERE id=$id", $connection);
while ($row1 = mysql_fetch_array($query)) {
?>
<div class="form">
<span>Name:</span> <?php echo $row1['employee_name']; ?>
<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
<span>Address:</span> <?php echo $row1['employee_address']; ?>
</div>
<?php
}
}
?>


       

