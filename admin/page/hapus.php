<?php require '../../config/koneksi.php'; require '../../config/function.php'; $edit= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM siswa where id_siswa='$_GET[id_siswa]' ")); ?>
    <div id="modhapus" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Data Siswa</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form id="formhapus">
          <input type="hidden" name="id_siswa" value="<?php echo $_GET['id_siswa']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama</label><br>
              <?php echo $edit['nama']; ?>
            </div>
            <div class="form-group">
              <label>Alamat</label><br>
              <?php echo $edit['alamat']; ?>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label><br>
              <?php echo tgl($edit['tanggal_lahir']); ?>
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button onclick="proseshapus()" class="btn btn-outline-primary btn-sm">Hapus</button>
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>