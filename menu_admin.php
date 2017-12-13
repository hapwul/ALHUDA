<?php 
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header_menuutama.php";

?>

<a href="admin_news.php" target="_blank">Manajemen Konten</a>
<br/>
<a href="admin_gallery.php" target="_blank">Manajemen Gallery</a>

<?php require_once "view/footer.php"; ?>