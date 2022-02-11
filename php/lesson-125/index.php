<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 125</title>
</head>
<body>
	<?php
		$thursday = [
			human => "Jose",
			blockers => ["I want to die", "My wife left me and took the kids"],
			coffeeCount => 2
		];

		$nounFix = '';
		$blockers = "<p>No blockers today.</p>";

		if ($thursday["coffeeCount"] > 1) {
			$nounFix = "s";
		}


		echo "<p>" . $thursday['human'] . " has had " . $thursday ['coffeeCount'] . " coffee$nounFix. </p>";

		if ($thursday["blockers"]!== null) {
			$blockers = "Todays blockers: <ul>";

			echo "<p>$blockers</p>";

			echo "<ul>";

			foreach ($thursday["blockers"] as $blocker) {
				echo "<li>$blocker</li>";
			}

			echo "</ul>";
		} else {
			echo $blockers;
		}
	?>
</body>
</html>