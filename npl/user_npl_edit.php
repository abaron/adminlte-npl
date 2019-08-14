<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            NPL
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> NPL</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit NPL Form</h3>
                    </div>
                    <form action="#" class="form-horizontal">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered table-responsive table-condensed">
                            <tbody>
                                <tr>
                                    <td style="width:65%">
                                        <div class="form-group">
                                            <label for="kancatel-input" class="col-sm-2 control-label">Kancatel</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kancatel-input" placeholder="Nama Kancatel" value="PONDOK GEDE">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="STO-input" class="col-sm-2 control-label">STO</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="STO-input">
                                                    <option disabled>-- Pilih --</option>
                                                    <option selected>PDE</option>
                                                    <option>HRI</option>
                                                    <option>PWR</option>
                                                    <option>KLA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="nomor-input" class="col-sm-2 control-label">Nomor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor-input" value="33 / PDE / X / 2019" readonly>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="tanggal-input" class="col-sm-2 control-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tanggal-input" value="20 Juli 2019" readonly>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>HASIL PEMERIKSAAN</b></td>
                                    <td class="text-center"><b>LINGKUP PEKERJAAN</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea class="form-control" rows="3" placeholder="Pemeriksaan lapangan ..." style="margin: 0px 2px 0px 0px; height: 105px;"></textarea>
                                    </td>
                                    <td>
                                        <textarea class="form-control" rows="3" placeholder="Lingkup pekerjaan ..." style="margin: 0px 2px 0px 0px; height: 105px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center"><b>GAMBAR LOKASI</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="dropzone-npl">
                                            <div class="dz-message needsclick">
                                                <!-- Drop files here or click to upload.<br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected
                                                files are <strong>not</strong> actually uploaded.)</span> -->
                                                Unggah Berkas<br />
                                                Seret berkas ke sini atau klik untuk memilih berkas.<br />
                                                <span class="note needsclick">(Harap mengunggah setidaknya <strong>2</strong> gambar.)</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <img src="/npl/images/npl-create-map.png" style="width:100%"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col-sm-4 control-label">Latitude</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="-64.00237" readonly>
                                                        <span class="input-group-addon"><sup>o</sup></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="col-sm-4 control-label">Longitude</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="-0.628284" readonly>
                                                        <span class="input-group-addon"><sup>o</sup></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>USULAN</b></td>
                                    <td class="text-center"><b>KEBUTUHAN MATERIAL</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>PENARIKAN KABEL FO:</span>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Kabel Fiber Optik</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="" placeholder="Kabel Fiber Optik">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Pembangunan PT<br /><sup>(Provisioning Type)</sup></label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="">
                                                    <option disabled selected>-- Pilih --</option>
                                                    <option>PT3</option>
                                                    <option>PT2 Plus</option>
                                                    <option>PT2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Feeder</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Feeder">
                                                    <span class="input-group-addon">Meter</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Spliter 1/4</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Spliter 1/4">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Spliter 1/8</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Spliter 1/8">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">ODP</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="ODP">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Crosure</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Crosure">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Tiang</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Tiang">
                                                    <span class="input-group-addon">Batang</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <p class="text-center">MITRA</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">PT.</span>
                                                        <input type="text" class="form-control" placeholder="Nama Perusahaan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-top: 150px"></div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" placeholder="Nama SM">
                                                </div>
                                                <div class="col-sm-8" style="margin-top: 5px;">
                                                    <p class="text-center">John Wick</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <p class="text-center">DISETUJUI</p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">KANCATEL</span>
                                                        <input type="text" class="form-control" placeholder="Nama Kancatel">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-top: 150px"></div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Nama yang menyetujui">
                                                </div>
                                                <div class="col-sm-12" style="margin-top: 5px;">
                                                    <input type="text" class="form-control" placeholder="NIK yang menyetujui">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="#" class="btn btn-default">Cancel</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-info pull-right">Publish</button>
                        <button type="submit" class="btn btn-warning pull-right" style="margin-right: 5px;">Save to Draft</button>
                    </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/user.php');
$navbar = file_get_contents($componentsPath . 'navbars/user.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$sidebar = file_get_contents($componentsPath . 'sidebars/user.php');
$content = ob_get_clean();
$script = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'js/' . basename(substr(__FILE__, 0, strrpos(__FILE__, '.'))) . '.js');

include('components/layout.php');