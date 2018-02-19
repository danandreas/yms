												<form method="post" action="<?php echo base_url()?>petugas/create" enctype="multipart/form-data" class="form-horizontal row-border">
              											<div class="form-group">
              												<label class="col-sm-2 control-label">Kode Petugas</label>
              												<div class="col-sm-2">
              													<input type="text" name="idptg" value="<?php echo $idbaru; ?>" class="form-control" readonly>
              												</div>
              											</div>
												       <div class="form-group">
              												<label class="col-sm-2 control-label">Nama Petugas*</label>
              												<div class="col-sm-8">
              													<input type="text" name="nmptg" value="" class="form-control" maxlength="60" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Email*</label>
              												<div class="col-sm-8">
              													<input type="text" name="email" value="" class="form-control" maxlength="60" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Username*</label>
              												<div class="col-sm-4">
              													<input type="text" name="username" value="" class="form-control" maxlength="20" required autofocus>
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
																<option value="">- Pilih Level -</option>
																<option value="1">Administrator</option>
																<option value="2">Karyawan</option>
																<option value="3">Pimpinan</option>
															</select>
														</div>
													</div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Foto Identitas</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <input type="file" name="foto" value="" class="form-control">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label alert-danger">*) Wajib di isi.</label>
                                                                                           </div>
              											<div class="panel-footer">
              												<div class="row">
              													<div class="col-sm-8 col-sm-offset-2">
              														<button type="submit" class="btn-primary btn">Simpan</button>
              														<button type="reset" class="btn-danger btn">Batal</button>
              													</div>
              												</div>
              											</div>
              										</form>
