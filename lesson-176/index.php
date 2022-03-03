<?php

	// if ['color-scheme'] exists in the $_COOKIE array then CSCV equals its value, if not then the CSCV equals an empty string.
	$colorSchemeCookieValue = $_COOKIE["color-scheme"] ? $_COOKIE["color-scheme"] : "";

	// If CSCV isn't empty, CS equals CSCV.
	if ( !empty($colorSchemeCookieValue) ) {
		$colorScheme = $colorSchemeCookieValue;
	}

	// If ['toggle'] exists in the superglobal array $toggle equals its value. 
	$toggled = isset($_POST['toggle']);

	// If $toggle is true
	if ($toggled) {

		// If CS equals 'dark', then CS equals 'light', else CS equals 'dark'.
		$colorScheme = ($colorScheme == 'dark') ? 'light' : 'dark';
		setCookie('color-scheme', $colorScheme);
	}
?>

<html class='<?=$colorScheme?>'>
	<head>
		<link rel='stylesheet' href='css/style.css'>
	</head>

	<body>
		<h1><span></span></h1>

		<form method='POST'>
			<button name='toggle'>◐</button>
		</form>
	</body>
</html>