<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <?php $this->load->view('include/head'); ?>
    <?php $this->load->view('include/link_daftar_atas'); ?>
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
                   <?php $this->load->view('isi/table/'.$isi); ?> 
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
    <?php $this->load->view('include/link_daftar_bawah'); ?>
  </body>
</html>
