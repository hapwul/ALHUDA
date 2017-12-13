<?php

function tampilkan() {
	$query="SELECT * FROM blog ORDER BY id DESC";
	return result($query);
}

function tampilkan_per_id($id){
	$query="SELECT * FROM blog WHERE id='$id'";
	return result($query);
}

function hasil_cari($cari) {
	$query="SELECT * FROM blog WHERE judul LIKE '%$cari%' ORDER BY id DESC";
	return result($query);
}

function result($query) {
	global $link;
	if($result=mysqli_query($link, $query) or die("Gagal menampilkan data")) {
		return $result;
	}
}

function tambah_data($judul, $isi, $tag) {
	$judul=escape($judul);
	$isi=escape($isi);
	$tag=escape($tag);
	$query="INSERT INTO blog (judul, isi, tag) VALUES('$judul', '$isi', '$tag')";
	return run($query);
}

function tag() {
	$query="SELECT * FROM tag_blog";
	return result($query);
}	

function edit_data($judul, $isi, $tag, $id) {
	$query="UPDATE blog SET judul='$judul', isi='$isi', tag='$tag' WHERE id='$id'";
	return run($query);
}

function hapus_data($id) {
	$query="DELETE FROM blog WHERE id='$id'";
	return run($query);
}

function hapus_gambar($id) {
	$query="DELETE FROM gallery WHERE id='$id'";
	return run($query);
}

function run($query) {
	global $link;
	
	if(mysqli_query($link, $query)) return true;
	else return false;
}

function excerpt($string) {
	$string=substr($string, 0, 250);
	return $string."...";
}

function excerpt1($string) {
	$string=substr($string, 0, 100);
	return $string."...";
}


function escape($data) {
	global $link;
	return mysqli_real_escape_string($link, $data);
}
?>