<?php
session_start();
//cek session berdasarkan nim dan nama
if (empty($_SESSION['nim']) AND empty($_SESSION['nama'])){
	header('location:index.php');
	exit();
}
?>