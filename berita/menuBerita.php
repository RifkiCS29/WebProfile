<?php
include "koneksi.php";
$ambil_recent = mysqli_query($koneksi, "SELECT id_berita,judul,tanggal from tbl_berita order by rand() limit 20");

?>
<br>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysqli_fetch_array($ambil_recent)){
        			echo "<li><a href='index.php?link=lihatDetailBerita.php&id=$hasil_recent[id_berita]'>".$hasil_recent['judul']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div><!--/.well ko-->