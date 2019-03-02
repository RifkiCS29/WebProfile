
<?php
// Panggil koneksi database
require_once "koneksi.php";

if (isset($_GET['id_berita'])) {

	$id_berita = $_GET['id_berita'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($koneksi, "DELETE FROM tbl_berita WHERE id_berita='$id_berita'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=1');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=2');
	}	
}							
?>