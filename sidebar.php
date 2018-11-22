<?php
require_once 'auth.php';
include_once 'class_loader.php';
$user_type=$_SESSION['user_type'];
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <?php 
      if($user_type==1){
        ?>
      <div class="pull-left image">
        <img src="assets/images/logo.png" class="img-circle" alt="User Image">
      </div>
        <?php
      }
      ?>
      <div class="pull-left info">
        <p><?php echo $_SESSION['names']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <?php 
      if($user_type==1){
        ?>
      <li class="active">
        <a href="dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="dashboard">
          <i class="fa fa-users"></i> <span>Manage Users</span>
        </a>
      </li>
        <?php
      }elseif($user_type==0){
        ?>
      <li class="active">
        <a href="dashboard">
          <i class="fa fa-music"></i> <span>My Songs</span>
        </a>
      </li>
      <li>
        <a href="dashboard?action=terms">
          <i class="fa fa-legal"></i> <span>Terms & Condition.</span>
        </a>
      </li>
      <li>
        <a href="dashboard?action=terms">
          <i class="fa fa-info"></i> <span>Help</span>
        </a>
      </li>
      <li>
        <a href="logout">
          <i class="fa fa-sign-out"></i> <span>Sign Out</span>
        </a>
      </li>
        <?php
      }
      ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
