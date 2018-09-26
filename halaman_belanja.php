<!DOCTYPE html>
<html>
<head>
	<title>GilMart</title>
</head>
<body>
	<center> 
		<h1> SELAMAT DATANG DI GILMART </h1>
		<h3> Pusat penjualan Sepatu Casual terlengkap di Bandung! </h3> 
	</center>

	<table>
		<form action="proses_belanja.php" method="post">
		<tr>
			<td> Nama Pelanggan </td>
			<td> : </td>
			<td> <input type="text" name="nama"></td>
		</tr>

		<tr>
			<td> Daftar Barang </td>
			<td> : </td>
			<td> 
				<input type="checkbox" name="barang[]" value="Adidas Gazelle"> Adidas Gazelle <br>
				<input type="checkbox" name="barang[]" value="Nike Cortez"> Nike Cortez <br>
				<input type="checkbox" name="barang[]" value="Onitsuka Tiger"> Onitsuka Tiger <br>
				<input type="checkbox" name="barang[]" value="Reebok Club C85"> Reebok Club C85
			</td>
		</tr>

		<tr>
			<td> Jenis Pengiriman</td>
			<td> : </td>
			<td> 
				<input type="radio" name="pengiriman" value="JNE"> JNE <br>
				<input type="radio" name="pengiriman" value="Tiki"> TIKI <br>
				<input type="radio" name="pengiriman" value="Pos"> Pos <br>
			 </td>
		</tr>

		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type="text" name="alamat"></td>
		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> <input type="submit" name="proses" value="Proses"> </td>
		</tr>
		</form>
	</table>


</body>
</html>
