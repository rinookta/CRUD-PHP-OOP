<?php require 'componen/head.php'; ?>
    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title"><i class="fa fa-users"></i> Data Siswa <span class="pull-right"><a href="#" onclick="tambah()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></span></div>
            <div class="tile-body" id="list">
              
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="tambah"></div>
    <div id="edit"></div>
    <div id="hapus"></div>
<script type="text/javascript">
  $(document).ready(function(){
    listsiswa();
  });
  function listsiswa(){
    $.ajax({
      type  : 'GET',
      url   : "page/list.php",
      async : false,
      cache: false,
      success : function(html){
        $("#list").html(html).show();
      }
    });
  }
  function tambah(){
    $.ajax({
      type  : 'GET',
      url   : "page/tambah.php",
      async : false,
      cache: false,
      success : function(html){
        $("#tambah").html(html).show();
        $('#modtambah').modal('show');
      }
    });
   }
  function prosestambah(){
    var data = $("#formtambah").serialize();
    $.ajax({
      type  : 'POST',
      url   : "proses/controller.php?aksi=prosestambah",
      data : data,
      async : false,
      cache: false,
      success : function(response){
        $('#modtambah').modal('hide');
        listsiswa();
        $.notify({title: "Sukses : ",message: "Berhasil Menyimpan",icon: 'fa fa-check', },{type: "success"});
      }
    });
  }
  function edit(id_siswa){
      $.ajax({
        type  : 'GET',
        url   : "page/edit.php?id_siswa="+id_siswa,
        async : false,
        cache: false,
        success : function(html){
          $("#edit").html(html).show();
          $('#modedit').modal('show');
        }
      });
   }
   function prosesedit(){
      var data = $("#formedit").serialize();
      $.ajax({
        type  : 'POST',
        url   : "proses/controller.php?aksi=prosesedit",
        data : data,
        async : false,
        cache: false,
        success : function(response){
          $('#modedit').modal('hide');
          listsiswa();
          $.notify({title: "Sukses : ",message: "Berhasil Diedit",icon: 'fa fa-check', },{type: "info"});
        }
    });
   }
   function hapus(id_siswa){
      $.ajax({
          type  : 'GET',
          url   : "page/hapus.php?id_siswa="+id_siswa,
          async : false,
          cache: false,
          success : function(html){
            $("#hapus").html(html).show();
            $('#modhapus').modal('show');
          }
      });
   }
   function proseshapus(){
      var data = $("#formhapus").serialize();
      $.ajax({
        type  : 'POST',
        url   : "proses/controller.php?aksi=proseshapus",
        data : data,
        async : false,
        cache: false,
        success : function(response){
          $('#modhapus').modal('hide');
          listsiswa();
          $.notify({title: "Sukses : ",message: "Berhasil Dihapus",icon: 'fa fa-check', },{type: "danger"});
        }
    });
   }
</script>
<?php require 'componen/foot.php'; ?>