<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Project
            <small>Manage</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Project</a></li>
            <li class="active">Manage Project</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Project</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                    placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;"><i
                                            class="fa fa-download"></i> Export</button>
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
                                    <th rowspan="2">-</th>
                                    <th rowspan="2">STO</th>
                                    <th colspan="2">ODP</th>
                                    <th colspan="2">Kabel</th>
                                    <th rowspan="2">TR</th>
                                    <th colspan="3">BDQ</th>
                                    <th rowspan="2">Status Capex</th>
                                    <th rowspan="2">Status Project</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>12</th>
                                    <th>24</th>
                                    <th>M</th>
                                    <th>G</th>
                                    <th>T</th>
                                    <th>View</th>
                                    <th>Update<br />Status</th>
                                    <th>Upload<br />Docs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td></td>
                                    <td>Pondok Gede</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>19</td>
                                    <td>8</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Step 1</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-id"><i
                                                class="fa fa-upload"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td></td>
                                    <td>Pondok Gede</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>27</td>
                                    <td>7</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Step 2</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-upload"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>19 Maret 2019</td>
                                    <td>23 / HPI / III / 2019</td>
                                    <td></td>
                                    <td>Harapan Indah</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>15</td>
                                    <td>15</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Step 5</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-upload"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / PWR / II / 2019</td>
                                    <td></td>
                                    <td>Perwira</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>8</td>
                                    <td>11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-warning">Hold</span></td>
                                    <td><span class="label label-primary">Step 6</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-upload"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>22 Desember 2018</td>
                                    <td>64 / KLA / XII / 2018</td>
                                    <td></td>
                                    <td>Kali Abang</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>37</td>
                                    <td>31</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-upload text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PDE / XI / 2018</td>
                                    <td></td>
                                    <td>Pondok Gede</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>23</td>
                                    <td>36</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Finished</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i class="fa fa-edit text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-upload text-gray"></i></a></td>
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

    <!-- start design -->
    <section class="content">
        <div class="row">
            <!-- column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <!-- Title --></label></h3>
                        <h3 class="box-title pull-right"><label class="label label-primary">
                                <!-- Title --></label></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Material</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="93">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="90">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="-5">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Jasa</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="109">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="108">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="-1">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Total</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="244">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="190">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="-27">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Aktual Kabel 12
                                    Core</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="89">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="99">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="90">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Aktual Kabel 24
                                    Core</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="54">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="54">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="100">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Aktual ODP 8</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="103">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="120">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="87">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Aktual ODP 16</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="90">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="100">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="90">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Aktual Tiang</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="88">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="100">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="88">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-sm-offset-2 control-label">Provisioning Type</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="23">
                                        <span class="input-group-addon">/</span>
                                        <input type="text" class="form-control" disabled value="30">
                                        <span class="input-group-addon">=</span>
                                        <input type="text" class="form-control" disabled value="78">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <!-- <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div> -->
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.end design -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div id="modal-id" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Document</h4>
                <label class="label label-primary">33 / PDE / VII / 2019</label>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Provisioning Type</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Material</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Jasa</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Total</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Kabel 12</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Kabel 24</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">ODP 8</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">ODP 16</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">BoQ</label>
                            <div class="col-sm-8">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .xls, .xlsx, .csv</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Gambar</label>
                            <div class="col-sm-6">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png, .zip, .kmz, .kml .dwg,
                                    .dxf</p>
                            </div>
                            <div class="col-sm-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-success"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <input type="file" class="" id="">
                                <p class="help-block">Supported Extensions: .jpeg, .jpg, .png, .zip, .kmz, .kml .dwg,
                                    .dxf</p>
                            </div>
                            <div class="col-sm-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-success"><i
                                            class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-xs btn-danger"><i
                                            class="fa fa-minus"></i></button>
                                </div>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- ./Modal -->

<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/pd.php');
$navbar = file_get_contents($componentsPath . 'navbars/pd.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/pd.php');
$content = ob_get_clean();
$jsFile = __DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js';
$script = file_exists($jsFile) ? file_get_contents($jsFile) : null;

include('components/layout.php');