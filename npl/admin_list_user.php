<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management</a></li>
        <li class="active">List User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List User</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <style type="text/css">
                .table th {
                  text-align: center;
                  vertical-align: middle !important;
                }
              </style>
              <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                <thead>
                  <tr>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">NIP</th>
                    <th rowspan="2">Fullname</th>
                    <th rowspan="2">Email</th>
                    <th rowspan="2">Phone</th>
                    <th rowspan="2">Role</th>
                    <th rowspan="2">Status</th>
                    <th colspan="2">Action</th>
                  </tr>
                  <tr>
                    <th>Edit</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2002939444040933</td>
                    <td>Arhubel Binus</td>
                    <td>arhubel@example.com</td>
                    <td>08990010101</td>
                    <td><span class="label label-success">Admin</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2002983939527928</td>
                    <td>Aryo Eko</td>
                    <td>aryo@example.com</td>
                    <td>081294574888</td>
                    <td><span class="label label-primary">SDI</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>2002893493845734</td>
                    <td>Rahmadhani Bella</td>
                    <td>bella@example.com</td>
                    <td>081394594999</td>
                    <td><span class="label label-primary">Optima</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2002823828388329</td>
                    <td>Hudas Fatkhan</td>
                    <td>hudas@example.com</td>
                    <td>081529929983</td>
                    <td><span class="label label-primary">Project Deployment</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2002238429898329</td>
                    <td>John Wick</td>
                    <td>john@example.com</td>
                    <td>081692939390</td>
                    <td><span class="label label-primary">User STO</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>2002398487593847</td>
                    <td>Arya Stark</td>
                    <td>arya@example.com</td>
                    <td>08172993223</td>
                    <td><span class="label label-primary">Project Deployment</span></td>
                    <td><span class="label label-danger">Disactive</span></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td class="text-center"><a href="#" class="user-remove"><i class="fa fa-remove text-red"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>
      </div>
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
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');