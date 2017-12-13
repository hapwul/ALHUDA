<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header_gallery.php";

if(isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
	$id="";
}


if(isset($_POST['upload'])){
	$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran <= 250000000){			
			move_uploaded_file($file_tmp, "Gambar Gallery/".$nama);
			$query="UPDATE gallery SET foto='$nama' WHERE id='$id'";
			$result=mysqli_query($link, $query);
			if(!$result) {
				die("GAGAL MENGUPLOAD GAMBAR : ".mysqli_errno($link)." - ".mysqli_error($link));
			} else {
				header("Location:admin_gallery.php");
			}
		} else {
			echo "UKURAN FILE TERLALU BESAR";
		}
	} else {
		echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
	}
}

?>

<form action="" method="post" enctype="multipart/form-data">
Upload Gambar Gallery<br/><br/>
<input type="file" name="file">
<br/><br/>
<input type="submit" name="upload" value="Simpan"/>
</form>

<?php
require_once "view/footer.php";
?>


