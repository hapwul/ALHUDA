<?php
require_once "core/init.php";

$error="";
if(isset($_GET['id'])) {
	$id=$_GET['id'];
	$article=tampilkan_per_id($id);	
	while($row=mysqli_fetch_assoc($article)) {
		$judul_awal=$row['judul'];
		$foto=$row['foto'];
		$isi_awal=$row['isi'];
		$tag_awal=$row['tag'];
	}
}

//Memecah string isi_awal berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $isi_awal);

//String kosong inisialisasi
$text="";

//Untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
//Lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++) {
	$part = str_replace($pecah[$i], "<p style='text-align:justify;text-indent: 0.5in'>".$pecah[$i]."</p><br/>", $pecah[$i]);
	$text .= $part;
}

?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>

<h3><a href="index.php">KEMBALI</a></h3>

<p id="judul_single">
<?php echo $judul_awal; ?>
</p>
<br/>

<div style="text-align:center">
<img src="Gambar News/<?php echo $foto ?>" style="text-align:center" width="30%"/>
</div>
<br/>

<p id="isi_single" style="text-align:justify">
<?php echo $text; ?>
</p>

<p id="tag_single">
<?php echo $tag_awal; ?>
</p>

<br/>

</body>

<?php
require_once "view/footer.php";
?>

</html>