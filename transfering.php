<?php
require_once "core/init.php";

$query="SELECT * FROM gallery";
$result=mysqli_query($link, $query);
if(!$result) {
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

while($row=mysqli_fetch_assoc($result)) {
	$id=$row['id'];
}

header("Location:upload_gallery.php?id=$id");

?>