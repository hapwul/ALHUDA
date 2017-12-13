<?php 
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header.php";

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
			move_uploaded_file($file_tmp, "Gambar News/".$nama);
			$query="UPDATE blog SET foto='$nama' WHERE id='$id'";
			$result=mysqli_query($link, $query);
			if(!$result) {
				die("GAGAL MENGUPLOAD GAMBAR : ".mysqli_errno($link)." - ".mysqli_error($link));
			} else {
				header("Location:edit.php?id=$id");
			}
		} else {
			echo "UKURAN FILE TERLALU BESAR";
		}
	} else {
		echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
	}
}

$query2="SELECT * FROM blog WHERE id='$id'";
$result2=mysqli_query($link, $query2);
if(!$result2) {
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

while($row=mysqli_fetch_assoc($result2)) {
	$foto=$row['foto'];
}

?>

<form action="" method="post" enctype="multipart/form-data">
<div style="text-align:center">
Upload Gambar Postingan<br/><br/>
<img src="Gambar News/<?php echo $foto ?>" width="30%" style="text-align:center"/>
<br/><br/>
<input type="file" name="file">
<br/><br/>
<input type="submit" name="upload" value="Simpan"/>
</div>
</form>

<?php
require_once "view/footer.php";
?>