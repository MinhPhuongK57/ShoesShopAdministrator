<?php
    $level = "";
    include $level."DB/database.php";
    //COUNT
    $sql__total_products = $connect ->query('select count(id_product) from product')->fetchColumn(); 
    $sql__total_bill = $connect ->query('select count(id_bill) from bill')->fetchColumn(); 
    $sql__total_feedback = $connect ->query('select count(id_feedback) from feedback')->fetchColumn(); 
    $sql__total_customer = $connect ->query('select count(id_card) from customer_account')->fetchColumn();
    $sql__total_provider = $connect ->query('select count(id_provider) from provider')->fetchColumn();
    $sql__totalprice_bill = $connect ->query('select sum(totalprice) from bill')->fetchColumn();


?>

<!-- Begin Page Content -->
<div class="container-fluid pt-4">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 ml-2 text-gray-800"><code>Statistical detail system</code></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2" style="cursor:default;">
    <i class="fas fa-star fa-sm text-white-50"></i> Website Shoes Shop Administrator</a>
</div>

<!-- Content Row 1-->
<div class="row">

    <!-- Total products -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-primary shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-2" style="font-size:0.8rem;">
                            Total products</div>
                            <a href="<?php echo $level."product.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                                <?php
                                    echo $sql__total_products;
                                ?>
                            </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Total bill -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-success shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-2" style="font-size:0.8rem;">
                        Total bill</div>
                        <a href="<?php echo $level."bill.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                            <?php
                                echo $sql__total_bill;
                            ?>
                        </a>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profit -->
    <div class="col-xl-3 col-md-6 mb-4"  style="padding:0 20px">
        <div class="card border-left-info shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-2" style="font-size:0.8rem;">
                        Profit
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800">34.56%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 35%" aria-valuenow="34.56" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback from customers -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-warning shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-2" style="font-size:0.7rem;">
                        Feedback from customers</div>
                        <a href="<?php echo $level."feedback.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                            <?php 
                                echo $sql__total_feedback; 
                            ?>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row 1-->

<!-- Content Row 2-->
<div class="row">

    <!-- Number of user accounts -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-primary shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-2" style="font-size:0.8rem;">
                            User accounts</div>
                            <a href="<?php echo $level."customer__account.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                                <?php
                                    echo $sql__total_customer;
                                ?>
                            </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Total number of suppliers -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-success shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-2" style="font-size:0.8rem;">
                        Provider</div>
                        <a href="<?php echo $level."provider.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                            <?php
                                echo $sql__total_provider;
                            ?>
                        </a>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                        <i class="fas fa-star fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total order amount -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-info shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-2" style="font-size:0.8rem;">
                        Total order amount</div>
                        <a href="<?php echo $level."bill.php"?>" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                            <?php
                                echo $sql__totalprice_bill; 
                            ?>
                            <i class="fas fa-dollar-sign text-gray-600"></i>
                        </a>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                        <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- XXXXX -->
    <div class="col-xl-3 col-md-6 mb-4" style="padding:0 20px">
        <div class="card border-left-warning shadow h-100 py-2 pl-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center ml-2">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-2" style="font-size:0.7rem;">
                            Feedback from customers</div>
                        <a href="#" class="h2 mb-0 font-weight-bold text-gray-800" style="text-decoration:none;">
                            <?php 
                                echo "X"; 
                            ?>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row 2-->


<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<!-- <div class="row"> -->

    <!-- Content Column -->
    <!-- <div class="col-lg-6 mb-4"> -->

        <!-- Project Card Example -->
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="width:100%">Projects</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Server Migration <span
                        class="float-right">20%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Sales Tracking <span
                        class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Customer Database <span
                        class="float-right">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Payout Details <span
                        class="float-right">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Account Setup <span
                        class="float-right">Complete!</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->