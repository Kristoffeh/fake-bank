<?php
ob_start();
session_start();

include '../scripts/logincheck.php';
require '../require/dbconnect.php';
require '../scripts/functions.php';

$r=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$userRow=mysqli_fetch_array($r);

$id = $userRow['id'];



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
    <title>Payments - Brendy's Bank</title>
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
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="settings.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </li>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center mb-2">
                    <h5><a href="home.php" class="text-left">&larr; Go back</a></h5>
                </div>
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Your bank payments</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Start: Dropdown Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Payments Log</h6>
                            </div>
                            <div class="card-body">
                                <div class="paymententry">


                                    <div class="table-responsive table-borderless">
                                        <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>
                                                    <th class="text-left" style="width:20%;">Date</th>
                                                    <th class="text-left" style="width:20%;">Description</th>
                                                    <th class="text-left" style="width:20%;">In</th>
                                                    <th class="text-left" style="width:20%;">Out</th>
                                                    <th class="text-left" style="width:20%;">Recipient</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<!--                                                 <tr>
                                                    <td>19.05.2019</td>
                                                    <td>Freelance Payment</td>
                                                    <td>
                                                        <label class="btnprice green disable-selection">+$500.00</label>
                                                        <label class="btnprice reserved givemargin disable-selection" style="font-size: 13px;">RESERVED<br></label>
                                                        <label class="btnprice yellow givemargin disable-selection">PENDING</label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>21.07.2018</td>
                                                    <td class="text-left">IRS Scammer</td>
                                                    <td class="text-left"></td>
                                                    <td class="text-left"><label class="btnprice red disable-selection" style="font-size: 13px;">$12,000.00</label><label class="btnprice reserved givemargin disable-selection" style="font-size: 13px;">RESERVED<br></label>
                                                        <label
                                                            class="btnprice yellow givemargin disable-selection">PENDING</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21.07.2019</td>
                                                    <td class="text-left">Monthly Salary</td>
                                                    <td class="text-left"><label class="btnprice green disable-selection">+$2,506.75</label></td>
                                                    <td class="text-right"></td>
                                                </tr>
                                                <tr>
                                                    <td>21.27.2018</td>
                                                    <td class="text-left">Amazon Prime</td>
                                                    <td class="text-left"></td>
                                                    <td class="text-left"><label class="btnprice red disable-selection">-$12.00</label></td>
                                                </tr> -->

                                                <?php
                                                $id = $userRow['id'];

                                                $result = mysqli_query($conn, "SELECT * FROM transactions WHERE belongstoid = '$id' OR recipientid='" . $id . "' ORDER BY id DESC LIMIT 5");

                                                // Format the account number to not show the entire account number. 7 numbers are hidden while the last 4 numbers are visible.
                                                function format_accountnumber ($n){
                                                    $y = "*******";
                                                    $x = substr($n, -4);
                                                    return $y . $x;
                                                }

                                                if (mysqli_num_rows($result) == 0){
                                                    echo "<center>You don't have any registered accounts</center>";
                                                }

                                                while($row = mysqli_fetch_array($result)) {
                                                    echo "<tr>";
                                                    echo "<td class='text-left'><a>" . $row['date'] . "</a></td>";
                                                    echo "<td class='text-left'><a>" . $row['message'] . "</a></td>";

                                                    if ($row['belongstoid'] == $id){
                                                        if ($row['type'] == "send"){
                                                            echo "<td class='text-left'></td>";
                                                            echo "<td class='text-left'><label class='btnprice red disable-selection'>$" . number_format($row['amount'], 2) . "</label></td>";
                                                        }

                                                        if ($row['type'] == "transfer"){
                                                            echo "<td class='text-left'></td>";
                                                            echo "<td class='text-left'><label class='btnprice red disable-selection'>$" . number_format($row['amount'], 2) . "</label></td>";
                                                        }
                                                    }

                                                    if ($row['recipientid'] == $id){
                                                        echo "<td class='text-left'><label class='btnprice green disable-selection'>$" . number_format($row['amount'], 2) . "</label></td>";
                                                        echo "<td class='text-left'></td>";
                                                    }

                                                    if ($row['belongstoid'] == $id){
                                                        echo "<td class='text-left'>" . $row['toaccount'] . "</td>";
                                                    }

                                                    echo "</tr>";
                                                }


                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: Dropdown Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="/assets/js/bs-charts.js"></script>
    <script src="/assets/js/customs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>