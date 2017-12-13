<?php
$login=false;
if(isset($_SESSION['user'])) {
	$login=true;
}
?>

<head>
<title>SMP Al Huda Surabaya Admin Area</title>
<link rel="stylesheet" href="view/style.css">

</head>

<h1>SMP Al Huda Surabaya Admin Area</h1>
<div id="menu">
<a href="admin_news.php">Home</a>
<a href="tambah.php">Tambah</a>

<?php if($login==true): ?>
	<a href="logout.php">Logout</a>
<?php else: ?>
	<a href="login.php">Login</a>
<?php endif; ?>
</div>