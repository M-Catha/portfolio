<!DOCTYPE html>
	<?php session_start(); ?>
	 <html>
	 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	 	<title>Portfolio Page</title>
	 	<head>
	 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	 		<link href="https://fonts.googleapis.com/css?family=Pacifico|Comfortaa" rel="stylesheet">
	 		<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
			<link rel="stylesheet" type="text/css" href="../css/home/stylesheet.css">
			<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
			<?php 
				include "../php/loginData.php";
				include "../php/mail.php";
				include "../php/loadLikes.php"
			?>
		</head>
		<body id="body">
			<!-- Hidden Menu -->
			<div id="hiddenNav" class="ui vertical inverted sidebar labeled icon menu">
	  			<span href="#about" class="item about">
	  				<i class="info icon"></i>
	  				About Me
	  			</span>
	  			<span href="#portfolio" class="item portfolio">
	  				<i class="book icon"></i>
	  				Portfolio</span>
	  			<span href="#contact" class="item contact">
	  				<i class="mobile icon"></i>
	  				Contact
	  			</span>
			</div>
			<!-- Start of pushed content -->
			<div class="pusher">
				<div class="column masthead centered segment">
					<div class="ui container">
						<nav id="navbar" class="ui large fixed borderless inverted menu">
							<span class="item myPortfolio"><i class="photo large icon"></i> My Portfolio</span>
							<span class="toc item">
								<i class="sidebar large icon"></i>
							</span>
							<span href="#about" class="item about">
								About Me
							</span>
							<span href="#portfolio" class="item portfolio">
								Portfolio
							</span>
							<span href="#contact" class="item contact">
								Contact
							</span>
							<div class="right menu">
								<?= $displayString; ?>
							</div>
						</nav>
					</div>
					<div class="displayDiv">
						<p class="displayText">Matt Catha</p>
						<hr />
						<p class="displayText">Aspiring Web Devloper</p>
					</div>
				</div>
				<div id="main" class="ui centered grid container">
					<div class="column">

					<!-- ABOUT ME SECTION -->
						<h1 class="ui white inverted top attached header">
							<i class="talk outline icon"></i>
							<div id="about" class="content segmentTitle">
								About Me
							</div>
						</h1>
						<div class="ui attached segment">
							<img class="ui medium circular left floated image" src="../assets/images/avatars/image.jpg" />
							<p class="mainText">I'm a former mechanical engineer looking for a career change into full stack web development. I'm looking to leverage skills acquigreen from previous work experience as a reliability engineer (problem analysis and solution, working in a team-centered environment, focusing on details of work scope) into an entry level position.  

							Every thing I've learned about web development has been completely self-taught.  I have a passion for learning all things related to web development and look forward to working in the field one day.  Here's a breakdown of the skills I've learned thus far:</p>
							<div class="ui centered grid">
								<div class="row">
									<div class="ui raised segment">
										<div class="column">
											<h3 class="ui block inverted header">
												Used Extensively
											</h3>
											<i class="devicon-html5-plain-wordmark colored"></i>
											<i class="devicon-css3-plain-wordmark colored"></i>
											<i class="devicon-javascript-plain colored"></i>
											<i class="devicon-jquery-plain-wordmark colored"></i>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="ui raised segment">
										<div class="centered column">
											<h3 class="ui block inverted header">
												Working Knowledge
											</h3>
											<i class="devicon-php-plain colored"></i>
											<i class="devicon-mysql-plain-wordmark colored"></i>
											<i class="devicon-c-plain-wordmark colored"></i>
											<i class="devicon-java-plain-wordmark colored"></i>
											<i class="devicon-git-plain-wordmark colored"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- PORTFOLIO SECTION -->
						<h1 class="ui white inverted top attached header">
							<i class="folder open outline icon"></i>
							<div id="portfolio" class="content segmentTitle">
								Portfolio
							</div>
						</h1>
						<div class="ui attached segment">
							<div class="ui three column center aligned stackable grid">
								<div class="middle aligned row">
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/simon.png" />
											<div class="overlay">
												<h2>Simon Game</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/simonGame/"><button class="ui large green button">Live Demo</button></a>
												<a class="info"target="_blank" href="https://github.com/M-Catha/simonGame"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="simonPop" class="popUp">
											<div id="simon" class="ui labeled button likeButton">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="simon"><?= findLikes("simon") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/tictac.png" />
											<div class="overlay">
												<h2>Tic-Tac-Toe</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/ticTacToe/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/calculator"><button class="ui large red button ">Github Repo</button></a>
											</div>
										</div>
										<div id="tttPop" class="popUp">
											<div id="tictac" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="tictac"><?= findLikes("tictac") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/calc.png" />
											<div class="overlay">
												<h2>Calculator</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/calculator/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/ticTacToe"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="calcPop" class="popUp">
											<div id="calculator" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="calculator"><?= findLikes("calculator") ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="center aligned middle aligned row">
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/pacecalc.png" />
											<div class="overlay">
												<h2>Pace Calculator</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/paceCalculator/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/paceCalculator"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="paceCalcPop" class="popUp">
											<div id="pacecalc" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="pacecalc"><?= findLikes("pacecalc") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/twitch.png" />
											<div class="overlay">
												<h2>Twitch TV App</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/twitchTV/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/twitchTV"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="twitchPop" class="popUp">
											<div id="twitch" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="twitch"><?= findLikes("twitch") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/pomodoro.png" />
											<div class="overlay">
												<h2>Pomodoro Timer</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/pomodoroTimer/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/pomodoroTimer"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="pomoPop" class="popUp">
											<div id="pomodoro" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="pomodoro"><?= findLikes("pomodoro") ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="middle aligned row">
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/weather.png" />
											<div class="overlay">
												<h2>Weather App</h2>
												<a class="info" target="_blank" href="http://codepen.io/MCatha/full/PbePWN/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/weatherApp"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="weatherPop" class="popUp">
											<div id="weather" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="weather"><?= findLikes("weather") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/wiki.png" />
											<div class="overlay">
												<h2>Wiki Viewer</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/wikiViewer/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/wikiViewer"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="wikiPop" class="popUp">
											<div id="wiki" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="wiki"><?= findLikes("wiki") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/quote.png" />
											<div class="overlay">
												<h2>Quote Generator</h2>
												<a class="info" target="_blank" href="http://codepen.io/MCatha/full/GNMMWr/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/quoteGenerator"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="quotePop" class="popUp">
											<div id="quote" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="quote"><?= findLikes("quote") ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="middle aligned row">
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/todo.png" />
											<div class="overlay">
												<h2>To-Do List</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/toDoList/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/toDoList"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="toDoPop" class="popUp">
											<div id="todo" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="todo"><?= findLikes("todo") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/football.png" />
											<div class="overlay">
												<h2>Football Schedule Creator</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/FantasyFootball_API/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/FantasyFootball_API"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="footballPop" class="popUp">
											<div id="football" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="football"><?= findLikes("football") ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="column">
										<div class="hovereffect">
											<img class="ui large image rounded" src="../assets/images/projects/github.png" />
											<div class="overlay">
												<h2>Github API</h2>
												<a class="info" target="_blank" href="https://m-catha.github.io/Github_API/"><button class="ui large green button">Live Demo</button></a>
												<a class="info" target="_blank" href="https://github.com/M-Catha/Github_API"><button class="ui large red button">Github Repo</button></a>
											</div>
										</div>
										<div id="githubPop" class="popUp">
											<div id="githubAPI" class="ui labeled button likeButton" tabindex="0">
												<div class="ui blue button top pointing label">
													<i class="thumbs up icon"></i> <span class="status">Like</span>
												</div>
												<div class="ui basic blue label">
													<span class="githubAPI"><?= findLikes("githubAPI") ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- CONTACT SECTION -->
						<h1 class="ui white inverted top attached header">
							<i class="mail outline icon"></i>
							<div id="contact" class="content segmentTitle">
								Contact Me
							</div>
						</h1>
						<div class="ui attached segment">
							<form id="emailForm" class="ui form" action="home.php#contact" method="POST">
								<?= $successMessage . $sendError ?>
								<div class="field email">

									<div class="ui teal ribbon label">
										Email:
									</div>
									<input type="email" name="email" placeholder="JohnDoe@example.com" requigreen>
									<?= $emailError ?>
								</div>
								<div class="field subject">
									<div class="ui teal ribbon label">
										Subject (Optional):
									</div>
									<input type="text" name="subject">
								</div>
								<div class="field body">
									<div class="ui teal ribbon label">
										Body:
									</div>
		    						<textarea name="emailBody"></textarea>
		    						<?= $bodyError ?>
		  						</div>
								<button id="formSubmit" class="ui large green button commentButton" type="submit" requigreen><i class="send icon"></i>Submit</button>
							</form>
						</div>
					</div>
				</div>

				<!-- FOOTER SECTION -->
				<div id="footer" class="ui footer segment">
					<div class="ui center aligned container">
						<div class="ui stackable grid">
							<div class="four column row">
								<div class="column">
									<a href="https://www.facebook.com/MattCatha" target="_blank"><button id="facebook" class="ui labeled icon large button">
		  							<i class="facebook f icon"></i>
		  							Facebook
									</button></a>
								</div>
								<div class="column">
									<a href="https://www.linkedin.com/in/matt-catha-1b62133b/" target="_blank"><button id="linkedin" class="ui labeled icon large button">
		  							<i class="linkedin icon"></i>
		  							LinkedIn
									</button></a>
								</div>
								<div class="column">
									<a href="https://github.com/M-Catha" target="_blank"><button id="github" class="ui labeled icon large button">
		  							<i class="github icon"></i>
		  							Github
									</button></a>
								</div>
								<div class="column">
									<a href="https://www.freecodecamp.com/m-catha" target="_blank"><button id="freecodecamp" class="ui labeled icon large button">
		  							<i class="fire icon"></i>
		  							FreeCodeCamp
									</button></a>
								</div>
							</div>
							<div class="row">
								<div class="column copyright">
									<span class="text">&copy;2017 Matt Catha</span> || <span class="text"><i class="map outline icon"></i> Shreveport, LA</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<script src="../js/home/script.js"></script>
		<script type="text/javascript">
			var hasEmailError = "<?php echo $emailError; ?>";
			var hasBodyError = "<?php echo $bodyError; ?>";
			var signedIn = ("<?php echo $signedIn; ?>") === "true";

			if (hasEmailError) {
				$(".email").addClass("error");
			} else if (hasBodyError) {
				$(".body").addClass("error");
			}

			if(!signedIn) {
				$(".likeButton").addClass("disabled");

				$("#simonPop, #tttPop, #calcPop, #paceCalcPop, #twitchPop, #pomoPop, #weatherPop, #wikiPop, #quotePop, #toDoPop, #footballPop, #githubPop").each(function() {
					var element = $(this);
					var target = "#" + element[0].id;

					element.popup({
						position: "top center",
						target: target,
						transition: "vertical flip",
						content: "You must be signed in to like this!",
						variation: "inverted"
					});
				})
			} else {
				var objLikes = JSON.parse('<?= $indivLikes_to_json; ?>')[0];
			
				for (var property in objLikes) {
					
					if (objLikes.hasOwnProperty(property) && 
						property !== "id" && 
						property !== "username") {
						changeClass(property);
					}
				}

				function changeClass(name) {
					
					var likeSelector = "#" + name + " .status";
					var selector = "#" + name + " div";

					if (objLikes[name] === "1") {
						$(selector).removeClass("blue").addClass("green");
	  					$(likeSelector).text("Liked");
					} else {
						$(selector).removeClass("green").addClass("blue");
	  					$(likeSelector).text("Like");
					}
				}
			}

		</script>
		</body>
	</html>