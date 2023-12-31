<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Artikel</h3>
      <form method="POST" id="form-update-pegawai">
        <input type="hidden" name="id" value="<?php echo $dataPegawai->id_pegawai; ?>">

        <!-- Nama Penulis -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nama Penulis" name="nama_penulis" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_penulis; ?>">
        </div>

        <!-- Judul Artikel -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-list-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->judul; ?>">
        </div>

        <!-- Isi Artikel -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-file"></i>
          </span>
          <textarea class="form-control custom-textarea" placeholder="Isi Artikel" name="isi_artikel" aria-describedby="sizing-addon2" rows="4"><?php echo $dataPegawai->isi_artikel; ?></textarea>
        </div>

        <!-- Kategori -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-briefcase"></i>
          </span>
          <select name="kategori" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
            <?php
            foreach ($dataPosisi as $posisi) {
              ?>
              <option value="<?php echo $posisi->id; ?>" <?php if($posisi->id == $dataPegawai->id_kategori){echo "selected='selected'";} ?>><?php echo $posisi->nama; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <!-- Status Upload -->
        <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
            Status Artikel
          </span>
          <span class="input-group-addon">
            <input type="radio" name="status_publish" value="1" id="publish" class="minimal">
            <label for="publish">Publish</label>
          </span>
          <span class="input-group-addon">
            <input type="radio" name="status_publish" value="2" id="draft" class="minimal"> 
            <label for="draft">Draft</label>
          </span>
        </div>

        <!-- Button update  -->
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>