<div class="container">
      <div class="row">
      <div class="col-md-9 col-sm-9">
       <div class="panel panel-default">
       <div class="panel-body">
      <form class="form-horizontal" method="post" action="simpanBerita.php" name="frmBerita" enctype="multipart/form-data">
  		<div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
          <input type="text" class="form-control" name="jdl_berita" placeholder="Judul Berita" required />
        </div>
         </div>
   <div class="form-group">
            <label for="inputIsiBerita">Isi Berita</label>
            <div class="input-group">
           <textarea class="ckeditor" rows="10" cols="40" name="isi_berita" placeholder="Isi Berita" required ></textarea>
        </div>
    </div>
   <div class="form-group">
            <label for="inputGambar">Gambar Berita</label>
					<input type="file" id="inputGambar" name="gbr_berita"required>
			</div>
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

