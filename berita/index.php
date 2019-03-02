<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ILMU KOMPUTER UNMUL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../index.php">ILMU KOMPUTER UNMUL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../about.html">Tentang</a>
                    </li>
                    <li>
                        <a href="../visimisi.html">Visi Misi</a>
                    </li>
                    <li>
                        <a href="../contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="index.php">Blog</a>
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

        <!-- Footer -->
         <!-- Footer -->
           	<footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
        	
        </div>
                <table border="0" width="100%">
          <tr>
          <td width="35%"><strong><i class="fa fa-institution"></i> Hubungi Kami : </strong><br>
          Fakultas Ilmu Komputer dan Teknologi Informasi (FKTI)<br>
          Jl. Barong Tongkok Kampus Gn. Kelua Universitas Mulawarman  <br>
          Samarinda-Kalimantan Timur 75123 Indonesia.<br>
          Telp  : (0541)753133 <br>
          Email : ilkom@fkti.unmul.ac.id Cc ilkom.fkti@gmail.com <br><br>
          <strong>Copyright &copy; 2016 <a href="#">Ilmu Komputer UNMUL 2014</a>. </strong><br><br><br>
       </td>
            <td width="20%"> <strong><i class="fa fa-external-link-square"></i> Link Terkait : </strong> <br>
            <ul>
              <li><a href="http://www.dikti.go.id/" target="_BLANK">Kemenristek Dikti</a></li>
              <li><a href="http://simlitabmas.dikti.go.id/" target="_BLANK" >SIM Libtabmas</a></li>
              <li><a href="http://simbelmawa.ristekdikti.go.id/" target="_BLANK" >SIM Belmawa</a></li>
              <li><a href="http://forlap.ristekdikti.go.id/" target="_BLANK" >Forlab Ristek Dikti</a></li>
              <li><a href="http://piu-idb.unmul.ac.id/" target="_BLANK" >PIU - IDB Program</a></li>
              <li><a href="http://e-journals.unmul.ac.id/" target="_BLANK" >E-journal Unmul</a></li>
              <li><a href="http://sinta1.ristekdikti.go.id/" target="_BLANK" >SINTA Ristek Dikti</a></li>
              <li><a href="http://www.springer.com/gp/" target="_BLANK" >SPRINGER</a></li>           
          </ul>
            </td>
            <td width="23%"> <strong><i class="fa fa-book"></i> Info Beasiswa : </strong> <br>
            <ul>
              <li><a href="http://www.lpdp.kemenkeu.go.id/" target="_BLANK" >Beasiswa LPDP</a></li>
              <li><a href="http://bidikmisi.belmawa.ristekdikti.go.id/" target="_BLANK">Beasiswa Bidik Misi</a></li>
              <li><a href="http://beasiswaunggulan.kemdikbud.go.id/" target="_BLANK">Beasiswa Unggulan</a></li>
              <li><a href="http://beasiswaunggulan.kemdikbud.go.id/beasiswa/beasiswa-masyarakat-berprestasi" target="_BLANK">Beasiswa Masyarakat Berprestasi</a></li>
              <li><a href="http://www.tanotofoundation.org/id/" target="_BLANK">Beasiswa Tanoto Foundation</a></li>
        <li><a href="http://www.lotus.ugent.be/" target="_BLANK">Beasiswa Erasmus Mundus</a></li>
              <br><br>
              
          
            </ul>
            </td>
            <td background="enggang.png" align="middle" style="background-repeat:no-repeat;float:right;">
        <strong><i class="fa fa-comments"></i> Media Sosial : </strong><br>
        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/groups/534812763374115/"><i class="fa fa-facebook"></i></a>
        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
        <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
        <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
        <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
        <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
        <br><br><br><br><br><br><br><br>
        </td>
          </tr>
        </table>        
       
        
        <div>
        <!-- Default to the left All rights reserved.-->
          
          </div>
                     
      </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
