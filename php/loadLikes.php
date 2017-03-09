<?php

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$db = "mydatabase";
	$userID = "";

	$link = mysqli_connect($servername, $username, $password, $db);

	if(mysqli_connect_error()) {
		die("Connection failed: " . mysqli_connect_error());
	}


	// Pull likes for all projects
	$queryForTotalLikes = "SELECT * FROM `projectlikes`";

	$result = mysqli_query($link, $queryForTotalLikes);
	
	$projects = $result->fetch_all(MYSQLI_ASSOC);

	function findLikes($projectName) {
		global $projects;
		$arrLen = count($projects);

		for ($i = 0; $i < $arrLen; $i++) {
			if ($projects[$i]["projectname"] === $projectName) {
				return $projects[$i]["likes"];
			}
		}
	}

	// Query for users individual's liked projects

	if (!empty($_SESSION['userID']) && isset($_SESSION['userID'])) {
		$userID = $_SESSION['userID'];
	}
	

	$queryForIndivLikes = "SELECT * FROM `userlikes` WHERE `username` = '$userID'";

	$result = mysqli_query($link, $queryForIndivLikes);

	$indivLikes = $result->fetch_all(MYSQLI_ASSOC);

	$indivLikes_to_json = json_encode($indivLikes);

?>