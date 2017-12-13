<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header_gallery.php";

if(isset($_POST['kegiatan'])) {
	$kegiatan=$_POST['kegiatan'];
	
	$query="INSERT INTO gallery (kegiatan) VALUES ('$kegiatan')";
	$result=mysqli_query($link, $query);
	if(!$result) {
		die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
	} else {
		header("Location:transfering.php");
	}
}

?>

<form action="" method="post">
Isi Data Gallery<br/><br/>
<input type="text" name="kegiatan" autocomplete="off" required="required"/>
<br/><br/>
<input type="submit" name="submit" value="Next">
</form>

<?php
require_once "view/footer.php";
?>