<?php
include "koneksi.php"; 
      
        $id_berita  = $_GET['id'];
        $query = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id_berita='$id_berita'") or die('Query Error : '.mysqli_error($koneksi));
        $data  = mysqli_fetch_assoc($query);
        $judul_berita   = $data['judul'];
        $isi_berita     = $data['isi']; 
        $gambar         = $data['gambar'];
?>
<div class="container">
      <div class="row">
      <div class="col-md-9 col-sm-9">
       <div class="panel panel-default">
       <div class="panel-body">
      <form class="form-horizontal" method="post" action="proses_ubahberita.php" name="frmBerita" enctype="multipart/form-data">
  	    <br>
            <label for="judul_berita">Judul Berita</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="hidden" class="form-control" name="id_berita" placeholder="Judul Berita" value="<?php echo $id_berita; ?>" required />
          <input type="text" class="form-control" name="jdl_berita" placeholder="Judul Berita" value="<?php echo $judul_berita; ?>" required />
        </div>
         
                <br>
            <label for="inputIsiBerita">Isi Berita</label>
            <div class="input-group">
            <textarea class="ckeditor" required rows="10" cols="40" name="isi_berita" placeholder="Isi Berita" value=<?php echo $isi_berita; ?>   </textarea>
            <br>
            <br>
            <label for="gambarberita">Gambar</label>
            <div class="input-group">
            <img data-src="holder.js/300x200" alt="300x200" src="<?=$gambar;?>" style="width: 350px; height: 250px;"/>
        
    </div>
   <br>
     <label for="inputGambar">Ubah Gambar Berita</label>
	 <input type="file" id="inputGambar" name="gbr_berita" value="<?=$gambar;?>"/><br><br>
			
 <div class="form-actions">
         <button class="btn btn-warning" type="reset"><span class="glyphicon glyphicon-repeat"></span> Reset</button></a>
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Submit</button>
		 </div>
</form>
</div>
</div>
</div>
</div>
</div>