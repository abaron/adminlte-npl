<?php ob_start(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Capex
            <small>Create Group</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-image"></i> Capex</a></li>
            <li class="active">Create Group</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Group</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group required">
                                        <label class="control-label" for="inputWork">Name</label>
                                        <input type="email" class="form-control" id="inputWork" value="" placeholder="">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="exampleInputDes">Description</label>
                                        <input type="email" class="form-control" id="exampleInputDes" value=""
                                            placeholder="">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="inputNumb">Number</label>
                                        <input type="email" class="form-control" id="inputNumb" value="" placeholder="">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="inputBase">Capex Type</label>
                                        <select class="form-control">
                                            <option selected disabled>-- Choose ---</option>
                                            <option>FTTH</option>
                                            <option>HEM</option>
                                            <option>OLO</option>
                                            <option>QE</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="inputDate">Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="inputDate" value=""
                                                placeholder="">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group required">
                                        <label class="control-label" for="inputPartner">Partner</label>
                                        <input type="text" class="form-control" id="inputPartner" value=""
                                            placeholder="">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="inputBudget">Budget</label>
                                        <input type="text" class="form-control" id="inputBudget" value=""
                                            placeholder="">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="inputPeriod">Period</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input style="width:50%" class="form-control " placeholder="" type="text" />
                                            <input style="width:50%" class="form-control " placeholder="" type="text" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBudget">Explanation</label>
                                        <textarea class="form-control" rows="5" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

$componentsPath = dirname(__FILE__) . '/components/';

$header = file_get_contents($componentsPath . 'headers/sdi.php');
$navbar = file_get_contents($componentsPath . 'navbars/sdi.php');
$footer = file_get_contents($componentsPath . 'footer.php');
$content = ob_get_clean();

include('components/layout.php');