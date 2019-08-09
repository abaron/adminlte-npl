<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Report
            <small>Track Order</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Report</a></li>
            <li class="active">Track Order</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List NPL</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary pull-right" style="margin-left: 10px;"><i class="fa fa-download"></i> Export</button>
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

                        <div class="col-md-6" style="margin-bottom: 25px;">
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option>-- Pilih ---</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pencarian ...">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat">Track!</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                            <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">No. NPL</th>
                                    <th rowspan="2">STO</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th rowspan="2">Status</th>
                                    <th colspan="1">Action</th>
                                </tr>
                                <tr>
                                    <th>View</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </th>
                                    <th><input type="text" class="form-control"></th>
                                    <th>
                                        <select class="form-control">
                                            <option disabled selected>-- Pilih STO --</option>
                                            <option value="">Pondok Gede</option>
                                            <option value="">Perwira</option>
                                        </select>
                                    </th>
                                    <th><input type="text" class="form-control"></th>
                                    <th>
                                        <select class="form-control">
                                            <option disabled selected>-- Pilih Status --</option>
                                            <option value="">Approved</option>
                                            <option value="">Hold</option>
                                        </select>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 36</td>
                                    <td><span class="label label-primary">Published</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 2</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>19 Maret 2019</td>
                                    <td>23 / HPI / III / 2019</td>
                                    <td>Harapan Indah</td>
                                    <td>Jl. Bulevard Raya No. 132</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / PWR / II / 2019</td>
                                    <td>Perwira</td>
                                    <td>Jl. Binangun 5 No. 7</td>
                                    <td><span class="label label-warning">Hold</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>22 Desember 2018</td>
                                    <td>64 / KLA / XII / 2018</td>
                                    <td>Kali Abang</td>
                                    <td>Jl. Lingkar Utara No. 85</td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PDE / XI / 2018</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Rawa Gajah 2 No. 1</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
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

$header = file_get_contents($componentsPath . 'headers/admin.php');
$navbar = file_get_contents($componentsPath . 'navbars/admin.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/admin.php');
$content = ob_get_clean();
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');