<?php
session_start();

$user = $_SESSION["user"];
$nama = $_POST["nama"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$harga = 0;
$ongkir = 0;

	if($pengiriman == "JNE")
		$ongkir = 22000;
	if($pengiriman == "TIKI")
		$ongkir = 17000;
	if($pengiriman == "Pos")
		$ongkir = 15000;

	function total($a, $b) {
		return $a + $b;
	}

	include("struk_belanja.php");

?>
