<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header.php";

$error="";

if(isset($_GET['id'])) {
	$id=$_GET['id'];
	$article=tampilkan_per_id($id);	
	while($row=mysqli_fetch_assoc($article)) {
		$judul_awal=$row['judul'];
		$isi_awal=$row['isi'];
		$tag_awal=$row['tag'];
	}
}

if(isset($_POST['submit'])) {
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$tag=$_POST['tag'];
	
	if(!empty(trim($judul)) && !empty(trim($isi))) {
		if(edit_data($judul, $isi, $tag, $id)) {
			header("Location:admin_news.php");
		} else {
			$error="Ada masalah saat memperbarui data";
		}
	 
	} else {
		$error="Judul dan konten isi wajib diisi";
	}
}

$tag=tag();
?>

<form action="" method="post">
	<label for="judul">Judul</label><br/>
	<input type="text" name="judul" size="100" value="<?php echo $judul_awal; ?>"><br/><br/>

	<label for="isi">Isi Blog</label><br/>
	<textarea name="isi" id="isi" rows="30" cols="150"><?php echo $isi_awal; ?></textarea><br/><br/>

	<label for="tag">Tag</label><br/>
	<select name="tag">
	<?php while($row=mysqli_fetch_assoc($tag)) { ?>
	<option value="<?php echo $row['tag'] ?>"><?php echo $row['tag'] ?></option>
	<?php } ?>
	</select><br/><br/>

	<div id="error"><?php echo $error; ?></div><br/>

	<input type="submit" name="submit" value="Update">
</form>

	<button type="submit" name="ubah_foto" style="float:right"><a href="ubah_foto.php<?php echo "?id=$id" ?>">Ubah Gambar</a></button>


<script type="text/javascript">
function enableTab(id) {
    var el = document.getElementById(id);
    el.onkeydown = function(e) {
        if (e.keyCode === 9) { // tombol tab ditekan

            // dapatkan posisi caret
            var val = this.value,
                start = this.selectionStart,
                end = this.selectionEnd;

            //  setel nilai textarea ke: teks sebelum caret + tab + teks setelah tanda caret
            this.value = val.substring(0, start) + '\t' + val.substring(end);

            // pasang caret di posisi kanan lagi
            this.selectionStart = this.selectionEnd = start + 1;

            return false;

        }
    };
}


enableTab('isi');
</script>

<?php
require_once "view/footer.php";
?>