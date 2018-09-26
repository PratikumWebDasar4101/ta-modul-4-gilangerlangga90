<?php
session_start();

$nama_file = $_FILES["foto"]["name"];
$nama_file_tmp = $_FILES["foto"]["tmp_name"];
$dir = "upload/";
$target_file = $dir.$nama_file;
move_uploaded_file($nama_file_tmp, $target_file);

$user = array(
	"nama" => $_POST["nama"],
	"foto" => $target_file,
	"hobi" => $_POST["hobi"],
	"genre_film" => $_POST["genre_film"],
	"travelling" => $_POST["travelling"]
	);

$_SESSION["user"] = $user;

include("halamanakhir.php")
?>
