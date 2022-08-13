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
                    Point Of Sales
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

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

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM employees";
                                    $query = $conn->query($sql);
                                    echo "<h3>".$query->num_rows."</h3>";
                                ?>
                                <p>STOCKS </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <a href="inventory.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM attendance";
                                    $query = $conn->query($sql);
                                    $total = $query->num_rows;

                                    $sql = "SELECT * FROM attendance WHERE status = 1";
                                    $query = $conn->query($sql);
                                    $early = $query->num_rows;
                                    
                                    $percentage = ($early/$total)*100;

                                    echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
                                ?>

                                <p>SUPPLIERS</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <a href="supplier.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM attendance";
                                    $query = $conn->query($sql);
                                    $total = $query->num_rows;

                                    $sql = "SELECT * FROM attendance WHERE status = 1";
                                    $query = $conn->query($sql);
                                    $early = $query->num_rows;
                                    
                                    $percentage = ($early/$total)*100;

                                    echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
                                ?>

                                <p>CUSTOMERS</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="customer.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM attendance";
                                    $query = $conn->query($sql);
                                    $total = $query->num_rows;

                                    $sql = "SELECT * FROM attendance WHERE status = 1";
                                    $query = $conn->query($sql);
                                    $early = $query->num_rows;
                                    
                                    $percentage = ($early/$total)*100;

                                    echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
                                ?>
                                <p>ORDERS</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cart-plus"></i>
                            </div>
                            <a href="purchase_order.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM inventory WHERE quantity<=20";
                                    $query = $conn->query($sql);
                                    echo "<h3>".$query->num_rows."</h3>"
                                ?>
                                <p>SALES</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <a href="customer.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <?php
                                    $sql = "SELECT * FROM inventory WHERE quantity<=20";
                                    $query = $conn->query($sql);
                                    echo "<h3>".$query->num_rows."</h3>"
                                ?>
                                <p>REFUNDS</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-money"></i>
                            </div>
                            <a href="purchase_order.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                 <h3 class="box-title"><b>STOCKS</b></h3>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-nowrap table-centered mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>

                                                </tr>
                                            </thead>
                                            <tbody>                                                      
                                                <?php
                                                $sql = "SELECT *, inventory.id as inventoryID FROM inventory LEFT JOIN supplier_product on supplier_product.supplier_product_id = inventory.product_id";
                                                    $query = $conn->query($sql);
                                                    while($row = $query->fetch_assoc()){
                                                    ?>
                                                        <tr>    
                                                        <td><img src="<?php echo (!empty($row['photo']))? './images/'.$row['photo']:'./images/profile.jpg';?>" width="50px" height="50px"><a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['id']; ?>"></a></td>
                                                        <td><?php echo $row['description']; ?></td> 
                                                        <td>₱ <?php echo $row['price']; ?></td>
                                                        <td>
                                                            <input type="number" min="1"class="form-control" id="quantity" name="quantity"  placeholder="₱ 0.00" style="width: 90px;" oninput="add()">
                                                        </td>
                                                        <td> <input type="number" min="1" class="form-control" id="total" name="total"  placeholder="₱ 0.00" style="width: 90px;" oninput="add()">                      
                                                        </td>
                        
                                                        
                                                        <script>
                                                function add() {
                                                var price = document.getElementById("price").value;
                                                var quantity = document.getElementById("quantity").value;
                                                var total = price * quantity;
                                                document.getElementById("total").value = total;
                                                }
                                                </script>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
          <!-- stocks -->
          
        <?php include 'footer.php'; ?>
    </div>
   