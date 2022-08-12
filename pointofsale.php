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
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
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

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Keyboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Software</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Hardware</a>
                        </li>
                    </ul>

                </div>

            </section>
        </div>
        <?php include 'footer.php'; ?>

    </div>