    <div id="modtambah" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Data Siswa</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form id="formtambah">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="tanggal_lahir" class="form-control demoDate" autocomplete="off">
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button onclick="prosestambah()" class="btn btn-outline-primary btn-sm">Simpan</button>
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