<?php
require_once "core/init.php";

if(isset($_SESSION['user'])) {
	header("Location:admin_news.php");
} else {
	
	$error="";

	if(isset($_POST['submit'])) {
		$nama=strip_tags($_POST['nama']);
		$pass=strip_tags($_POST['password']);
		$repass=strip_tags($_POST['repassword']);
		
		if(!empty(trim($nama)) && !empty(trim($pass)) && !empty(trim($repass)) && $pass==$repass) {
			if(register_cek_nama($nama)) {
				if(register_user($nama, $pass)) {
					$_SESSION['user']=$nama;
					header("Location:admin_news.php");
				} else {
					$error="Ada masalah saat daftar";
				}
			} else {
				$error="Nama yang didaftarkan sudah ada. Pilih nama lain!";
			}
		 
		} else {
			$error="Username dan password wajib diisi dengan benar";
		}
	}

	require_once "view/header.php";

?>

	<form action="" method="post">
		<label for="nama">Username</label><br/>
		<input type="text" name="nama" autocomplete="off" value=""><br/><br/>

		<label for="password">Password</label><br/>
		<input type="password" name="password" value=""><br/><br/>
		
		<label for="repassword">Re-Password</label><br/>
		<input type="password" name="repassword" value=""><br/><br/>

		<div id="error"><?php echo $error; ?></div><br/>

		<input type="submit" name="submit" value="Daftar">
	</form>
	<br/>
	<a href="login.php">Kembali ke Halaman Login</a>

	<?php require_once "view/footer.php"; ?>

<?php } ?>