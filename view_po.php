<!--view-->

<?php include 'includes/session.php'; ?>
<?php
    $id = $_GET['ID'];
?>
<div class="modal-header">
    <button type="button" class="close" aria-label="Close">
        <span aria-hidden="true"><a href="purchase_order.php">&times;</a></span></button>
    <h4 class="modal-title"><b>Purchase Order Details</b></h4>
</div>

    <div class="card-body">
        <?php
            $sql = "SELECT *, purchase_order.id FROM purchase_order LEFT JOIN supplier ON supplier.id=purchase_order.supplier_id LEFT JOIN supplier_product ON supplier_product.id=purchase_order.supplier_product_id LEFT JOIN status ON status.id =purchase_order.status_id WHERE purchase_order.id = '$id'";
            $query = $conn->query($sql);
            while($row1 = $query->fetch_assoc()){
        ?>
        <!-----------------PURCHASE ORDER------------------->
        <p class="col-sm-6 col-md-6 col-lg-6"><b>PO Number: </b><span
                class="card-text"><?php echo $row1['purchase_order_id'];?> </span><br></p>
        <p class="col-sm-6 col-md-6 col-lg-6"><b>Status: </b><span
                class="card-text"><?php echo $row1['status_description']; ?> </span><br><br></p>
        <p class="col-sm-6 col-md-6 col-lg-6"><b>Purchase Date: </b><span
                class="card-text"><?php echo $row1['purchase_date']; ?> </span><br></p>
        <p class="col-sm-6 col-md-6 col-lg-8"><b>Expected Date: </b><span
                class="card-text"><?php echo $row1['expected_date']; ?> </span><br></p>
        <p class="col-sm-6 col-md-6 col-lg-6"><b>Order by: </b><span>
            </span><br><br></p>
        <p class="col-sm-6 col-md-6 col-lg-8 lead"><b>Supplier</b><span class="card-text"></span></p><br>
        <!-----------------SUPPLIER------------------->
        <p class="col-sm-6 col-md-6 col-lg-7"><b>Supplier Name: </b><span
                class="card-text"><?php echo $row1['business_name']; ?> </span><br></p>
        <p class="col-sm-6 col-md-6 col-lg-7"><b>Store Destination: </b><span
                class="card-text"><?php echo $row1['address']; ?> </span><br></p>
        <p class="col-sm-6 col-md-5 col-lg-6"><b>Address: </b><span
                class="card-text"><?php echo $row1['address']; ?> </span><br></p>
        <p class="col-sm-6 col-md-5 col-lg-8"><b>Phone Number: </b><span
                class="card-text"><?php echo $row1['phone_number']; ?> </span><br></p>
        <p class="col-sm-6 col-md-5 col-lg-6"><b>Email: </b><span
                class="card-text"><?php echo $row1['email']; ?></span><br><br></p>
        <p class="col-sm-6 col-md-5 col-lg-8 lead"><b> Items </b><span class="card-text"></span><br></p>
        <div class="modal-footer">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Cost</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left"><?php echo $row1['supplier_product_description']?></td>
                        <td class="text-left"><?php echo $row1['quantity']?></td>
                        <td class="text-left"><?php echo $row1['price']?></td>
                        <td class="text-left"><?php echo $row1['total']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
                }
            ?>
    </div>
</div>