<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Petugas</th>
      <th>Username</th>
      <th>Telp</th>
      <th>Level</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($data as $d):
      if ($d->level == '1') {$namalevel='Administrator';}             
      else if ($d->level == '2') {$namalevel='Master CS';}
      else if ($d->level == '3') {$namalevel='CS';}
      else if ($d->level == '4') {$namalevel='Master Produksi';}
      else if ($d->level == '5') {$namalevel='Produksi Umum';}
      else if ($d->level == '6') {$namalevel='Keuangan';}
      else if ($d->level == '7') {$namalevel='Desain';}
      else if ($d->level == '8') {$namalevel='Packing';}
      else if ($d->level == '9') {$namalevel='Lipat';}
      else if ($d->level == '10') {$namalevel='Administrator';}
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $d->nmpet ?></td>
      <td><?php echo $d->username ?></td>
      <td><?php echo $d->telp ?></td>
      <td><?php echo $namalevel ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
