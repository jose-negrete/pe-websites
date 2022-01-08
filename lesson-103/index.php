<!DOCTYPE html>
<html lang="en">
	<?php include "head.php";?>
<body>

	<?php 
		include "variables.php"; // objects and variables
		include "header.php";
	?>

	<main class="page-content">
		<section>
			<?php 
				include "main-container.php";
				include "left-cog.php"; //background-image
				include "cloud.php"; //background-image
			?>
		</section>

		<section>
			<?php 
				include "module-container.php";
				include "cog.php"; //background-image
			;?>	
		</section>
	</main>

	<footer>
		<?php include "footer-container.php";?>	
	</footer>
</body>
</html>