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
                                            class="fa fa-download"></i> Export as csv</button>
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
                                    <th colspan="2">Kabel</th>
                                    <th colspan="3">BDQ</th>
                                    <th rowspan="2">Status Capex</th>
                                    <th rowspan="2">Status Project</th>
                                    <th colspan="4">Action</th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>12</th>
                                    <th>24</th>
                                    <th>M</th>
                                    <th>J</th>
                                    <th>T</th>
                                    <th>View</th>
                                    <th>Update<br />Status</th>
                                    <th>Upload<br />Docs</th>
                                    <th>Finalize</th>
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
                                    <td>856</td>
                                    <td>0</td>
                                    <td>Rp33.510.400</td>
                                    <td>Rp13.056.000</td>
                                    <td>Rp46.566.400</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Preparing</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#finalize-modal"><i class="fa fa-check"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>PDE</td>
                                    <td>Jl. Jatiwaringin No. 55</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>163</td>
                                    <td>970</td>
                                    <td>Rp67.020.800</td>
                                    <td>Rp26.112.000</td>
                                    <td>Rp93.132.800</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Permit Processing</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#finalize-modal"><i class="fa fa-check"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>19 Maret 2019</td>
                                    <td>23 / KLB / III / 2019</td>
                                    <td>KLB</td>
                                    <td>Jl. Boulevard Raya No. 132</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>161</td>
                                    <td>2304</td>
                                    <td>Rp100.531.200</td>
                                    <td>Rp39.168.000</td>
                                    <td>Rp139.699.200</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-primary">Finishing</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#finalize-modal"><i class="fa fa-check"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / KLB / II / 2019</td>
                                    <td>KLB</td>
                                    <td>Jl. Binangun 5 No. 7</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>770</td>
                                    <td>0</td>
                                    <td>Rp50.265.600</td>
                                    <td>Rp19.584.000</td>
                                    <td>Rp69.849.600</td>
                                    <td><span class="label label-warning">In Progress</span></td>
                                    <td><span class="label label-primary">Testcom</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i
                                                class="fa fa-edit"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#finalize-modal"><i class="fa fa-check"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>22 Desember 2018</td>
                                    <td>64 / KRA / XII / 2018</td>
                                    <td>KRA</td>
                                    <td>Jl. Perjuangan No. 85</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>900</td>
                                    <td>0</td>
                                    <td>Rp41.888.000</td>
                                    <td>Rp16.320.000</td>
                                    <td>Rp58.208.000</td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PKY / XI / 2018</td>
                                    <td>PKY</td>
                                    <td>Jl. Wibawa Mukti 2 No. 15</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>1018</td>
                                    <td>Rp83.776.000</td>
                                    <td>Rp32.640.000</td>
                                    <td>Rp116.416.000</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td><span class="label label-success">Completed</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#" class="update-status"><i class="fa fa-edit text-gray"></i></a></td>
                                    <td class="text-center"><a href="#" class="project-upload"><i class="fa fa-upload text-gray"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check text-gray"></i></a></td>
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

<!-- Modal -->
<div id="finalize-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Finalize Project</h4>
                <label class="label label-primary">33 / PDE / VII / 2019</label>
            </div>
            <div class="modal-body">
                <!-- column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aktual Kabel 12
                                        Core</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aktual Kabel 24
                                        Core</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aktual ODP 8</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aktual ODP 16</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aktual Tiang</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Aksesoris</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Material</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Jasa</label>
                                    <div class="col-sm-8">
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
                                <div class="form-group required">
                                    <label for="" class="col-sm-4 control-label">Total</label>
                                    <div class="col-sm-8">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary pull-right">Finalize Project</button>
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