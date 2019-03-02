<?php
include "koneksi.php";
include "ceksession.php";  
$id_berita = addslashes($_POST['id_berita']);
$judul_berita  = addslashes($_POST['jdl_berita']);
$isi_berita	= addslashes($_POST['isi_berita']);
$tgl_berita	= date('d M Y H:i');
$nim = $_SESSION['nim'];
 
#tangkap gambar
$namafolder="gambar/"; //folder tempat menyimpan file
if (!($_FILES['gbr_berita']['name']=="")){
if (!empty($_FILES["gbr_berita"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
        if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {
            $gambar2="../admin/berita/".$gambar;
			$query 	= mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id_berita='$id_berita'") or die('Query Error : '.mysqli_error($koneksi));
			$data  	= mysqli_fetch_assoc($query);
			$gambar3 = $data['gambar'];
			unlink($gambar3);
			mysqli_query($koneksi, "UPDATE tbl_berita SET  nim		= '$nim',
														judul 		= '$judul_berita',
														isi        	= '$isi_berita',
														tanggal 	= '$tgl_berita',
														gambar		= '$gambar',
                                                        gambar2		= '$gambar2'
												  WHERE id_berita	=  $id_berita "); 
            
           
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
                    document.location="index.php?link=formubahberita.php&id=<?= $id_berita ;?>;
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="index.php?link=formubahberita.php&id=<?=$id_berita;?>";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
}
else{	
     mysqli_query($koneksi, "UPDATE tbl_berita SET  nim		= '$nim',
													judul 		= '$judul_berita',
													isi        	= '$isi_berita',
													tanggal 	= '$tgl_berita'
											  WHERE id_berita	=  $id_berita "); 
            
    echo'	<script language="javascript">
            alert("Berhasil menambahkan");
            document.location="index.php?link=lihatBerita.php";
            </script>'; 
}

?>