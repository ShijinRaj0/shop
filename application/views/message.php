<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MarketGO Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?=base_url();?>admin_assets/apple-icon.png">
    <link rel="shortcut icon" href="<?=base_url();?>admin_assets/favicon.ico">

    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

<?php include('slices/navbar.php');?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       <?php include('slices/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Send Message</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Communication</a></li>
                            <li class="active">Send Message</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


<div class="card" id="msgbox">
    <div class="card-header">
        <strong>Send</strong> Message
    </div>
    <form action="<?=base_url();?>settings/send_message" method="post">
    <div class="card-body card-block">
        
            <div class="form-group">
                <label for="rid" class=" form-control-label"> Recipient ID</label>
                <input type="text" id="rid" name="rid" placeholder="Enter Recipient ID" class="form-control" required value="<?php if(isset($reply)) echo $reply;?>">
            </div>
            <div class="form-group">
                <label for="msg" class=" form-control-label">Message</label>
                <textarea id="msg" name="msg" placeholder="Enter Message" class="form-control"></textarea>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Send
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
        <i class="fa fa-ban"></i> Reset
        </button>
     </div>
 </form>
</div>
</div>

    <?php include('slices/footer.php');?>
</body>
<style type="text/css">
    #msgbox{
        margin:1.5rem;
    }
</style>
</html>
