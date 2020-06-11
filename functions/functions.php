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

		if (is_array($row)) {

			header('Location: ../fout');

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


if(isset($_POST["add-route"])) {


			$userID = $_POST['userID'];
			$routeID = $_POST['routeID'];
			$routename = $_POST['routename'];
			$routedescr = $_POST['routedescr'];
			$routeimage = $_POST['routeimage'];
			$cost = $_POST['cost'];
			$startpunt = $_POST['startpunt'];
			$eindpunt = $_POST['eindpunt'];
			$kilom = $_POST['kilom'];
			$links = $_POST['links'];
			$rechts = $_POST['rechts'];

			$addoute = $db->prepare("INSERT INTO mijnroutes (userID, routeID, routename, routedescr, routeimage, cost, startpunt, eindpunt, kilom, links, rechts ) VALUES (:userID, :routeID, :routename, :routedescr, :routeimage, :cost, :startpunt, :eindpunt, :kilom, :links, :rechts)");
			$addoute->bindValue(':userID',$userID);
			$addoute->bindValue(':routeID',$routeID);
			$addoute->bindValue(':routename',$routename);
			$addoute->bindValue(':routedescr',$routedescr);
			$addoute->bindValue(':routeimage',$routeimage);
			$addoute->bindValue(':cost',$cost);
			$addoute->bindValue(':startpunt',$startpunt);
			$addoute->bindValue(':eindpunt',$eindpunt);
			$addoute->bindValue(':kilom',$kilom);
			$addoute->bindValue(':links',$links);
			$addoute->bindValue(':rechts',$rechts);



			$addoute->execute();

			header("Location: ../mijn-routes");

		}

		if(isset($_POST["update-route"])) {

				$id = $_POST['userID'];
				$current_route = $_POST['current_route'];

				$editAccount = $db->prepare("UPDATE users SET current_route = :current_route WHERE id = :id");

				$editAccount->bindValue(':id', $id);
				$editAccount->bindValue(':current_route', $current_route);
				$editAccount->execute();

				header("Location: ../route");

			}


if(isset($_POST["add-group"])) {

	$naamgroep = $_POST['naamgroep'];
	$groepbeschrijving = $_POST['groepbeschrijving'];
	//$fotogroep = $_POST['fotogroep'];

	$image = $_FILES["image"]["name"];

	move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/groepsfotos/".$_FILES['image']['name']);

	$addgroup = $db->prepare("INSERT INTO groep (groepsnaam, groepsomschrijving, groepsfoto) VALUES (:groepsnaam, :groepsomschrijving, :groepsfoto)");

	$addgroup->bindValue(':groepsnaam',$naamgroep);
	$addgroup->bindValue(':groepsomschrijving',$groepbeschrijving);
	$addgroup->bindValue(':groepsfoto',$image);
	$addgroup->execute();

	header("Location: ../groep");

	}
// }


	if(isset($_POST["add-qr"])) {


		$qrID = $_POST['qrID'];
		$userID = $_POST['userID'];

		$proggresje = $db->prepare("SELECT routeID, userID, progress FROM mijnroutes WHERE routeID = :routeID AND userID = :userID");
		$proggresje->execute(array(':userID' => $userID, ':routeID' => $qrID));
		$progressjes = $proggresje->fetch();

		$progressNow = $progressjes[2];
		$progressPlus = 30;

		$progressen = $progressNow + $progressPlus;

		$addqr= $db->prepare("UPDATE mijnroutes SET progress = :progress WHERE routeID = :routeID AND userID = :userID");
		$addqr->bindValue(':progress', $progressen);
		$addqr->bindValue(':userID', $userID);
		$addqr->bindValue(':routeID', $qrID);
		$addqr->execute();

		header("Location: ../route");

		}



?>
