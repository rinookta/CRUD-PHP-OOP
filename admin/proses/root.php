<?php
class root{
	function login($con){
		$username= $_POST['username']; $password= md5($_POST['password']);
		return mysqli_fetch_array(mysqli_query($con,"SELECT * FROM admin where username='$username' and password='$password' "));
	}
	function prosestambah($con){
		$nama= $_POST['nama']; $alamat= $_POST['alamat']; $tanggal_lahir= date('Y-d-m',strtotime($_POST['tanggal_lahir']));
		mysqli_query($con,"INSERT INTO siswa set nama='$nama',alamat='$alamat',tanggal_lahir='$tanggal_lahir' ");
	}
	function prosesedit($con){
		$id_siswa= $_POST['id_siswa']; $nama= $_POST['nama']; $alamat= $_POST['alamat']; $tanggal_lahir= date('Y-d-m',strtotime($_POST['tanggal_lahir']));
		mysqli_query($con,"UPDATE siswa set nama='$nama',alamat='$alamat',tanggal_lahir='$tanggal_lahir' where id_siswa='$id_siswa' ");
	}
	function proseshapus($con){
		$id_siswa= $_POST['id_siswa'];
		mysqli_query($con,"DELETE FROM siswa where id_siswa='$id_siswa' ");
	}
}
?>