<?php
session_start();
//koneksi ke database
include "config/database.php";

//validasi login
$nim		= $_POST['nim']; 
$password	= md5($_POST['password']);
// mengambil data dari tb_mahasiswa berdasarkan nim dan password
$query=mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE nim='$nim' AND password='$password'"); 
$data=$query->fetch_array();
$jumlah=$query->num_rows;

//mengecek apakah data ada atau tidak ?
if ($jumlah>0){
	$nama=$data['nama'];
	$_SESSION[nim] 	= $nim;
	$_SESSION[nama] = $nama;
// jika ada akan dialihkan ke index2.php dan muncul alert (3)
		header('location:berita/index.php');
}
else{// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=2');
}
?>