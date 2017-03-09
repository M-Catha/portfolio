<!DOCTYPE html>
	<?php include "php/login.php"; ?>
	<html>
		<title>Login Page</title>
		<head>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
			<link href="https://fonts.googleapis.com/css?family=Shrikhand|Raleway" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/index/stylesheet.css">
		</head>
		<body>
			<div class="ui middle aligned centered grid">
				<div class="column">
					<h1 class="ui image header">
						<img class="ui circular image" src="assets/images/avatars/bigcode.png" />
						<span class="content">
							Log-In/Sign-Up!
						</span>
					</h1>
					<div class="ui top attached tabular menu">
	  					<a id="tab" class="item active" data-tab="first">
	  					<i class="sign in icon"></i>
	  					Login</a>
	  					<a id="tab" class="item signUpTab" data-tab="second">
							<i class="add user icon"></i>
	  						Sign-Up
	  					</a>
					</div>
					<div class="ui bottom attached tab segment active" data-tab="first">
	  					<div class="ui inverted segment">
	  						<form id="loginForm" method="POST" action="">
		  						<div class="ui inverted large form">
		     						 <div class="userLogin field">
		       					 		<div class="ui left icon input">
		       					 			<input id="userLogin" name="userLogin" placeholder="Username" type="text">
		       					 			<i class="user icon"></i>
		       					 		</div>
		       					 		<?= $userLoginError; ?>
		      						</div>
		     						 <div class="passwordLogin field">
		       					 		<div class="ui left icon input">
		       					 			<input id="passwordLogin" name="passwordLogin" placeholder="Password" type="password">
		       					 			<i class="lock icon"></i>
		       					 		</div>
		       					 		<?= $passwordLoginError; ?>
		     					 	</div>
		   					 		<div id="submitLogin" class="ui submit large fluid green button"><i class="send icon"></i> Login</div>
		   					 		<input type="hidden" name="login" value="login">
		  						</div>
		  					</form>
						</div>
						<div class="altSignIn">Don't have a login? <a target="_blank" class="link" href="routes/home.php">Log in as a guest!</a></div>
					</div>
					<div class="ui bottom attached tab segment" data-tab="second">
	  					<div class="ui inverted stacked segment">
	  						<form id="signUpForm" method="POST" action="">
		  						<div class="ui inverted large form">
		     						 <div class="userSignUp field">
		       					 		<div class="ui left icon input">
		       					 			<input id="userSignUp" name="userSignUp" placeholder="Username" type="text">
		       					 			<i class="user icon"></i>
		       					 		</div>
		       					 		<?= $userSignUpError; ?>
		      						</div>
		     						 <div class="passwordSignUp field">
		       					 		<div class="ui left icon input">
		       					 			<input id="passwordSignUp" name="passwordSignUp" placeholder="Password" type="password">
		       					 			<i class="lock icon"></i>
		       					 		</div>
		       					 		<?= $passwordSignUpError; ?>
		     					 	</div>
		     					 	<div class="field">
		     					 		<div class="ui left icon input">
		     					 			<input id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" type="password">
		     					 			<i class="lock icon"></i>
		     					 		</div>
		     					 	</div>
		   					 		<div id="submitSignUp" class="ui submit large fluid green button"><i class="send icon"></i> Sign Up</div>
		   					 		<input type="hidden" name="signUp" value="signUp">
		  						</div>
		  					</form>
						</div>
						<div class="altSignIn">Don't want to sign up? <a target="_blank" class="link" href="routes/home.php">Log in as a guest!</a></div>
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
		<script src="js/index/script.js"></script>
		<script type="text/javascript">
			var hasUserLoginError = "<?php echo $userLoginError; ?>";
			var hasUserPasswordError = "<?php echo $passwordLoginError; ?>";
			var hasUserSignUpError = "<?php echo $userSignUpError; ?>";
			var hasPasswordSignUpError = "<?php echo $passwordSignUpError; ?>";
			
			if (hasUserLoginError) {
				$(".userLogin").addClass("error");
			} else if (hasUserPasswordError) {
				$(".passwordLogin").addClass("error");
			} else if (hasUserSignUpError) {
				$(".userSignUp").addClass("error");
				changeActiveTab();
			} else if (hasPasswordSignUpError) {
				$(".passwordSignUp").addClass("error");
				changeActiveTab();
			}

			function changeActiveTab() {
				$(".signUpTab").trigger("click");
			}
		</script>
		</body>
	</html>