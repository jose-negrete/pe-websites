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
				"username" => "kenny",
				"password" => "login"
			];

			if ( isset($_POST["submitted"]) ) {

				$secretUsername = $userInfo["username"];
				$secretPassword = $userInfo["password"];

				$submittedUsername = $_POST["username"];
				$submittedPassword = $_POST["password"];

				$display = "";

				if ( $secretUsername !== $submittedUsername || $secretPassword !== $submittedPassword ) { ?>

					<h1>Wrong username and/or password</h1>
					<h2>Hint: Hit song from Top Gun</h2>

				<?php }

				if ( $secretUsername === $submittedUsername && $secretPassword === $submittedPassword ) { ?>

					<?php $display = "none"; ?>

					<header>
						<h1>Welcome to the danger zone.</h1>
						<a href="./">Log out</a>
					</header>	

					<picture>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/kUsFWO08CO0?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</picture>

				<?php } 
			} else { ?>

				<h1>Please enter username and password...</h1>

			<?php }
		?>

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