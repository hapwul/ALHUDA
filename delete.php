<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

if(isset($_GET['id'])) {
	if(hapus_data($_GET['id'])) {
		header("Location:admin_news.php");
	} else echo "Gagal menghapus data";
}

?>