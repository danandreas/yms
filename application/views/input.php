<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <?php $this->load->view('include/head'); ?>
    <?php $this->load->view('include/link_input_atas'); ?>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- sidebar menu -->
        <?php $this->load->view('include/sidebar_kiri'); ?>
        <!-- /sidebar menu -->
        <!-- top navigation -->
        <?php $this->load->view('include/sidebar_atas'); ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title ?><small></small></h2>
                    <ul class="nav navbar-right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" name="input" action="inputptgx.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Petugas<span class="required"></span>
                        </label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <input name="kdpet" value="" class="form-control" readonly="readonly"">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Petugas<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nmpet" name="nmpet" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp/HP
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" id="telp" name="telp" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Level/Bagian<span class="required"> *</span></label>
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <select name="level" class="select2_group form-control" required="required">
                            <option value="">Pilih Level/Bagian</option>
                            <option value="CS">CS (Customer Service)</option>
                            <option value="Master CS"> Master CS (Master Customer Service)</option>
                            <option value="Desainer"> Desainer</option>
                            <option value="Produksi">Produksi</option>
                            <option value="Master Produksi">Master Produksi</option>
                            <option value="Pimpinan">Pimpinan</option>
                            <option value="Administrator">Administrator</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" class="btn btn-dark" value="Simpan"></input>
                          <input type="reset" class="btn btn-danger" value=" &nbsp; Batal &nbsp; "></input>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- footer content -->
          <?php $this->load->view('include/footer'); ?>
          <!-- /footer content -->
        </div>
        <!-- /page content -->
      </div>
    </div>
    <?php $this->load->view('include/link_input_bawah'); ?>
  </body>
</html>
