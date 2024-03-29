<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Survey
            <small>Manage</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Survey</a></li>
            <li class="active">Manage</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Survey</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;"><i class="fa fa-download"></i> Export as csv</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                            <thead class="th-center">
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">No. NPL</th>
                                    <th rowspan="2">STO</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th colspan="2">ODP</th>
                                    <th rowspan="2">Port</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>View</th>
                                    <th>Upload</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td>PDE</td>
                                    <td>Jl. Sentral Jaya No. 36</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>32</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-delete" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash text-red"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>PDE</td>
                                    <td>Jl. Jatiwaringin No. 55</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>64</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-delete" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash text-red"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / KLB / II / 2019</td>
                                    <td>KLB</td>
                                    <td>Jl. Binangun 5 No. 7</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>48</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-delete" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash text-red"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>22 Desember 2018</td>
                                    <td>64 / KRA / XII / 2018</td>
                                    <td>KRA</td>
                                    <td>Jl. Perjuangan No. 85</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-delete" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash text-red"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PKY / XI / 2018</td>
                                    <td>PKY</td>
                                    <td>Jl. Wibawa Mukti 2 No. 15</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>80</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" class="survey-delete" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash text-red"></i></a></td>
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

$header = file_get_contents($componentsPath . 'headers/sdi.php');
$navbar = file_get_contents($componentsPath . 'navbars/sdi.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/sdi.php');
$content = ob_get_clean();
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');