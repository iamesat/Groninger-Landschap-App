<?php

	include('db-connect.php');
	session_start();

	$username = $_SESSION['login'];

	$check = $db->prepare("SELECT username FROM users WHERE username = :username");
	$check->execute(array(':username' => $username));
	$row = $check->fetch();

	if (!is_array($row)) {
		header('Location: index.php');
	}

?>
