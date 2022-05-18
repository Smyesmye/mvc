<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo ASSET_URL;?>/assets/admin_theme/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo ASSET_URL;?>/assets/admin_theme/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo ASSET_URL;?>/assets/admin_theme/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo ASSET_URL;?>/assets/admin_theme/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  
                </div>
                <h4>Connecte toi!</h4>
                <form  action="<?php echo BASE_URL; ?>admin&action=processLogin" class="pt-3" method="post">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >Connecte toi</button>
                  </div>
                  <div class="mt-3">
                    <a href="<?php echo BASE_URL; ?>">Retourne au site</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo ASSET_URL;?>/assets/admin_theme/assets/vendo<?php echo ASSET_URL;?>/assets/admin_theme/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo ASSET_URL;?>/assets/admin_theme/asse<?php echo ASSET_URL;?>/assets/admin_theme/off-canvas.js"></script>
    <script src="<?php echo ASSET_URL;?>/assets/admin_theme/asse<?php echo ASSET_URL;?>/assets/admin_theme/hoverable-collapse.js"></script>
    <script src="<?php echo ASSET_URL;?>/assets/admin_theme/asse<?php echo ASSET_URL;?>/assets/admin_theme/misc.js"></script>
    <!-- endinject -->

    <?php if (isset($_SESSION['flash'])) { ?>
        <script type="text/javascript">
            alert("<?php echo $_SESSION['flash']; ?>");
        </script>
    <?php  unset($_SESSION['flash']); } ?>
  </body>
</html>