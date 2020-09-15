<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/images/icon.jpg"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link href="<?= base_url()?>assets/admin/vendor/fonts/circular-std/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/libs/css/style.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Admin Diskominfo</title>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
  <div class="splash-container">
      <div class="card ">
          <div class="card-header text-center"><a href="#"><img class="logo-img" src="<?= base_url()?>assets/admin/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
          <div class="card-body">
              <form role="form" action="<?= site_url('admin/login/login_action');?>" method="post">
                  <div class="form-group">
                      <input class="form-control form-control-lg" name="email" id="username" type="email" placeholder="Username" autocomplete="off">
                  </div>
                  <div class="form-group">
                      <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
              </form>
          </div>
          <div class="card-footer bg-white p-0  ">
          </div>
      </div>
  </div>
<script src="<?= base_url()?>assets/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>