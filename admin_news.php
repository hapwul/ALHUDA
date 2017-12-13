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

//$articles=tampilkan();

require_once "view/header.php";

$perPage=5; //per halaman
$page=isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$start=($page > 1) ? ($page * $perPage) - $perPage : 0;

$articles=mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC LIMIT $start, $perPage");

$result=mysqli_query($link, "SELECT * FROM blog");
$total=mysqli_num_rows($result);

$pages=ceil($total/$perPage);

if(isset($_GET['cari'])) {
	$cari=$_GET['cari'];
	$articles=hasil_cari($cari);
}

?>

<form action="" method="get">
	<input type="search" name="cari" placeholder="silahkan cari di sini">
</form>

<?php while($row=mysqli_fetch_assoc($articles)) : ?>
	<div class="each_article">
	<h3><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a></h3>
	<p>
	<?php echo excerpt($row['isi']); ?>
	</p>

	<p class="waktu"><?php echo $row['waktu']; ?></p>
	<p class="tag">Tag : <?php echo $row['tag']; ?></p>
	
	<?php if($login==true): ?>
		<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
		<?php if($super_user==true): ?>
			<a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
		<?php endif; ?>
	<?php endif; ?>
	</div>
<?php endwhile; ?>

<div class="">
<?php for($i=1; $i<=$pages; $i++){ ?>
	<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	
<?php } ?>

<?php require_once "view/footer.php"; ?>
