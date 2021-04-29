<?php require '../../config/koneksi.php'; require '../../config/function.php'; $edit= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM siswa where id_siswa='$_GET[id_siswa]' ")); ?>
    <div id="modedit" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data Siswa</h5>
            <button class="close" typ
            e="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form id="formedit">
          <input type="hidden" name="id_siswa" value="<?php echo $edit['id_siswa']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $edit['nama']; ?>">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" autocomplete="off" value="<?php echo $edit['alamat']; ?>">
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="tanggal_lahir" class="form-control demoDate" autocomplete="off" value="<?php echo date('d/m/Y',strtotime($edit['tanggal_lahir'])); ?>">
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button onclick="prosesedit()" class="btn btn-outline-primary btn-sm">Perbaharui</button>
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('.demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
          });
    </script>