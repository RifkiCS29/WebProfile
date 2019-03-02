<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>	
    <script type="text/javascript" src="holder/holder.js"></script>

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Web Profile</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blog Home Two
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Blog Home Two</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Blog Post Row -->
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
	<div class="row">
      <div class="col-md-5">
        <img data-src="holder.js/350x250"  src="<?=$hasil_data['gambar'];?>" style="width: 350px; height: 250px;">
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

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
