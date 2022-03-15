<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 189</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="inner-column">
		<?php 
			$userInfo = [
				[
					"username" => "kenny",
					"password" => "login"
				],
				[
					"username" => "Derek",
					"password" => "Wood"
				],
				[
					"username" => "Alex",
					"password" => "Vong"
				],
				[
					"username" => "Brian",
					"password" => "Lowerey"
				],
				[
					"username" => "Ivy",
					"password" => "Reynolds"
				],
				[
					"username" => "Shayne",
					"password" => "McGregor"
				],
				[
					"username" => "Joshua",
					"password" => "Gage"
				],
				[
					"username" => "Tara",
					"password" => "Haskamp"
				],
				[
					"username" => "Jevohn",
					"password" => "Newsome"
				]
			];

			$title = "Please Enter Your Username and Password";

			if ( isset($_POST["submitted"]) ) {

				$submittedUsername = $_POST["username"];
				$submittedPassword = $_POST["password"];

				$display = "";

				for ($i = 0; $i <= count($userInfo)-1; $i++) {

					$secretUsername = $userInfo[$i]["username"];
					$secretPassword = $userInfo[$i]["password"];
					
					if ( $secretUsername === $submittedUsername || $secretPassword === $submittedPassword ) {

						$name = $secretUsername;

						$title = "Welcome to the Danger Zone $name";

						$display = "none"; ?>
						
							<header>
								<h1><?=$title?></h1>
								<a href="./">Log out</a>
							</header>	

							<picture>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/kUsFWO08CO0?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</picture>

						<?php 
							break;
					}

					if ( $i >= count($userInfo)-1 ) {
						$title = "Wrong Username and/or Password";
					}

				}
			}
		?>

		<h1 style="display: <?=$display?>;"><?=$title?></h1>

		<form method="POST" style="display: <?=$display?>;">
			<div class="field">
				<label for="username">Username:</label>

				<input type="text" id="username" name="username" autocomplete="off" required>
			</div>

			<div class="field">
				<label for="password">Password:</label>
		
				<input type="password" id="password" name="password" required>
			</div>

			<button type="submit" name="submitted">Log in</button>
		</form>

	</div>
</body>
</html>