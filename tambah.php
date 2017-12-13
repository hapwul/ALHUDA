<?php
require_once "core/init.php";

if(!$_SESSION['user']) {
	header("Location:login.php");
}

require_once "view/header.php";

$error="";

if(isset($_POST['judul']) AND isset($_POST['isi']) AND isset($_POST['tag'])) {
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$tag=$_POST['tag'];
	
	if(!empty(trim($judul)) && !empty(trim($isi))) {
		if(tambah_data($judul, $isi, $tag)) {
			header("Location:tambah_foto.php?judul=$judul");
		} else {
			$error="Ada masalah saat menambahkan data";
		}
	 
	} else {
		$error="Judul dan konten isi wajib diisi";
	}
}

$tag=tag();

?>

<form action="" method="post">
	<label for="judul">Judul</label><br/>
	<input type="text" name="judul" size="100" autocomplete="off" value=""><br/><br/>

	<label for="isi">Isi Blog</label><br/>
	<textarea name="isi" id="isi" rows="30" cols="150" autocomplete="off"></textarea><br/><br/>

	<label for="tag">Tag</label><br/>
	<select name="tag">
	<?php while($row=mysqli_fetch_assoc($tag)) { ?>
	<option value="<?php echo $row['tag'] ?>"><?php echo $row['tag'] ?></option>
	<?php } ?>
	</select><br/><br/>
	
	<div id="error"><?php echo $error; ?></div><br/>

	<input type="submit" name="submit" value="Next"/>
</form>
<br/>

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