<?php 
require 'auth.php';
$user_type=$_SESSION['user_type'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="SHORTCUT ICON" href="assets/images/logo.png">
  <title>1 Board | Dashboard</title>
  <?php include 'stylesheets.php'; ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
  <!-- Header -->
  <?php include 'navigations.php'; ?>
  <!-- End Header -->
  <!-- Sidebar menu -->
  <?php include 'sidebar.php'; ?>
  <!-- End of Sidebar menu -->
  <div class="content-wrapper">
    <!-- output section -->
    <?php
    if($user_type==0){
      if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch ($action) {
          case 'profile':
            include 'views/seller/profile.php';
            break;
          case 'my_songs':
            include 'views/seller/songs.php';
            break;
          case 'terms':
            include 'views/seller/terms.php';
            break;
          default:
            include 'views/seller/songs.php';
            break;
        }
      }else{
        include 'views/seller/songs.php';
      }
    }elseif($user_type==1){
      if(isset($_GET['action'])){

      }else{
        include 'views/admin/dashboard.php';
      }
    }
    ?>
    <!-- end output section -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Web Footer -->
  <?php include 'web_footer.php'; ?>
  <!-- End of Web Footer -->

  <!-- Control Sidebar -->
  <!-- Activity section -->
  <!-- End Activity section -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include 'scripts.php'; ?>
</body>
</html>
