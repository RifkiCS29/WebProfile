<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Web Profile</title>
<!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
	<script src="assets/jquery/jquery.min.js"></script>	
	<script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Bagian navbar -->
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
                        <a href="#">Login</a>
                    </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Bagian Form Login -->
<div class="container">
	<div class="row">  
	   <div class="col-md-4 col-sm-2 col-xs-2 col-lg-4">
			</div>
				<div class="col-md-4 col-sm-8 col-xs-8 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-body">
<!-- Form Action ke validasilogin.php -->
		<form action="validasilogin.php" method="POST" accept-charset="utf-8" role="form">
		<h3 class="text-center title-login">Login</h3>
			<div class="form-group">
				<label for="username">Username</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
<!-- membatasi karakter sebanyak 10 -->
						<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" autocomplete="off" maxlength="10" onKeyPress="return goodchars(event,'0123456789',this)" required />
					</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
						<input type="password" class="form-control" name="password" placeholder="Password" maxlength="25" required />
					</div>
			</div>
		 <div class="form-actions">
<!-- tombol back untuk kembali ke halaman awal -->
				<a href="index.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
		 </div>
         <p></p>
      </form>
					</div>
				</div>
			</div>
		</div>
</body>