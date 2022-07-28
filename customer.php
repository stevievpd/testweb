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
        <div class="col-xs-12">
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
                  <th>Transaction ID</th>
                  <th>Employee ID</th>
                  <th>Date</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, customer.id AS custid FROM customer LEFT JOIN sales ON sales.id=customer.id LEFT JOIN employees ON employees.id=customer.id LEFT JOIN items ON items.id=sales.id ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $row['customer_id']; ?></td>
                          <td><?php echo $row['cust_firstname'].' '.$row['cust_lastname']; ?></td>
                          <td><?php echo $row['cust_contact_info']; ?></td>
                          <td><?php echo $row['cust_address']; ?></td>
                          <td><?php echo $row['sales_id']; ?></td>
                          <td><?php echo $row['employee_id']; ?></td>
                          <td><?php echo date('M d, Y', strtotime($row['date'])) ?></td>

                          <td>
                            <button class="btn btn-primary btn-sm view btn-flat" data-id="<?php echo $row['custid']; ?>"><i class="fa fa-eye"></i> View</button>
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
      $('#cust_firstname').val(response.cust_firstname);
      $('#cust_lastname').val(response.cust_lastname);
      $('#sales_id').val(response.sales_id);
      $('#item_id').val(response.item_id);
      $('#item_description').val(response.item_description);
      $('#item_quantity').val(response.item_quantity).html(response.item_quantity);
      $('#item_unit').val(response.item_unit).html(response.item_unit);
      $('#item_price').val(response.item_cost).html(response.item_cost);
      $('#item_total').val(response.item_total).html(response.item_total);
    }
  });
}
</script>
</body>
</html>
