<?php

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Halaman Akhir </title>
</head>
<body>
<center> 
	<h1> Halaman Akhir </h1>
	<h1> Data Hobi </h1>
</center>

<table>
	<tr>
		<td> Nama </td>
		<td> : </td>
		<td> <?php echo $user['nama']; ?> </td>
	</tr>

	<tr>
		<td> Hobi </td>
		<td> : </td>
		<td>
			<?php 
			foreach ($user['hobi'] as $hobi => $value) {
				echo $value . '<br>';
			} 	
			?> 
		</td>
	</tr>

	<tr>
		<td> Foto </td>
		<td> : </td>
		<td> <img width="300" src="<?php echo $user['foto']; ?>" </td>
	</tr>

	<tr>
		<td> Genre Film Favorit </td>
		<td> : </td>
		<td>
			<?php
			foreach ($user['genre_film'] as $genre_film => $value) {
			 	echo $value . '<br>';
			} 	
			?> 
		</td>
	</tr>

	<tr>
		<td> Tujuan Travelling </td>
		<td> : </td>
		<td>
			<?php
			foreach ($user['travelling'] as $travelling => $value) {
			 	echo $value . '<br>';
			 } 	
			?>
		</td>
	</tr>

</table>

<br> <br> <br>

<a href="login_datahobi.php" style="text-decoration: none" color="blue";> Logout </a>
</body>
</html>
