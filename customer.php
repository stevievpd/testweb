<?php include 'includes/session.php'; ?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer List
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Customer</li>
        <li class="active">Customer List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-8">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Customer ID</th>
                  <th>Name</th>
                  <th>Contact Number</th>
                  <th>Address</th>
                  <th>Added by</th>
                  <th>Added on</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, customer.id AS custid FROM customer LEFT JOIN employees ON employees.id=customer.employee_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $row['customer_id']; ?></td>
                          <td><?php echo $row['customer_firstname'].' '.$row['customer_lastname']; ?></td>
                          <td><?php echo $row['customer_contact_info']; ?></td>
                          <td><?php echo $row['customer_address']; ?></td>
                          <td><?php echo $row['firstname'].' '.$row['lastname'];?></td>
                          <td><?php echo date('M d, Y', strtotime($row['customer_created_on'])) ?></td>

                          <td>
                            <button class="btn btn-primary btn-sm edit btn-flat" data-id="<?php echo $row['custid']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['custid']; ?>"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>

<?php include 'footer.php'; ?>
<?php include 'customer_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

<script>
$(function(){
  $('#example1').on('click', '.view', function(e){
    e.preventDefault();
    $('#view').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('#example1').on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('#example1').on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'customer_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#custid').val(response.customer_id);
      $('#employee_id').val(response.employee_id);
      $('#cust_firstname').val(response.customer_firstname);
      $('#cust_lastname').val(response.customer_lastname);
      $('#sales_id').val(response.sales_id);
      $('#item_id').val(response.item_id);
      $('#item_description').val(response.item_description);
      $('#item_quantity').val(response.item_quantity).html(response.item_quantity);
      $('#item_unit').val(response.item_unit).html(response.item_unit);
      $('#item_price').val(response.item_cost).html(response.item_cost);
      $('#item_total').val(response.item_total).html(response.item_total);
      $('#editCustomerFirstName').val(response.customer_firstname);
      $('#editCustomerLastName').val(response.customer_lastname);
      $('#editContact').val(response.customer_contact_info);
      $('#editCustomerAddress').val(response.address);
    }
  });
}
</script>
</body>
</html>
