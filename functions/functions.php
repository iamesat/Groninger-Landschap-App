<?php
	require_once('../include/db-connect.php');

  if(isset($_POST["register"])) {

		// Get the post values
		$username = strtolower($_POST['username']);
		$email = strtolower($_POST['email']);
		$password = strtolower($_POST['password']);
		$naam = strtolower($_POST['naam']);
		$achternaam = strtolower($_POST['achternaam']);

		// Check if the emailadres already exists
		$check = $db->prepare("SELECT username FROM users WHERE username = :username");
		$check->execute(array(':username' => $username));
		$row = $check->fetch();

		// Redirect to registration page if user exists
		if (is_array($row)) {

			header('Location: ../users');

		} else {

			// Hash the password to SHA-256 for security
			$password = hash('sha256', $_POST['password']);

			// Insert values into the database
			$register = $db->prepare("INSERT INTO users (username, email, password, naam, achternaam) VALUES (:username, :email, :password, :naam, :achternaam)");

			// Bind values
			$register->bindValue(':username',$username);
			$register->bindValue(':email',$email);
			$register->bindValue(':password',$password);
      $register->bindValue(':naam',$naam);
      $register->bindValue(':achternaam',$achternaam);
			$register->execute();

			header('Location: ../index.php');
		}
	}
?>
