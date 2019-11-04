<?php
ob_start();
session_start();

include '../scripts/logincheck.php';
require '../require/dbconnect.php';
require '../scripts/functions.php';

$r=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$userRow=mysqli_fetch_array($r);



/*
DEBUG
if (!$r){
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}*/

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brendy's Bank</title>
    <meta name="twitter:description" content="Welcome to Brendy's Bank. We offer one of the lowest interest rates. Open an account today for free. No extra charges.">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="Welcome to Brendy's Bank. We offer one of the lowest interest rates. Open an account today for free. No extra charges.">
    <meta property="og:image" content="/assets/img/1280x855_sbanken_03_hf_18_13.jpg">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Brendy's Bank">
    <link rel="icon" type="image/png" sizes="1000x1000" href="/assets/img/Headig.png">
    <link rel="icon" type="image/png" sizes="1000x1000" href="/assets/img/Headig.png">
    <link rel="icon" type="image/png" sizes="1000x1000" href="/assets/img/Headig.png">
    <link rel="icon" type="image/png" sizes="1000x1000" href="/assets/img/Headig.png">
    <link rel="icon" type="image/png" sizes="1000x1000" href="/assets/img/Headig.png">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="/assets/css/untitled.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="home.php">
                    <div class="sidebar-brand-icon"><img class="rounded-circle img-fluid" src="/assets/img/Headig.png" width="30"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-family: Nunito, sans-serif;">Brendy's</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$300.00 has been deposited into your account.</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.00 has been deposited into your account.</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Please change your personal password. We've noticed some suspicious activity.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </li>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $userRow['name']; ?></span><img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="settings.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="presentation" href="../scripts/logout.php">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </li>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Start: Dropdown Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Accounts</h6>
                                <div class="dropdown no-arrow">
                                    <button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">
                                        <i class="fas fa-ellipsis-v text-gray-400"></i>
                                    </button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu">
                                        <a class="dropdown-item" role="presentation" href="accounts.php">&nbsp;More details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding-bottom: 10px;">
                                <div class="form-row">
                                    <div class="col-12">
                                        <!--- ERROR AND SUCCESS FEEDBACK --->
                                        <div class="alert alert-success alert-dismissible" id="succ" style="display:none;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible" id="err" style="display:none;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        </div>
                                    </div>
                                    <!--- END FEEDBACK --->
                                </div>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-bordered table-hover table-sm" id="accTable">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Name</th>
                                                <th class="text-left">Account Number</th>
                                                <th class="text-left">Balance</th>
                                                <th class="text-left">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $tempname = "accounts";
                                        $id = $userRow['id'];

                                        $resultt = mysqli_query($conn, "SELECT * FROM $tempname WHERE belongstoid = '$id' ORDER BY accountcreation ASC");

                                        // Format the account number to not show the entire account number. 7 numbers are hidden while the last 4 numbers are visible.
                                        function format_accountnumber ($n){
                                            $y = "*******";
                                            $x = substr($n, -4);
                                            return $y . $x;
                                        }

                                        

                                        while($row = mysqli_fetch_array($resultt)) {
                                            echo "<tr>";



                                            echo "<td>" . $row['accountname'] . " <span style='color: #b7b9c9;'>(" . $row['accounttype'] . ")</label>" . "</td>";
                                            /*echo "<td class='text-center'><a>" . format_accountnumber($row['accountnumber']) . "<br></a></td>";*/
                                            echo "<td class='text-left'><a>" . $row['accountnumber'] . "</a></td>";
                                            echo "<td class='text-left'><a>$" . number_format($row['accountbalance'], 0) . "</a></td>";
                                            echo "<td class='text-left'><a href='transfer.php?t=1'>" . "Send Money" . "<br></a></td>";
                                            echo "<td class='text-left'><a href='transfer.php?t=2'>" . "Transfer" . "<br></a></td>";
                                            echo "</tr>";
                                        }

                                        if (mysqli_num_rows($resultt) == 0){
                                            echo "<center>You don't have any registered accounts</center>";
                                        }


                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-center">
                                    <a id="showhide-account" href="#">Open new account</a>
                                </p>
                                <div class="mx-auto showhide-content" id="showhide-content" style="margin-bottom: 15px; display:none;">

                                    <form id="createaccount_form" name="form1" method="post">

                                        <div class="form-group">
                                            <label style="font-family: Roboto, sans-serif;color: #212121;font-size: 15px;margin-bottom: 5px;">
                                                <strong>Account Name</strong>
                                            </label>
                                            <small class="form-text text-muted" style="margin-top: 0px;">Please select account type</small>
                                            <input class="form-control" type="text" placeholder="Enter account name" name="accountname" id="accountname">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-family: Roboto, sans-serif;color: #212121;font-size: 15px;margin-bottom: 5px;">
                                                <strong>Account Type</strong>
                                            </label>
                                            <small class="form-text text-muted" style="margin-top: 0px;">Please select account type</small>
                                            <select class="form-control" name="accounttype" id="accounttype">
                                                <option value="Visa Card" selected="">Visa Card</option>
                                                <option value="Mastercard">Mastercard</option>
                                                <option value="Savings account">Savings account</option>
                                                <option value="Checking account">Checking account</option>
                                                <option value="Interest free">Interest free</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary brendybtn-lightgreen" type="submit" name="btncreateacc" id="btncreateacc">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End: Dropdown Card -->
                    </div>
                    <div class="col">
                        <!-- Start: Dropdown Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Payments Log</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu"><a class="dropdown-item" role="presentation" href="paymentslog.php">&nbsp;More details</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="paymententry">

                                    <?php

                                        $i = $userRow['id'];
                                        $y=mysqli_query($conn, "SELECT * FROM accounts WHERE belongstoid='$i'");
                                        $tosrc=mysqli_fetch_array($y);

                                        // $rs = mysqli_query($conn, "SELECT * FROM transactions WHERE belongstoid = '$id' ORDER BY id DESC LIMIT 5");
                                        $rs = mysqli_query($conn, "SELECT * FROM transactions WHERE belongstoid = '$id' OR recipientid='" . $id . "' ORDER BY id DESC LIMIT 5");

                                        if (mysqli_num_rows($rs) == 0){
                                            echo "<center>There is nothing to find here..</center>";
                                        }

                                        



                                        while($row = mysqli_fetch_array($rs)) {

                                            // Method to show name of user instead of account number //
                                            $o=mysqli_query($conn, "SELECT * FROM accounts WHERE accountnumber='" . $row['fromaccount'] . "'");
                                            $selid=mysqli_fetch_array($o);

                                            // for recipient
                                            $q=mysqli_query($conn, "SELECT * FROM accounts WHERE accountnumber='" . $row['toaccount'] . "'");
                                            $selrecid=mysqli_fetch_array($q);


                                            $uid = $selid['belongstoid'];

                                            // for recipient
                                            $pid = $selrecid['belongstoid'];

                                            $o=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $uid . "'");
                                            $selid=mysqli_fetch_array($o);

                                            // for recipient
                                            $t=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $pid . "'");
                                            $selide=mysqli_fetch_array($t);

                                            $nm = $selid['name'];

                                            // for recipient
                                            $recnm = $selide['name'];
                                            // End of method //

                                            if ($row['type'] == "send"){
                                                if ($row['belongstoid'] == $i){
                                                    echo "<p class='loghover fixpadding' style='font-size: 14px;align-items: center;'>
                                                You sent &nbsp;<label class='btnprice red disable-selection'>$" . short_number($row['amount']) . "</label> " . " to <label class='btnprice dark disable-selection'>" . $recnm . "</label></p>";
                                                }

                                                if ($row['recipientid'] == $i){
                                                    echo "<p class='loghover fixpadding' style='font-size: 14px;align-items: center;'>
                                                You received &nbsp;<label class='btnprice green disable-selection'>$" . short_number($row['amount']) . "</label> from <label class='btnprice dark disable-selection'>" . $nm . "</label></p>";
                                                }
                                            }

                                            if ($row['type'] == "transfer"){
                                                if ($row['belongstoid'] == $i){
                                                    echo "<p class='loghover fixpadding' style='font-size: 14px;align-items: center;'>
                                                You transferred &nbsp;<label class='btnprice green disable-selection'>$" . short_number($row['amount']) . "</label> from <label class='btnprice dark disable-selection'>" . $row['fromaccount'] . "</label> to <label class='btnprice dark disable-selection'>" . $row['toaccount'] . "</label></p>";
                                                }
                                            }
                                        }


                                        ?>


                                    <!-- <p class="loghover fixpadding" style="margin-bottom: 5px;font-size: 14px;align-items: center;">IRS Scammer -&nbsp;
                                        <label class="btnprice red disable-selection" style="font-size: 13px;">-$5,000.00</label>
                                        <label class="btnprice reserved disable-selection givemargin" style="font-size: 13px;">RESERVED</label>
                                        <label class="btnprice yellow givemargin disable-selection">PENDING</label>
                                    </p>
                                    <p class="loghover fixpadding" style="margin-bottom: 5px;font-size: 14px;align-items: center;">Amazon Prime -&nbsp;
                                        <label class="btnprice red disable-selection">-$12.00</label>
                                    </p>
                                    <p class="loghover fixpadding" style="margin-bottom: 5px;font-size: 14px;">Monthly Salary -&nbsp;
                                        <label class="btnprice green disable-selection">+$2,506.75</label>
                                    </p> -->
                                </div>
                                <p class="text-center" style="margin-bottom: 0px;margin-top: 15px;"><a href="payments.php">More details</a></p>
                            </div>
                        </div>
                        <!-- End: Dropdown Card -->
                    </div>
                </div>
                <!-- Start: Chart -->
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;2216&quot;,&quot;2225&quot;,&quot;2230&quot;,&quot;2235&quot;,&quot;2240&quot;,&quot;2300&quot;,&quot;2340&quot;,&quot;2400&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true},&quot;title&quot;:{&quot;display&quot;:false,&quot;text&quot;:&quot;&quot;,&quot;position&quot;:&quot;top&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;5&quot;],&quot;zeroLineBorderDash&quot;:[&quot;5&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;beginAtZero&quot;:false,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;5&quot;],&quot;zeroLineBorderDash&quot;:[&quot;5&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;beginAtZero&quot;:false,&quot;padding&quot;:20}}]}}}"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Monthly Payments</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Food</h4>
                                <div class="progress mb-4 disable-selection">
                                    <?php 
                                    $food = rand(0,100);
                                    $electronics = rand(0,100);
                                    $transportation = rand(0,100);
                                    $rent = rand(0,100);
                                    $savings = rand(0,100);
                                    ?>
                                    <div class="progress-bar bg-danger" aria-valuenow="<?php echo $food; ?>" aria-valuemin="0" aria-valuemax="100" 
                                    style="width: <?php echo $food; ?>%;"><?php echo $food; ?>%</div>
                                </div>
                                <h4 class="small font-weight-bold">Electronics</h4>
                                <div class="progress mb-4 disable-selection">
                                    <div class="progress-bar bg-warning" aria-valuenow="<?php echo $electronics; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $electronics; ?>%;"><?php echo $electronics; ?>%</div>
                                </div>
                                <h4 class="small font-weight-bold">Public Transportation</h4>
                                <div class="progress mb-4 disable-selection">
                                    <div class="progress-bar bg-primary" aria-valuenow="<?php echo $transportation; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $transportation; ?>%;"><?php echo $transportation; ?>%</div>
                                </div>
                                <h4 class="small font-weight-bold">Rent</h4>
                                <div class="progress mb-4 disable-selection">
                                    <div class="progress-bar bg-info" aria-valuenow="<?php echo $rent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rent; ?>%;"><?php echo $rent; ?>%</div>
                                </div>
                                <h4 class="small font-weight-bold">Savings</h4>
                                <div class="progress mb-4 disable-selection">
                                    <div class="progress-bar bg-success" aria-valuenow="<?php echo $savings; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $savings; ?>%;"><?php echo $savings; ?>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Chart -->
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="/assets/js/bs-charts.js"></script>
    <script src="/assets/js/customs.js"></script>
    <script src="/assets/js/register.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>