<?php include 'includes/session.php'; ?>
<?php include 'header.php'; ?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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

                    <div class="col-lg-2 col-xs-2">
                        <?php
                        $connect = mysqli_connect("localhost", "root", "", "testing1");
                        $tab_query = "SELECT * FROM category ORDER BY category_id ASC";
                        $tab_result = mysqli_query($connect, $tab_query);
                        $tab_menu = '';
                        $tab_content = '';
                        $i = 0;
                            while($row = mysqli_fetch_array($tab_result)){
                                if($i == 0){
                                    $tab_menu .= '
                                    <li class="active"><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category_name"].'</a></li>
                                    ';
                                    $tab_content .= '
                                    <div id="'.$row["category_id"].'" class="tab-pane fade in active">
                                    ';
                                }
                                else{
                                    $tab_menu .= '
                                    <li><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category_name"].'</a></li>
                                    ';
                                    $tab_content .= '
                                    <div id="'.$row["category_id"].'" class="tab-pane fade">
                                    ';
                                }

                            $product_query = "SELECT * FROM product WHERE category_id = '".$row["category_id"]."'";
                            $product_result = mysqli_query($connect, $product_query);
                            while($sub_row = mysqli_fetch_array($product_result)){
                                $tab_content .= '                              
                                    <div class="row text-center py-5">
                                        <div class="col-md-10 col-sm-6 my-8 my-md-5">
                                            <div class="col-md-2" style="margin-bottom:20px; ">                                           
                                                    <div class="card shadow">                                                
                                                        <div class="card-body">
                                                            <img src="./images/'.$sub_row["product_image"].'" class="img-responsive img-fluid card-img-top" />
                                                            <h5>'.$sub_row["product_name"].'</h5>
                                                        </div>                                      
                                                    </div>
                                            </div>
                                        </div>
                                    </div>                              
                                ';
                                }
                            $tab_content .= '<div style="clear:both"></div></div>';
                            $i++;
                            }
                    ?>

                        <div class="container">
                            <br/>
                            <ul class="nav nav-tabs">
                                <?php
                                    echo $tab_menu;
                                ?>
                            </ul>
                            <div class="tab-content">
                                <br />
                                <?php
                                    echo $tab_content;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    <?php include 'footer.php'; ?>
    </div>