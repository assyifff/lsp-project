<?php foreach ($dataPegawai as $pegawai) { ?>
  <tr>
  <!-- <td><?php echo $pegawai->thumbnail; ?></td> -->
    <td><?php echo $pegawai->penulis; ?></td>
    <td><?php echo $pegawai->judul; ?></td>
    <td style="min-width:230px;"><?php echo $pegawai->isi; ?></td>
    <td><?php echo $pegawai->posisi; ?></td>
    <td><?php echo $pegawai->status_publish; ?></td>
    <td class="text-center" style="min-width:200px;">
      <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
      <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
    </td>
  </tr>
<?php } ?>
