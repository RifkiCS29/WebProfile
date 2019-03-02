<?php
#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{	
	$noPage = $_GET['hal'];
}else{	
	$noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"SELECT * from tbl_berita order by id_berita desc limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi, "SELECT COUNT(*) AS jumData FROM tbl_berita");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysqli_fetch_array($ambil_data)){
?>
<br>
	<div class="row">
      <div class="col-md-5">
        <img data-src="holder.js/350x250" alt="300x200" src="<?=$hasil_data['gambar2'];?>" style="width: 350px; height: 250px;">
      </div>
      <div class="col-md-7">
          <h4><?=$hasil_data['judul'];?></h4>
		  <a href="#" class="text">Diposkan pada <?=$hasil_data['tanggal'];?></a>
          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,500);?></p>
          <p>
          	<a href="index.php?link=lihatDetailBerita.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a> 
          	
          </p>
      </div>      
    </div>

    <hr>
<?php
}
?>

<!----  menampilkan page number di bawah post ------------>
<div class="pagination pull-right">
    <ul>
	<?php
		$link = "index.php?link=lihatBerita.php&hal=";
		# menampilkan link previous
		if ($noPage > 1) echo  "<td><a href='".$link."".($noPage-1)."'>&larr; Prev </a></td>";
		# memunculkan nomor halaman dan linknya
		for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
		{
			if($noPage == $jml_hal){
				echo "<td class='disabled'><a href='#' style='cursor'>".$jml_hal."</a></td> ";
			}else{
				echo "<td><a href='".$link."".$jml_hal."'>".$jml_hal."</a></td> ";}
		}
		# menampilkan link next
		if ($noPage < $jumPage) echo "<td><a href='".$link."".($noPage+1)."'>Next &rarr;</a></td>";
		?>
    </ul>
</div>