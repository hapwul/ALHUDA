<?php 
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header.php";

if(isset($_GET['judul'])) {
	$judul=$_GET['judul'];
} else {
	$judul="";
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
			move_uploaded_file($file_tmp, "Gambar News/".$nama);
			$query="UPDATE blog SET foto='$nama' WHERE judul='$judul'";
			$result=mysqli_query($link, $query);
			if(!$result) {
				die("GAGAL MENGUPLOAD GAMBAR : ".mysqli_errno($link)." - ".mysqli_error($link));
			} else {
				header("Location:admin_news.php");
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
Upload Gambar Postingan<br/><br/>
<input type="file" name="file">
<br/><br/>
<input type="submit" name="upload" value="Simpan"/>
</form>

<?php
require_once "view/footer.php";
?>