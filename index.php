<?php 
session_start();
if(isset($_SESSION['id_admin'])){ header('location:admin/'); }
require 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>template/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>template/font-awesome/css/font-awesome.min.css">
    <title>Login</title>
    <link rel="icon" href="favicon.ico">
    <link rel="shortcut icon" href="<?php echo $base; ?>template/img/surat.png">
  	<script src="<?php echo $base; ?>template/js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" id="loginform">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input name="username" class="form-control" type="text" placeholder="Username" autofocus autocomplete="off">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input name="password" class="form-control" type="password" placeholder="Password" autocomplete="off">
          </div>        
          <div class="form-group btn-container">
            <a onclick="loginform()" class="btn btn-primary btn-block" style="color: #fff;"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOG IN</a>
          </div>
        </form>
      </div>
    </section>
    <script type="text/javascript">
    	function loginform() {
         var data = $("#loginform").serialize();
         $.ajax({
         type : 'POST',
         url : '<?php echo $base ?>admin/proses/controller.php?aksi=login',
         data : data,
         cache: false, 
         success : function(response){
            if(response=="sukses"){
            	$.notify({title: "Sukses : ",message: "Anda Dialihkan Ke Dashboard Admin...",icon: 'fa fa-check' },{type: "success"});
              setTimeout('window.location.href = "<?php echo $base; ?>admin";',5000);
            }
            else{
            	$.notify({title: "Gagal : ",message: "Username Atau Password Salah",icon: 'fa fa-exclamation-triangle', },{type: "danger"});
            }
         }
         });
         return false;
      }
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo $base; ?>template/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $base; ?>template/js/popper.min.js"></script>
    <script src="<?php echo $base; ?>template/js/bootstrap.min.js"></script>
    <script src="<?php echo $base; ?>template/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo $base; ?>template/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/sweetalert.min.js"></script>
  </body>
</html>