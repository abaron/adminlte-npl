<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Capex
            <small>Complete</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-image"></i> Capex</a></li>
            <li class="active">Complete</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Complete Capex</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                    placeholder="Search">

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
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-4 col-sm-offset-6 control-label">Budget</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="" value="Rp120.000.000" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 col-sm-offset-6 control-label">Total Capex</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="" value="3" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                            <thead class="th-center">
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">No. NPL</th>
                                    <th rowspan="2">STO</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th colspan="2">ODP</th>
                                    <th colspan="3">DRM BoQ</th>
                                    <th rowspan="2">Select All<br /><input type="checkbox" id="checkbox-1-0" class="regular-checkbox" /><label for="checkbox-1-0"></label></th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>M</th>
                                    <th>J</th>
                                    <th>T</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td>PDE</td>
                                    <td>Jl. Sentral Jaya No. 36</td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" readonly></td>
                                    <td class="text-center"><input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>PDE</td>
                                    <td>Jl. Jatiwaringin No. 55</td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" readonly></td>
                                    <td class="text-center"><input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PKY / XI / 2018</td>
                                    <td>PKY</td>
                                    <td>Jl. Wibawa Mukti 2 No. 15</td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control" style="width:50px"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" readonly></td>
                                    <td class="text-center"><input type="checkbox" id="checkbox-1-3" class="regular-checkbox" /><label for="checkbox-1-3"></label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <input type="button" class="btn btn-primary pull-right" value="Submit">
                        <input type="button" class="btn btn-warning pull-right" value="Update" style="margin-right: 5px;" data-toggle="modal" data-target="#modal-id">
                        <input type="button" class="btn btn-default pull-right" value="Cancel" style="margin-right: 5px;">
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
<div id="modal-id" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Document</h4>
                <label class="label label-primary">Capex ABC</label>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Bukti Capex</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Euidence Capex</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Legal Order Process</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="file" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">BoQ Capex</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control">
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
$content = ob_get_clean();

include('components/layout.php');