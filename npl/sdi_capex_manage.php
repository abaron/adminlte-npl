<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Group Capex
            <small>Manage</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Group Capex</a></li>
            <li class="active">Manage</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Group Capex</h3>

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
                                    <th rowspan="2">Tgl. Capex</th>
                                    <th rowspan="2">Capex Group Name</th>
                                    <th rowspan="2">Budget</th>
                                    <th rowspan="2">Current Project Total</th>
                                    <th rowspan="2">LoP</th>
                                    <th rowspan="2">Deadline</th>
                                    <th colspan="5">Action</th>
                                </tr>
                                <tr>
                                    <th>View</th>
                                    <th>+/- Project</th>
                                    <th>Add Docs</th>
                                    <th>Complete</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>STTF</td>
                                    <td>Rp30.000.000</td>
                                    <td>Rp25.500.000</td>
                                    <td>4</td>
                                    <td>21 September 2019</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-gear"></i></a></td>
                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#capex-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check"></i></a></td>
                                    <td class="text-center"><a href="#" class="capex-delete"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>24 Juni 2019</td>
                                    <td>STTG</td>
                                    <td>Rp50.000.000</td>
                                    <td>Rp33.250.000</td>
                                    <td>4</td>
                                    <td>17 Agustus 2019</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-gear"></i></a></td>
                                    <td class="text-center"><a href="#"data-toggle="modal" data-target="#capex-upload"><i class="fa fa-upload"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-check"></i></a></td>
                                    <td class="text-center"><a href="#" class="capex-delete"><i class="fa fa-close"></i></a></td>
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
<div id="capex-upload" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Capex Documents</h4>
                <label class="label label-primary">STTF</label>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group semi-required">
                                    <label for="" class="col-sm-4 control-label">Document Capex</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="file" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="input-group" style="margin-top:5px">
                                            <input type="file" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-minus"></i></button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <p class="help-block" style="margin-top:15px">
                                            <sup class="pull-left">Supported extension: .pdf, .jpg, .xls, .xlsx</sup><sup class="pull-right">Max 10MB</sup>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group semi-required">
                                    <label for="" class="col-sm-4 control-label">File DRM</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control">
                                        <p class="help-block" style="margin-top:15px"><sup class="pull-left">Supported extension: .zip, .rar, .7z</sup><sup class="pull-right">Max 100MB</sup></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>

    </div>
</div>
<!-- ./Modal -->

<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/sdi.php');
$navbar = file_get_contents($componentsPath . 'navbars/sdi.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/sdi.php');
$content = ob_get_clean();
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');