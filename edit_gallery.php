<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header_gallery.php";

$error="";
if(isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
	$id="";
}

$result=mysqli_query($link, "SELECT * FROM gallery WHERE id='$id'");
if(!$result) {
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

while($row=mysqli_fetch_assoc($result)) {
	$kegiatan=$row['kegiatan'];
}


if(isset($_POST['kegiatan2'])) {
	$kegiatan2=$_POST['kegiatan2'];
	
	$query="UPDATE gallery SET kegiatan='$kegiatan2' WHERE id='$id'";
	$result=mysqli_query($link, $query);
	if(!$result) {
		die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
	} else {
		header("Location:admin_gallery.php");
	}
}


?>

<form action="" method="post">
Isi Data Gallery<br/><br/>
<input type="text" name="kegiatan2" autocomplete="off" value="<?php echo $kegiatan ?>" required="required"/>
<br/><br/>
<input type="submit" name="submit" value="Update">
</form>
<button type="submit" name="ubah_foto" style="float:right"><a href="edit_fotogallery.php<?php echo "?id=$id" ?>">Ubah Gambar</a></button>

<?php
require_once "view/footer.php";
?>