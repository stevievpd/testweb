                <div class="row">
                    <div class="col-lg-6" target="stocks">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>STOCKS</b></h3>
                                <div class="box-tools pull-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label>Search </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Unit Price</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM inventory LEFT JOIN supplier_product on supplier_product.supplier_product_id = inventory.product_id";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                        ?>
                                    <tr>
                                        <td><img src="<?php echo (!empty($row['photo']))? './images/'.$row['photo']:'./images/profile.jpg';?>" width="30px" height="30px"><a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['id']; ?>"><span class="fa fa-edit"></span></a></td>
                                        <td><i class='fa fa-th-large' aria-hidden='true'></i> <?php echo $row['supplier_product_name']; ?></td>
                                        <td><i class="fa fa-file-text" aria-hidden="true"></i> <?php echo $row['description']; ?></td>
                                        <td>₱ <?php echo $row['price']; ?></td>
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
                     <!-- suppliers -->
                    <div class="row">
                    <div class="col-lg-6" target="stocks">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>SUPPLIERS</b></h3>
                                <div class="box-tools pull-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label>Search </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Photo</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                       $sql = "SELECT * FROM supplier";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                        ?>
                                    <tr>
                                    <td><img src="<?php echo (!empty($row['photo']))? './images/'.$row['photo']:'./images/profile.jpg';?>" width="30px" height="30px"><a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['id']; ?>"><span class="fa fa-edit"></span></a></td>
                                    <td><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['address']; ?></td>
                                    <td><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row['email']; ?></td>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row['phone_number']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- customers -->
                    <div class="row">
                    <div class="col-lg-6" target="stocks">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>SUPPLIERS</b></h3>
                                <div class="box-tools pull-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label>Search </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Photo</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                       $sql = "SELECT * FROM supplier";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                        ?>
                                    <tr>
                                    <td><img src="<?php echo (!empty($row['photo']))? './images/'.$row['photo']:'./images/profile.jpg';?>" width="30px" height="30px"><a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['id']; ?>"><span class="fa fa-edit"></span></a></td>
                                    <td><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['address']; ?></td>
                                    <td><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row['email']; ?></td>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row['phone_number']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <table class="table-responsive">
                                    <thead class="table-light">
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <td>Photo</td>
                                        <td>Product Name</td>
                                        <td>Description</td>
                                        <td>Unit Price</td>
                                        <td>Quantity</td>
                                        <td>Total</td>
                                    </tbody>
                                </table>





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
                        
                                                        
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>