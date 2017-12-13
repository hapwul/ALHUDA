<?php
require_once "core/init.php";

if(isset($_SESSION['user'])) {
	header("Location:menu_admin.php");
} else {
	
	$error="";

	if(isset($_POST['submit'])) {
		$nama=htmlentities($_POST['nama']);
		$pass=htmlentities($_POST['password']);
		
		if(!empty(trim($nama)) && !empty(trim($pass))) {
			if(cek_data($nama, $pass)) {
				$_SESSION['user']=$nama;
				header("Location:menu_admin.php");
			} else {
				$error="Ada masalah saat login";
			}
		 
		} else {
			$error="Username dan password wajib diisi";
		}
	}

	require_once "view/header.php";

?>

	<form action="" method="post">
		<label for="nama">Username</label><br/>
		<input type="text" name="nama" autocomplete="off" value=""><br/><br/>

		<label for="password">Password</label><br/>
		<input type="password" name="password" value=""><br/><br/>

		<div id="error"><?php echo $error; ?></div><br/>

		<input type="submit" name="submit" value="Login">
	</form>
	<br/>
	Belum punya akun? <a href="register.php">Register</a>

	<?php require_once "view/footer.php"; ?>

<?php } ?>