												<?php foreach($petugas as $e): ?>
												<form method="post" action="<?php echo base_url()?>petugas/update" enctype="multipart/form-data" class="form-horizontal row-border">
              											<div class="form-group">
              												<label class="col-sm-2 control-label">Kode Petugas</label>
              												<div class="col-sm-2">
              													<input type="text" name="idptg" value="<?php echo $e->idptg ?>" class="form-control" readonly>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Nama Petugas*</label>
              												<div class="col-sm-8">
              													<input type="text" name="nmptg" value="<?php echo $e->nmptg ?>" class="form-control" maxlength="60" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Email*</label>
              												<div class="col-sm-8">
              													<input type="text" name="email" value="<?php echo $e->email ?>" class="form-control" maxlength="60" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Username*</label>
              												<div class="col-sm-4">
              													<input type="text" name="username" value="<?php echo $e->username ?>" class="form-control" maxlength="20" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Password*</label>
              												<div class="col-sm-4">
              													<input type="password" name="password" value="" class="form-control" maxlength="20" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Level*</label>
														<div class="col-sm-4">
															<select class="form-control" name="level" required autofocus>
																<option value="" <?php if($e->level==''){echo "selected";} ?>>- Pilih Level -</option>
																<option value="1" <?php if($e->level=='1'){echo "selected";} ?>>Administrator</option>
																<option value="2" <?php if($e->level=='2'){echo "selected";} ?>>Karyawan</option>
																<option value="3" <?php if($e->level=='3'){echo "selected";} ?>>Pimpinan</option>
															</select>
														</div>
													</div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label"></label>
                                                                                                  <div class="col-sm-2">
                                                                                                         <img src="<?php echo base_url() ?>uploads/<?php echo $e->foto ?>" alt="" onerror="this.src='<?php echo base_url() ?>assets/img/user.jpg'" class="img-thumbnail img-responsive mb-xl">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Foto Identitas</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <input type="file" name="foto" class="form-control">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label alert-danger">*) Wajib di isi.</label>
                                                                                           </div>
              											<div class="panel-footer">
              												<div class="row">
              													<div class="col-sm-8 col-sm-offset-2">
              														<button type="submit" class="btn-primary btn">Simpan</button>
              														<button type="reset" class="btn-default btn">Batal</button>
              													</div>
              												</div>
              											</div>
              										</form>
												<?php endforeach; ?>
