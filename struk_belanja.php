<!DOCTYPE html>
<html>
<head>
	<title>	Struk Belanja</title>
</head>
<body>
<center>
<h1> SELAMAT DATANG DI GILMART </h1> 
<h3> Pusat penjualan Sepatu Casual terlengkap di Bandung! </h3> <br> 
<h2> Struk Belanja </h2> </center> <br>
<table>
	<tr>
		<td> Tanggal Pembelian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
		<td> : </td>
		<td> 
			<?php
			$tgl= date('l, d-m-Y'); 
			echo $tgl; ?> </td>
	</tr>

	<tr>
		<td> Nama Pembeli </td>
		<td> : </td>
		<td> <?php echo $nama; ?> </td>
	</tr>

	<tr>
		<td> Alamat </td>
		<td> : </td>
		<td> <?php echo $alamat; ?> </td>
	</tr>

	<tr>
		<td> Barang Pembelian </td>
		<td> : </td>
		<td> 
			<?php
			foreach ($barang as $baranglain){
			echo " - $baranglain . <br>";
			} ?>
		</td>
	</tr>

	<tr>
		<td> Harga Barang </td>
		<td> : </td>
		<td> 
			<?php
			for ($i=0;$i<count($barang);$i++){
					if ($barang[$i] == "Adidas Gazelle")
						$harga = $harga + 1600000;
					elseif ($barang[$i] == "Nike Cortez")
						$harga = $harga + 1400000;
					elseif ($barang[$i] == "Onitsuka Tiger")
						$harga = $harga + 1000000;
					elseif ($barang[$i] == "Reebok Club C85")
						$harga = $harga + 850000;
					}
					echo "Rp. $harga ";
			?></td>
	</tr>

	<tr>
		<td> Pengiriman </td>
		<td> : </td>
		<td> <?php echo $pengiriman . " : " . "Rp. $ongkir"; ?> </td>
	</tr>

	<tr>
		<td> Total Harga </td>
		<td> : </td>
		<td> <?php echo "Rp. "; echo total($harga, $ongkir); ?> </td>
	</tr>
</table>
</body>
</html>
