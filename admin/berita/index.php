<html>
	<head>
		<title>Berita</title>
		<!-- Bootstrap -->
    	<link href="assets/css/bootstrap.css" rel="stylesheet">
    	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery.min.js"></script>	
    	<script src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    	<script type="text/javascript">
    		function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
    	</script>
	</head>
	<body>
<?php
// memanggil ceksession.php
include "ceksession.php";  
  ?>
 <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Web Profile- Berita</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-user"></span>
<!-- menampilkan session berdasarkan nama -->
						<font size=3><?php echo $_SESSION['nama'];?></font></h4>
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</a></li>
					</ul>
					</li>
				</ul>
        </div>
        <!-- /.container -->
    </nav>

<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<?php include("menuBerita.php");?>
                </div><!--/span-->
                <div class="col-md-9 col-sm-9">
                	<!--letak konten-->
                    <?php
						if(empty($_GET['link']))
                    		include "lihatBerita.php";
						else
							include($_GET['link']);						
					?>
				</div><!--/span-->
			</div><!--/row-->
	


			<hr>
			<footer>
			<p>Ilmu Komputer (2014) &copy; Universitas Mulawarman</p>
			</footer>
	    </div><!--/.fluid-container-->
	</body>
</html>