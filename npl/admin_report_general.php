<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Report</a></li>
        <li class="active">General</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Report NPL Area Bekasi</h3>

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
                    <th rowspan="3">Witel</th>
                    <th rowspan="2" colspan="2">TA DC</th>
                    <th colspan="3">Approval Witel Telkom Optima</th>
                    <th rowspan="2" colspan="2">Cancel</th>
                    <th colspan="4">TA Area</th>
                    <th>Optima</th>
                    <th>TA DC</th>
                    <th colspan="2">Telkom Daman</th>
                    <th rowspan="2" colspan="2">Completed</th>
                    <th rowspan="3">Total</th>
                  </tr>
                  <tr>
                    <th colspan="3">Inbox</th>
                    <th colspan="4">Instalasi</th>
                    <th>Fin Approve</th>
                    <th>Abu</th>
                    <th colspan="2">R2C</th>
                  </tr>
                  <tr>
                    <th>Design LLD</th>
                    <th>Revisi</th>
                    <th>PT2</th>
                    <th>PT3</th>
                    <th>EXP</th>
                    <th>Normal</th>
                    <th>UN</th>
                    <th>PT2</th>
                    <th>PT3</th>
                    <th>EXP</th>
                    <th>Rev</th>
                    <th></th>
                    <th></th>
                    <th>Normal</th>
                    <th>NR2C</th>
                    <th>Normal</th>
                    <th>PT1</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Bekasi Utara</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>541</td>
                    <td>4307</td>
                    <td>0</td>
                    <td>76</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>750</td>
                    <td>259</td>
                    <td>1433</td>
                  </tr>
                  <tr>
                    <td>Bekasi Barat</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>667</td>
                    <td>5280</td>
                    <td>0</td>
                    <td>91</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>839</td>
                    <td>297</td>
                    <td>1789</td>
                  </tr>
                  <tr>
                    <td>Bekasi Selatan</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>541</td>
                    <td>4307</td>
                    <td>0</td>
                    <td>76</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>750</td>
                    <td>259</td>
                    <td>1433</td>
                  </tr>
                  <tr>
                    <td>Bekasi Timur</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>541</td>
                    <td>4307</td>
                    <td>0</td>
                    <td>76</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>750</td>
                    <td>259</td>
                    <td>1433</td>
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

include('components/layout.php');