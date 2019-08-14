<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Order
            <small>Survey & Design</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Order</a></li>
            <li class="active">Survey & Design</li>
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
                                    <th rowspan="2">STO</th>
                                    <th rowspan="2">Lokasi</th>
                                    <th colspan="2">ODP</th>
                                    <th rowspan="2">Port</th>
                                    <th rowspan="2">Status</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>16</th>
                                    <th>View</th>
                                    <th>Design</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>31 Juli 2019</td>
                                    <td>33 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 36</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>201</td>
                                    <td><span class="label label-primary">Published</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-blue"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20 Juli 2019</td>
                                    <td>31 / PDE / VII / 2019</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Sentral Jaya No. 2</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>198</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>19 Maret 2019</td>
                                    <td>23 / HPI / III / 2019</td>
                                    <td>Harapan Indah</td>
                                    <td>Jl. Bulevard Raya No. 132</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>321</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14 Februari 2019</td>
                                    <td>18 / PWR / II / 2019</td>
                                    <td>Perwira</td>
                                    <td>Jl. Binangun 5 No. 7</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>45</td>
                                    <td><span class="label label-warning">Hold</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>22 Desember 2018</td>
                                    <td>64 / KLA / XII / 2018</td>
                                    <td>Kali Abang</td>
                                    <td>Jl. Lingkar Utara No. 85</td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td></td>
                                    <td>87</td>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>17 November 2018</td>
                                    <td>59 / PDE / XI / 2018</td>
                                    <td>Pondok Gede</td>
                                    <td>Jl. Rawa Gajah 2 No. 1</td>
                                    <td></td>
                                    <td class="text-center"><i class="fa fa-check text-blue"></td>
                                    <td>19</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-edit text-gray"></i></a></td>
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
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Survey</label></h3>
                        <h3 class="box-title pull-right"><label class="label label-primary">33/PDE/VII/2019</label></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Material</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Material">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Jasa</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Jasa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Total</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Total">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Aktual Kabel 12 Core</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Aktual Kabel 12 Core">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Aktual Kabel 24 Core</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Aktual Kabel 24 Core">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Aktual ODP 8</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Aktual ODP 8">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Aktual ODP 16</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Aktual ODP 16">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Aktual Tiang</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control">
                                        <option disabled selected>-- Pilih --</option>
                                        <option>7 Meter</option>
                                        <option>9 Meter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Provisioning Type</label>
                                <div class="col-sm-8">
                                    <select name="" id="" class="form-control">
                                        <option disabled selected>-- Pilih --</option>
                                        <option>PT3</option>
                                        <option>PT2 Plus</option>
                                        <option>PT2</option>
                                    </select>
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
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload Design</label></h3>
                        <h3 class="box-title pull-right"><label class="label label-primary">33/PDE/VII/2019</label></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
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
                                    <p class="help-block">Supported Extensions: .jpeg, .jpg, .png, .zip, .kmz, .kml .dwg, .dxf</p>
                                </div>
                                <div class="col-sm-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="file" class="" id="">
                                    <p class="help-block">Supported Extensions: .jpeg, .jpg, .png, .zip, .kmz, .kml .dwg, .dxf</p>
                                </div>
                                <div class="col-sm-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></button>
                                        <button type="button" class="btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
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
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.end design -->
</div>
<!-- /.content-wrapper -->
<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/sdi.php');
$navbar = file_get_contents($componentsPath . 'navbars/sdi.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/sdi.php');
$content = ob_get_clean();

include('components/layout.php');