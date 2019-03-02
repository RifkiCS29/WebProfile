<?php
session_start();
unset($_SESSION['nim']);
unset($_SESSION['nama']);
session_destroy(); 
// jika logout atau session destroy maka dialihkan ke index.php dan muncul alert (5) 
	echo "<meta http-equiv='refresh' content='0;url=../'>";
?>