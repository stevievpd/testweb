<!--View PO-->
<?php include 'includes/session.php'; 

$sql = "SELECT * FROM purchase_order";
$query = $conn->query($sql);
while($row1 = $query->fetch_assoc()){
?>
<div class="card-body"> 
<b>Product Name</b> <span class="card-text"><?php echo $row1['product_name']; ?> </span><br>
<b>Quantity</b> <span class="card-text"><?php echo $row1['quantity']; ?> </span><br>
<b>Subtotal</b> <span class="card-text"><?php echo $row1['subtotal']; ?> </span><br>
<b>Sales Tax</b> <span class="card-text"><?php echo $row1['sales_tax']; ?> </span><br>
<b>Purchase Date</b> <span class="card-text"><?php echo $row1['purchase_date']; ?> </span><br>
<b>Expected Date</b> <span class="card-text"><?php echo $row1['expected_date']; ?> </span><br>
</div>
<?php
}
?>
<?php include 'footer.php' ?>