<?php

	session_start();

	// Proceed only if user has not logged in
	if (empty($_SESSION["userID"])) {

		$servername = "localhost";
		$username = "root";
		$password = "password";
		$db = "mydatabase";
		$userLoginError = "";
		$passwordLoginError = "";
		$userSignUpError = "";
		$passwordSignUpError = "";

		$link = mysqli_connect($servername, $username, $password, $db);

		// If database connection fails, stop
		if (mysqli_connect_error()) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Check for POST requests
		if($_SERVER['REQUEST_METHOD'] === "POST") {
			
			$postSignUp = isset($_POST["signUp"]);

			// Handling Sign Ups
			if ($postSignUp) {

				$username = mysqli_real_escape_string($link, $_POST["userSignUp"]);
				$password = mysqli_real_escape_string($link, $_POST["passwordSignUp"]);
				$confirmPassword = mysqli_real_escape_string($link, $_POST["confirmPassword"]);

				$userSignUpError = checkForUserError($username);
				$passwordSignUpError = checkForPasswordError($password, $confirmPassword);

				// If no errors found, continue
				if (empty($userSignUpError) && empty($passwordSignUpError)) {
					$queryForUsername = "SELECT * FROM `userdatabase` WHERE `username` = '$username'";

					$result = mysqli_query($link, $queryForUsername);

					$row = mysqli_fetch_array($result);

					// If no user found, continue
					if (empty($row)) {
						
						$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

						// If password is properly hashed, store info
						if (password_verify($password, $hashedPassword)) {
							$insertUserQuery = "INSERT INTO `userdatabase` (username, password) VALUES ('$username','$hashedPassword')";

							$insertLikeQuery = "INSERT INTO `userlikes` (username, simon, tictac, calculator, pacecalc, twitch, pomodoro, weather, wiki, quote, todo, football, githubAPI) VALUES ('$username', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";

							mysqli_query($link, $insertUserQuery);
							mysqli_query($link, $insertLikeQuery);

							$_SESSION["userID"] = $username;

							header("Location: routes/home.php");
						};
					// Else throw error
					} else {
						$message = "That user already exists!";
						$userSignUpError .= errorConstructor($message);

					}
				}
			// Handling Logins
			} else {
				$username = mysqli_real_escape_string($link, $_POST["userLogin"]);
				$password = mysqli_real_escape_string($link, $_POST["passwordLogin"]);
				
				$userLoginError = checkForUserError($username);

				// Do not need to check for confirm password, so password is passed twice
				$passwordLoginError = checkForPasswordError($password, $password);

				// If no errors found, continue
				if (empty($userLoginError) && empty($passwordLoginError)) {
					$queryForUsername = "SELECT `id` FROM `userdatabase` WHERE `username` ='$username'";
					$result = mysqli_query($link, $queryForUsername);
					$row = mysqli_fetch_array($result);

					// If user not found, throw error
					if (empty($row)) {
						$message = "User does not exist!";
						$userLoginError .= errorConstructor($message);
					// If user is found, find ID and matching password
					} else {
						
						$userID = $row['id'];
						$queryForPassword = "SELECT `password` FROM `userdatabase` WHERE `id` = '$userID'";
						$result = mysqli_query($link, $queryForPassword);
						$row = mysqli_fetch_array($result);

						$userHash = $row['password'];

						// Verify input password with hashed password from db
						if (password_verify($password, $userHash)) {

							$_SESSION["userID"] = $username;
							header("Location: routes/home.php");
						
						// If incorrect password, throw error
						} else {
							$message = "Incorrect password!";
							$passwordLoginError = errorConstructor($message);
						}
					}

				} 
			}
		}
	// If user has already logged in, redirect back to home page
	} else {
		header("Location: routes/home.php");
	}
	
function checkForUserError($username) {
	
	$error = "";
	$message = "";

	if (empty($username)) {
		$message .= "Username cannot be blank!";
		$error = errorConstructor($message);
		return $error;
	}

	return $error;
}

function checkForPasswordError($password, $confirmpassword) {
	
	$error = "";
	$message = "";

	if (empty($password)) {
		$message .= "Password cannot be blank!";
		$error = errorConstructor($message);
		return $error;
	} else if (strcmp($password, $confirmpassword) !== 0) {
		$message .= "Passwords do not match!";
		$error = errorConstructor($message);
		return $error;
	}

	return $error;

}

function errorConstructor($errorMessage) {
	
	return "<div class='ui basic red pointing prompt label transition visible'>" . $errorMessage . "</div>";
}

?>