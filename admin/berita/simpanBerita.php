<?php
include "koneksi.php";
include "ceksession.php";  
$judul_berita  = addslashes($_POST['jdl_berita']);
$isi_berita	= addslashes($_POST['isi_berita']);
$tgl_berita	= date('d M Y H:i');
$nim = $_SESSION['nim'];

#tangkap gambar
$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["gbr_berita"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
        if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {
            $gambar2="../admin/berita/".$gambar;
           mysqli_query($koneksi, "INSERT INTO tbl_berita values ('','$nim','$judul_berita','$isi_berita','$tgl_berita','$gambar','$gambar2')"); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="index.php?link=lihatBerita.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="index.php?link=tambahBerita.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="index.php?tambahBerita.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>