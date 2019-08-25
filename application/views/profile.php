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
                        <h1>My Profile </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">My Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="image" src="<?=base_url();?>uploads/admin/img/<?=$userdata['admin_image'];?>">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?= $userdata['admin_name'];?></h2>
                                            <p>Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                               

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope-o"></i> <?= $userdata['admin_email'];?> <span class="badge badge-primary pull-right"><button class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#smallmodal" style="padding: 0px!important;"></button></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" > <i class="fa fa-phone"></i> <?= $userdata['admin_phone'];?> <span class="badge badge-primary pull-right"><button class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#smallmodal" style="padding: 0px!important;"></button></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
                                    </li>
                                </ul>
                                 <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
                            <i class="fa fa-edit"></i> Update
                        </button>
                            </section>
                        </div>
                    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <form id="editProfile" name="editProfile">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Edit Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bd-none">
                                        <i class="fa fa-user"></i>  <input name="admin_name" type="text" class="inputbox" value="<?= $userdata['admin_name'];?>">
                                    </li>
                                    <li class="list-group-item bd-none">
                                        <i class="fa fa-envelope-o"></i>  <input name="admin_email" type="text" class="inputbox" value="<?= $userdata['admin_email'];?>">
                                    </li>
                                    <li class="list-group-item bd-none">
                                        <i class="fa fa-phone"> </i>  <input name="admin_phone" type="text" class="inputbox" value="<?= $userdata['admin_phone'];?>">
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="updateBtn" >Confirm</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="hiddenID" value="<?= $userdata['admin_id']?>"/>


</div>

    <?php include('slices/footer.php');?>
</body>
<style type="text/css">
    .inputbox{
        padding-left: 5px;
    border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);;
}
.bd-none{ border:none; }
</style>
<script src="<?=base_url();?>admin_assets/vendors/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#updateBtn').click(function(){
            var form = $('#editProfile')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);
            var id= $('#hiddenID').val();
            $.ajax({
                url : "<?= base_url()?>settings/update_profile/"+id,
                type: 'POST',
                data : formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data){
                    if(data)
                        window.location.reload();
               else alert("Error");
                },
                error : function(){
                    alert("Error");
                },
            });
        });
    });
</script>
</html>
