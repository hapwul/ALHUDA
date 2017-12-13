<?php
$link=mysqli_connect("localhost", "smpalhud_wulan", "wulan123", "smpalhud_alhuda");
if(!$link) {
	die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

?>