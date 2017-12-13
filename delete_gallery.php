<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

if(isset($_GET['id'])) {
	if(hapus_gambar($_GET['id'])) {
		header("Location:admin_gallery.php");
	} else echo "Gagal menghapus data";
}

?>