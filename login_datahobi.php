<!DOCTYPE html>
<html>
<head>
	<title>	Form Login </title>
</head>
<body>
	<center>
		<h1> HALAMAN LOGIN </h1>
		<h3> Silahkan masukkan username dan password!</h3> <br>
		<table>
			<form action="login_datahobi.php" method="POST">
				<tr>
					<td> Username </td>
					<td> : </td>
					<td> <input type="text" name="username"></td>
				</tr>

				<tr>
					<td> Password </td>
					<td> : </td>
					<td> <input type="password" name="password"></td>
				</tr>

				<tr>
					<td> </td>
					<td> </td>
					<td> <input type="submit" name="masuk" value="Masuk"> </td>
				</tr>
			</form>
		</table>
		<h3> <b> *Pastikan username = user | password = mauakses </b> </h3>
	</center>
</body>
</html>

<?php  
session_start();
error_reporting(0);
$user = array(
				"username" => "user",
				"password" => "mauakses"
			);
if (isset($_POST['masuk'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: formawal.html");
	}else{
		echo "Username atau Password Salah!";
	}
}
?>