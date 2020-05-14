<?php

	error_reporting(-1);
	ini_set('display_errors', 1);

	include('../include/db-connect.php');

	// Sessie wordt gestart
	session_set_cookie_params(time()+604800);
	session_start();
	$message = "Verkeerde gebruikersnaam/wachtwoord";

	// Check of de post login button is aangeklikt
	if(isset($_POST)) {

		// Check of de gebruikersnaam en wachtwoorden zijn ingetypt
		if(!empty($_POST['username']) and !empty($_POST['password'])) {
			$username = strtolower($_POST['username']);

			// Hash password encrypten
			$password = hash('sha256', $_POST['password']);

			// Check of de gebruiker bestaat in de database
			$login = $db->prepare("SELECT id, email, password FROM users WHERE username = :username");
			$login->execute(array(':username' => $username));
			$user = $login->fetch();

			// Check of de gebruikersnaam en wachtwoord overheen komen
			if ($user[2] == $password) {
				$_SESSION['login'] = $username;
				$_SESSION['userID'] = $user[0];
				$_SESSION['email'] = $user[1];
				header("location: ../home");
			}
			// Login fout krijg text en wordt je weer terug gestuurd naar de login page
			else {

				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script>setTimeout(\"location.href = '../index';\",1);</script>";

			}
		}
	}
?>
