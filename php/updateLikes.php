<?php

	if (isset($_POST) && !empty($_POST)) {
		
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$db = "mydatabase";
		$updateLikesQuery = "";
		$updateStatusQuery = "";

		$link = mysqli_connect($servername, $username, $password, $db);

		if(mysqli_connect_error()) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$name = $_POST["name"];
		$isLiked = $_POST["isLiked"];
		$user = $_POST["user"];

		echo $name;

		// Convert from string to boolean
		$isLiked === "true" ? $isLiked = true : $isLiked = false;

		if ($isLiked) {
			$updateLikesQuery = "UPDATE `projectlikes` SET likes = likes - 1 WHERE `projectname` = '$name' LIMIT 1";
			
			$updateStatusQuery = "UPDATE `userlikes` SET $name = 0 WHERE `username` = '$user' LIMIT 1";
		} else {
			$updateLikesQuery = "UPDATE `projectlikes` SET likes = likes + 1 WHERE `projectname` = '$name' LIMIT 1";

			$updateStatusQuery = "UPDATE `userlikes` SET $name = 1 WHERE `username` = '$user' LIMIT 1";
		}
		
		mysqli_query($link, $updateLikesQuery);
		mysqli_query($link, $updateStatusQuery);
	}

?>