<?php					

	$displayString = "";
	$signedIn = "true";

	// If a 'guest' is logged in (no userID in the session array)
	if(empty($_SESSION['userID'])) {
				
		$signedIn = "false";

		$displayString = 
			"<div class='item'>
				<a href='../index.php'>
					<div class='ui green button'>Sign In</div>
				</a>
			</div>";
	
	// Else display username and show sign out button
	} else {
		$displayString = 
			"<div class='ui dropdown item'>
				<img class='ui avatar circular image' src='../assets/images/avatars/code.png' />
					<div class='loginText'>
						<span class='username'>" . $_SESSION['userID'] . "</span>
						<i class='dropdown icon'></i>
					</div>
					<div class='menu'>
						<div class='item'>
							<a href='../php/logout.php'>
								<div class='ui blue fluid button'><i class='sign out icon'></i> Sign Out</div>
							</a>
						</div>
					</div>
			</div>";
	}
?>