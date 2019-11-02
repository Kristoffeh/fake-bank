<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account Login - Brendy's</title>
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
        <div class="d-flex flex-column" id="content-wrapper">
            <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-border" style="color: rgb(255,255,255);padding-top: 0px;padding-bottom: 0px;">
                <div class="container"><a class="navbar-brand mynav" href="/index.php" style="padding: 20px;font-family: ABeeZee, sans-serif;font-size: 24px;"><strong>Brendy's</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="btn btn-primary brendybtn" role="button" style="margin-left: 15px;" href="createaccount.php"><i class="icon-lock"></i>&nbsp;Open account</a></li>
                            <li class="nav-item" role="presentation"><a class="btn btn-primary brendybtn" role="button" style="margin-left: 15px;" href="login.php"><i class="icon-lock"></i>&nbsp;Log in</a></li>
                        </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-lg-12 col-xl-12 offset-lg-0 offset-xl-0" style="margin-top: 15px;">
                <div class="row">
                    <div class="col-lg-4 col-xl-6 offset-xl-1">

                        <!--- SUCCESS AND UNSUCCESSFUL ALERTS --->
                        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                        <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>

                        <h1 style="color: rgb(0,0,0);margin-top: 15px;">Account login</h1>
                        <form id="login_form" name="form1" method="post">
                            <div class="form-group">
                                <label style="font-family: Roboto, sans-serif;color: #212121;font-size: 15px;margin-bottom: 5px;">
                                <strong>E-mail Address</strong></label>
                                <small class="form-text text-muted" style="margin-top: 0px;">This is your personal e-mail address</small>
                                <input class="form-control register-textbox" type="text" style="transition: all 0.7s;" placeholder="Enter e-mail address" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label style="font-family: Roboto, sans-serif;color: #212121;font-size: 15px;margin-bottom: 5px;">
                                    <strong>SSN</strong> (social security number)<br></label>
                                    <small class="form-text text-muted" style="margin-top: 0px;">This is your social security number, do not share this with <span style="text-decoration: underline;">anyone</span>
                                    </small>
                                <input class="form-control register-textbox" type="text" style="transition: all 0.7s;" placeholder="Enter SSN" name="ssn" id="ssn">
                            </div>
                            <div class="form-group">
                                <label style="font-family: Roboto, sans-serif;color: #212121;font-size: 15px;margin-bottom: 5px;">
                                    <strong>Password</strong><br></label>
                                    <small class="form-text text-muted" style="margin-top: 0px;">This is your personal password</small>
                                <input class="form-control register-textbox" type="password" style="transition: all 0.7s;" placeholder="Enter password" name="password" id="password">
                            </div>
                        </form>
                        <div class="form-group">
                            <button class="btn btn-primary brendybtn-lightgreen" type="submit" style="margin-right: 15px;" name="btnlogin" id="btnlogin">Log in</button>
                            <label>Don't have an account?&nbsp;<a class="link-juicy" href="/createaccount.php">Create an account</a></label>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <img class="rounded" src="/assets/img/velg_din_type_innlogging_jente_vind_i_haret_mobil_i_handen.jpg" width="400">
                        <h3 style="color: rgb(68,68,68);margin-top: 15px;">Having trouble?</h3>
                        <p style="font-size: 16px;color: #414141;">Are you having problems? You can reach out to our support team over on twitter. They are one of the best technical support teams in the world. They are called Microsoft. Thank you for your understanding.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start: my footer -->
    <div class="myfooter">
        <p style="margin-bottom: 0px;">Copyright © Brendy's Bank 2019<br></p>
    </div>
    <!-- End: my footer -->
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