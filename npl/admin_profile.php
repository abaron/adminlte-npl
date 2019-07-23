`<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Settings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNip">NIP</label>
                  <input type="email" class="form-control" id="exampleInputNip" value="889189759039" disabled="disabled">
                </div>
                <div class="form-group">
                  <label for="inputFullname">Fullname</label>
                  <input type="email" class="form-control" id="inputFullname" value="Arhubel Binus" disabled="disabled">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="arhubel.binus@telkom.co.id" disabled="disabled">
                </div>
                <div class="form-group">
                  <label for="exampleInputPhone">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPhone" placeholder="Password" value="0813995731">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Supported extension: .jpg, .jpeg, .png</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Old password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPasswordNew" class="col-sm-4 control-label">New password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPasswordNew" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPasswordReNew" class="col-sm-4 control-label">Re-New password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPasswordReNew" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/admin.php');
$navbar = file_get_contents($componentsPath . 'navbars/admin.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/admin.php');
$content = ob_get_clean();

include('components/layout.php');