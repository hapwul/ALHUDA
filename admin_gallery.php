<?php
require_once "core/init.php";

$super_user=$login=false;
if(isset($_SESSION['user'])) {
	$login=true;
	if(cek_status($_SESSION['user']) == 1) {
		$super_user=true;
	}
} else {
	header("Location:login.php");
}

require_once "view/header_gallery.php";

$perPage=16; //per halaman
$page=isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$start=($page > 1) ? ($page * $perPage) - $perPage : 0;

$gallery=mysqli_query($link, "SELECT * FROM gallery ORDER BY id DESC LIMIT $start, $perPage");

$result=mysqli_query($link, "SELECT * FROM gallery");
$total=mysqli_num_rows($result);

$pages=ceil($total/$perPage);


?>



<div class="container">
<div class="row">
<?php while($row=mysqli_fetch_assoc($gallery)) { ?>
<div class="col-sm-3">
	<br/><br/>
	<img src="Gambar Gallery/<?php echo $row['foto'] ?>" style="text-align:center;height:100px"/>
	<p><?php echo $row['kegiatan'] ?></p>
	<?php if($login==true) { ?>
		<a href="edit_gallery.php?id=<?php echo $row['id']; ?>">Edit</a>
		<?php if($super_user==true){ ?>
			<a href="delete_gallery.php?id=<?php echo $row['id']; ?>">Hapus</a>
		<?php } ?>
	<?php } ?>
</div>
<?php } ?>
</div>
<br/><br/>
<div class="">
<?php for($i=1; $i<=$pages; $i++){ ?>
	<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	
<?php } ?>
	<br/><br/>
	</div>

</div>


<?php require_once "view/footer.php"; ?>
