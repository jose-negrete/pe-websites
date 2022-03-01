<?php
	$themeClass = '';

	// Did they choose a theme?
	if ( isset($_POST['theme-toggled']) ){
		
	// if yes... set the other theme
		if ( $_POST['theme-toggled'] === 'dark' ){
			echo 'light';
		} else {
			echo 'dark';
		}
		
	// save it to the cookie
		setcookie('jose', 'flooby');

	
	// run the rest of the page


	} else {


	// see if they have previously set the theme

	}


	// if (!empty($_COOKIE['theme'])) {
	//   	if ($_COOKIE['theme'] == 'dark') {
	//    	$themeClass = 'dark-theme';
	//   	} else if ($_COOKIE['theme'] == 'light') {
	//     	$themeClass = 'light-theme';
	//   	}  
	// }
?>

<!DOCTYPE html>
<html lang="en">
<!-- etc. -->
<body class="<?php echo $themeClass; ?>">
<!-- etc. -->

<form method='POST'>
	<button type='submit' name='theme-toggled' value='dark'>Submit</button>
</form>

<!-- <script>
  const btn = document.querySelector(".btn-toggle");
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
  
  btn.addEventListener("click", function() {
    if (prefersDarkScheme.matches) {
      document.body.classList.toggle("light-mode");
      var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
    } else {
      document.body.classList.toggle("dark-mode");
      var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
    }
    document.cookie = "theme=" + theme;
  });
</script> -->
</body>
</html>