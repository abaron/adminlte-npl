<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-circle-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">My Survey</span>
            <span class="info-box-number">15</span>

            <div class="progress">
              <div class="progress-bar" style="width: 40%"></div>
            </div>
            <span class="progress-description">
              40% Increase in 30 Days
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-circle-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">My Design</span>
            <span class="info-box-number">12</span>

            <div class="progress">
              <div class="progress-bar" style="width: 31%"></div>
            </div>
            <span class="progress-description">
              31% Increase in 30 Days
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/sdi.php');
$navbar = file_get_contents($componentsPath . 'navbars/sdi.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/sdi.php');
$content = ob_get_clean();

include('components/layout.php');