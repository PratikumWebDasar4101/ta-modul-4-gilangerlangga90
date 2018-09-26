<?php
session_start();

$user = array(
				"username" => "user",
				"password" => "maubelanja"
			);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: halaman_belanja.php");
}else {
	header("Location: login_belanja.php");
}

?>
