<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Capex
            <small>Add & Remove Project</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Capex</a></li>
            <li class="active">Add & Remove Project</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add & Remove Project</h3>

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
                    <div class="box-body table-responsive no-padding" style="margin-top:20px">
                        <div class="col-md-6">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Group Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="SFFT" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Partner</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                            <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                                <thead class="th-center">
                                    <tr>
                                        <th>Current</th>
                                        <th>Budget</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp25.500.000</td>
                                        <td>Rp30.000.000</td>
                                        <td>85%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-5">
                            <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                                <thead class="th-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>No. NPL</th>
                                        <th>Lokasi</th>
                                        <th>STO</th>
                                        <th>BoQ</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>41 / PDE / VIII / 2019</td>
                                        <td>Jl. Pondok Raya</td>
                                        <td>Pondok Gede</td>
                                        <td>15</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>40 / PDE / VIII / 2019</td>
                                        <td>Jl. Pondok Raya</td>
                                        <td>Pondok Gede</td>
                                        <td>19</td>
                                        <td><label class="label label-danger">Rejected</label></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>10 / PWR / VIII / 2019</td>
                                        <td>Jl. Perwira No. 17</td>
                                        <td>Perwira</td>
                                        <td>10</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>8 / PWR / VII / 2019</td>
                                        <td>Jl. Perwira No. 15</td>
                                        <td>Perwira</td>
                                        <td>9</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>7 / PWR / VI / 2019</td>
                                        <td>Jl. Perwira No. 12</td>
                                        <td>Perwira</td>
                                        <td>9</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2 text-center">
                            <button class="btn btn-default">&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;</button>
                            <br />
                            <br />
                            <button class="btn btn-default">&nbsp;<i class="fa fa-angle-double-left"></i>&nbsp;</button>
                        </div>
                        <div class="col-md-5">
                            <table class="table table-hover table-bordered table-striped table-responsive table-condensed">
                                <thead class="th-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>No. NPL</th>
                                        <th>Lokasi</th>
                                        <th>STO</th>
                                        <th>BoQ</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>33 / PDE / VII / 2019</td>
                                        <td>Jl. Pondok Raya No. 7</td>
                                        <td>Pondok Gede</td>
                                        <td>15</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>29 / PWR / X / 2019</td>
                                        <td>Jl. Lingkar Tengah No. 4</td>
                                        <td>Perwira</td>
                                        <td>11</td>
                                        <td><label class="label label-success">Approved</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
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
                <h4 class="modal-title">Upload Document Capex</h4>
                <label class="label label-primary">STTF</label>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
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
                                <div class="form-group">
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