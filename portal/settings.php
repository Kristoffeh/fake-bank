<?php
ob_start();
session_start();
require '../require/dbconnect.php';
include '../scripts/logincheck.php';

$r=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$userRow=mysqli_fetch_array($r);





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile Settings - Brendy's Bank</title>
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
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                                    <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $userRow['name']; ?></span><img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="settings.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </li>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow">

                                <form  id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
                                    <img class="rounded-circle border shadow mb-3 mt-4" src="/assets/img/1200x1200_sbanken_02_hf_a18_01.jpg" width="160" height="160">
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm brendybtn-lightgreen" type="file" style="margin-top: 15px;">Change Photo</button>
                                    </div>
                                    <p style="margin-bottom: 0px;">Maximum upload size</p>
                                    <p class="text-warning" style="margin-bottom: 0px;font-size: 25px;">
                                        <strong>10 MB</strong>
                                    </p>
                                    <button class="btn btn-primary btn-sm brendybtn-lightgreen" type="submit" style="margin-top: 15px; font-size:12px;">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form id="usersettings_form" name="form1" method="post">
                                            <div class="form-row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label for="name">
                                                            <strong>Full Name</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="Enter your full name" name="name" id="name" value="<?php echo $userRow['name']; ?>">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label for="registered">
                                                            <strong>Registration Date</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="Registration date" name="registered" id="registered" value="<?php echo $userRow['datecreated']; ?>" readonly="">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col">
                                                    <label for="email">
                                                        <strong>Email Address</strong>
                                                        </label>
                                                        <input class="form-control" type="email" placeholder="Enter e-mail" value="<?php echo $userRow['email']; ?>" name="email" readonly="">
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="ssn">
                                                            <strong>SSN</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="Enter ssn" value="<?php echo $userRow['ssn']; ?>" name="ssn" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label for="password">
                                                            <strong>Password</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="Enter your password" name="password" id="password">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm brendybtn-lightgreen" type="submit" name="btnusersave" id="btnusersave">Save Settings</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="address">
                                                    <strong>Address</strong>
                                                </label>
                                                <input class="form-control" type="text" placeholder="Enter your house address" name="address">
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="phone">
                                                            <strong>Phone Number</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="Enter your phone number" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="country">
                                                            <strong>Country</strong>
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="USA" name="country">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm brendybtn-lightgreen" type="submit">Save&nbsp;Settings</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="/assets/js/bs-charts.js"></script>
    <script src="/assets/js/customs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>