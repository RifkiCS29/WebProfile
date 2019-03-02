<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ILMU KOMPUTER - ADMIN </title>
<!-- Bootstrap -->
     <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="assets/jquery/jquery.min.js"></script>	
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</head>

<body>


<!-- Navigation -->
    <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.php">Login</a>
                    </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- untuk meunculkan alert ketika regitrasi berhasil (1), registrasi gagal (2), login berhasil (3), login gagal (4), dan behasil logout(5) -->
<?php  
  if (empty($_GET['alert'])) {
    echo ""; 
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Login Behasil.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Gagal Login!</strong> Username dan Password Salah.
          </div>";
  } elseif ($_GET['alert'] == 5) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i>Anda Telah Logout</strong> Terimakasih.
          </div>";
  }
  ?>

<!-- Bagian Slide Gambar -->
 <div class="container">
    <div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="images/fkti1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>FKTI</h3>
                    <p>Fakultas Ilmu Komputer dan teknologi Informasi</p>
                </div>
            </div>
            <div class="item">
            	<img src="images/fkti2.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>ICSITech 2016</h3>
                    <p>International Conference on Science in Information Technology</p>
                </div>
            </div>
        </div>
        
        <!-- Kontrol untuk Slide -->
        <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      
    </div>
  </div>
</div>
<div class="container">
<div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		<div class="page-footer">
			<p>&copy; 2016 by Fakultas Ilmu Komputer dan Teknologi Informasi.</p>
		</div>
	</div>	
</div>
</div>
</body>
</html>

