<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            NPL
            <small>Submission List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> NPL</a></li>
            <li class="active">Submission List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">NPL Submission List</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;"><i class="fa fa-download"></i> Export</button>
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
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">No. NPL</th>
                                    <th rowspan="2">STO</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th colspan="2">ODP</th>
                                    <th rowspan="2">Port</th>
                                    <th rowspan="2">Status</th>
                                    <th colspan="4">Action</th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>View</th>
                                    <th>Approve</th>
                                    <th>Hold</th>
                                    <th>Reject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 36</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td><span class="label label-primary">Waiting</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="npl-approve"><i class="fa fa-check text-green"></i></a></td>
                                    <td class="text-center"><a href="#" class="npl-hold"><i class="fa fa-pause text-yellow"></i></a></td>
                                    <td class="text-center"><a href="#" class="npl-reject"><i class="fa fa-eject text-red"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 2</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-pause text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eject text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>19 Maret 2019</td>
                                    <td>23 / HPI / III / 2019</td>
                                    <td>Harapan Indah</td>
                                    <td>Jl. Bulevard Raya No. 132</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-pause text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eject text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / PWR / II / 2019</td>
                                    <td>Perwira</td>
                                    <td>Jl. Binangun 5 No. 7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>6</td>
                                    <td><span class="label label-warning">Hold</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check text-green"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-pause text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eject text-red"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
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

$header = file_get_contents($componentsPath . 'headers/optima.php');
$navbar = file_get_contents($componentsPath . 'navbars/optima.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/optima.php');
$content = ob_get_clean();
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');