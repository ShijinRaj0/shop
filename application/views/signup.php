<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MarketGO Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url();?>admin_assets/apple-icon.png">
    <link rel="shortcut icon" href="<?= base_url();?>admin_assets/favicon.ico">


    <link rel="stylesheet" href="<?= base_url();?>admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>admin_assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>admin_assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url();?>admin_assets/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?= base_url();?>admin_assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?= base_url();?>admin_assets/images/logo-mg.png" alt="MarketGO Admin">
                    </a>
                </div>
                <div class="login-form"  style="background-color: #343a40;">
                    <form id="SignupForm" method="POST" action="<?=base_url()?>settings/register" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="admin_name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <label>Login ID</label>
                            <input type="text" name="admin_uid" class="form-control" placeholder="Login ID" required>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="admin_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="admin_email" class="form-control" placeholder="Email ID" required>
                        </div>
                         <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="admin_phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="admin_password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Retype Password" required>
                        </div>

                                <button type="submit" class="btn btn-success btn-flat" style="margin-top: 30px;margin-bottom: 30px; ">Sign in</button>
                               <!--  <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link text-center"  style="margin-top: 15px;">
                                        <p>Already have account ? <a href="<?=base_url();?>settings/login"> Log in</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url();?>admin_assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url();?>admin_assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url();?>admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>admin_assets/assets/js/main.js"></script>


</body>

</html>
