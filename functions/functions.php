<?php
	require_once('../include/db-connect.php');

  if(isset($_POST["register"])) {

		// Get the post values
		$username = strtolower($_POST['username']);
		$email = strtolower($_POST['email']);

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
			$register = $db->prepare("INSERT INTO users (email, username, password, naam, achternaam) VALUES (:email, :username, :password, :naam, :achternaam)");

			// Bind values
			$register->bindValue(':email',$email);
			$register->bindValue(':username',$username);
			$register->bindValue(':password',$password);
      $register->bindValue(':naam',$naam);
      $register->bindValue(':achternaam',$achternaam);
			$register->execute();

			header('Location: ../jooooo');
		}
	}

?>
