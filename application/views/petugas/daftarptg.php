                              <table id="gantibahasa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>ID Petugas</th>
                                    <th>Nama Petugas</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
								
              								  <?php 
              								  $no=1;
              								  foreach ($petugas as $d):
              								  
              									if ($d->level == '1') {$level='Administrator';}							
              									else if ($d->level == '2') {$level='Karyawan';}
              									else if ($d->level == '3') {$level='Pimpinan';}
              								  
              								  ?>
								  
                                  <tr class="odd gradeX">
                                    <td><?php echo $no++ ?></td>
                                    <td align="center"><img class="avatar" src="<?php echo base_url() ?>uploads/<?php echo $d->foto ?>" alt="" onerror="this.src='<?php echo base_url() ?>assets/img/user.jpg'"/></td>
                                    <td><?php echo $d->idptg ?></td>
                                    <td><?php echo $d->nmptg ?></td>
                                    <td><?php echo $d->email ?></td>
                                    <td><?php echo $d->username ?></td>
                  									<td><?php echo $level ?></td>
                  									<td>
                  									<div class="btn-group">
                                        <?php echo anchor('petugas/daftar/','<button type="button" class="btn btn-success-alt"><i class="ti ti-zoom-in"></i></button>')?>
                                        <?php echo anchor('petugas/edit/'.dataload::tambahan_link().md5($d->idptg),'<button type="button" class="btn btn-primary-alt"><i class="ti ti-pencil-alt"></i></button>')?>
                                        <?php echo anchor('petugas/hapus/'.dataload::tambahan_link().md5($d->idptg),'<button type="button" class="btn btn-danger-alt"><i class="ti ti-trash"></i></button>',array('onclick' => "return confirm('Apakah Anda yakin akan menghapus data $d->nmptg ini?')"))?>
                                    </div>
									                  </td>
                                  </tr>
								                <?php endforeach; ?>
                                </tbody>
                              </table>
