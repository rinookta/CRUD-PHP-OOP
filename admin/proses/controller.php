<?php 
session_start();
require '../../config/koneksi.php'; require '../../config/function.php';
require 'root.php';
$root= new root();
$aksi= $_GET['aksi'];
if($aksi=='login'){
	$ceklogin= $root->login($con);
	if($ceklogin!=NULL){
		$_SESSION['id_admin']= $ceklogin['id_admin'];
		$_SESSION['nama']= $ceklogin['nama'];
		echo "sukses";
	}
	else{
		echo "gagal";
	}
}
else if($aksi=='logout'){
	session_destroy();
	header('location:../../');
}
else if($aksi=='prosestambah'){
	$root->prosestambah($con);
	echo "sukses";
}
else if($aksi=='prosesedit'){
	$root->prosesedit($con);
	echo "sukses";
}
else if($aksi=='proseshapus'){
	$root->proseshapus($con);
	echo "sukses";
}