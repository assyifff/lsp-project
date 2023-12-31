<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <!-- <th>Thumbnail</th> -->
          <th>Nama Penulis</th>
          <th>Judul Artikel</th>
          <th>Isi Artikel</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Thumbnail</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-pegawai">
        
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pegawai; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'KelolaArtikel';
  $data['url'] = 'KelolaArtikel/import';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>

<?php
$msg = $this->session->flashdata('msg');
if ($msg) {
    echo '<div class="alert alert-info">' . $msg . '</div>';
}
?>
