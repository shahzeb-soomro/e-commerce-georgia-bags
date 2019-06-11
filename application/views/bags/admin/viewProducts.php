<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Georgia Bags | Admin Panel</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url();?>/assets/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?php echo base_url();?>/assets/admin/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url();?>/assets/admin/css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>/assets/admin/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url();?>/assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Georgia Bags Admin Panel</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!--        <ul class="nav navbar-nav navbar-left navbar-top-links">-->
            <!--            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>-->
            <!--        </ul>-->

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Administrator <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('MainController/')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('AdminController/')?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-bag fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('AdminController/productSetup')?>">Add Products</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('AdminController/viewProducts')?>">View Products</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Category Setup</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="viewProducts.php"><i class="fa fa-cart-plus fa-fw"></i> Orders</a>
                        </li>
                        <li>
                            <a href="addProduct.php"><i class="fa fa-user-plus fa-fw"></i> Customers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Products Setup</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    View Products
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Short Description</th>
                                                    <th>Long Description</th>
                                                    <th>Product Image</th>
                                                    <th>Category</th>
                                                    <th>Price 72 Natural</th>
                                                    <th>Price 144 Natural</th>
                                                    <th>Price 300 Natural</th>
                                                    <th>Price 600 Natural</th>
                                                    <th>Price 1000 Natural</th>
                                                    <th>Price 2500 Natural</th>
                                                    <th>Price 72 Color</th>
                                                    <th>Price 144 Color</th>
                                                    <th>Price 300 Color</th>
                                                    <th>Price 600 Color</th>
                                                    <th>Price 1000 Color</th>
                                                    <th>Price 2500 Color</th>
                                                    <th>Price Includes</th>
                                                    <th>Lead Time</th>
                                                    <th>Rush Available</th>
                                                    <th>Imprint Area</th>
                                                    <th>Setup Charge</th>
                                                    <th>Repeat Setup</th>
                                                    <th>Flash Charge</th>
                                                    <th>PMS Match</th>
                                                    <th>Less Than Minimum</th>
                                                    <th>Color Change Charge</th>
                                                    <th>Specification Sample</th>
                                                    <th>Item No</th>
                                                    <th>Item Name</th>
                                                    <th>Available Colors</th>
                                                    <th>Product Size</th>
                                                    <th>Quality Material</th>
                                                    <th>Quality Weight</th>
                                                    <th>Handle Length</th>
                                                    <th>Side Gussets</th>
                                                    <th>Bottom Gussets</th>
                                                    <th>Available Decorations</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($products as $item) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $item['product_name'];?></td>
                                                    <td><?php echo $item['short_description'];?></td>
                                                    <td><?php echo $item['long_description'];?></td>
                                                    <td><?php echo $item['product_image'];?></td>
                                                    <td><?php echo $item['cat_id'];?></td>
                                                    <td><?php echo $item['72_ntr'];?></td>
                                                    <td><?php echo $item['144_ntr'];?></td>
                                                    <td><?php echo $item['300_ntr'];?></td>
                                                    <td><?php echo $item['600_ntr'];?></td>
                                                    <td><?php echo $item['1000_ntr'];?></td>
                                                    <td><?php echo $item['2500_ntr'];?></td>
                                                    <td><?php echo $item['72_clr'];?></td>
                                                    <td><?php echo $item['144_clr'];?></td>
                                                    <td><?php echo $item['300_clr'];?></td>
                                                    <td><?php echo $item['600_clr'];?></td>
                                                    <td><?php echo $item['1000_clr'];?></td>
                                                    <td><?php echo $item['2500_clr'];?></td>
                                                    <td><?php echo $item['price_includes'];?></td>
                                                    <td><?php echo $item['lead_time'];?></td>
                                                    <td><?php echo $item['rush_available'];?></td>
                                                    <td><?php echo $item['imprint_area'];?></td>
                                                    <td><?php echo $item['setup_charge'];?></td>
                                                    <td><?php echo $item['repeat_setup'];?></td>
                                                    <td><?php echo $item['flash_charge'];?></td>
                                                    <td><?php echo $item['pms_match'];?></td>
                                                    <td><?php echo $item['less_than_minimum'];?></td>
                                                    <td><?php echo $item['color_change_charge'];?></td>
                                                    <td><?php echo $item['spec_sample'];?></td>
                                                    <td><?php echo $item['item_no'];?></td>
                                                    <td><?php echo $item['item_name'];?></td>
                                                    <td><?php echo $item['available_colors'];?></td>
                                                    <td><?php echo $item['product_size'];?></td>
                                                    <td><?php echo $item['quality_matrial'];?></td>
                                                    <td><?php echo $item['quality_weight'];?></td>
                                                    <td><?php echo $item['handle_length'];?></td>
                                                    <td><?php echo $item['side_gussets'];?></td>
                                                    <td><?php echo $item['bottom_gussets'];?></td>
                                                    <td><?php echo $item['available_decoration'];?></td>
                                                    <td><a href="<?php echo site_url('AdminController/editProduct/'.$item['idproducts'])?>"><i class="fa fa-pencil fa-fw"></i></a></td>
                                                    <td><a href="<?php echo site_url('AdminController/deleteProduct/'.$item['idproducts'])?>"><i class="fa fa-trash fa-fw"></i></a></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url();?>/assets/admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url();?>/assets/admin/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?php echo base_url();?>/assets/admin/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>/assets/admin/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url();?>/assets/admin/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
