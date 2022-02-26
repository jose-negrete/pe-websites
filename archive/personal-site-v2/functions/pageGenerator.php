<?php
	include("database.php");

	function generatePage ($project) {

		$liveSite = $project["header"]["liveSite"];
		$gitHub = $project["header"]["gitHub"];
	?>

	<header class="site-header">
		<div class="inner-column">
			<nav class="site-menu">
				<a href="./">JN</a>
				<a href="<?=$liveSite?>" target="_blank">Live Site</a>
				<a href="#contact">Contact</a>
				<a href="<?=$gitHub?>" target="_blank">GitHub</a>
			</nav>
		</div>
	</header>

	<?php

			$title = $project["title"];
			$goals = $project["goals"];
			$sections = $project["sections"];	
	?>
	<article>
		<header>
			<div class='inner-column'>
				<h1>Case Study: <span><?=$title?></span></h1>
			</div>
		</header>

		<section class="goals">
			<div class="inner-column">
				<header>
					<h1><?=$goals["heading"]?></h1>
				</header>
				<div class="content-body">
					<ul>
						<?php
							foreach ($goals["list"] as $goal) {
								?><li><?=$goal?></li><?php
							}
						?>
					</ul>
				</div>
			</div>
		</section>

	<?php 
		foreach ($project['sections'] as $section) {
	?>
		<section>
			<header>
				<div class="inner-column">
					<h2><?=$section['heading']?></h2>
				</div>
			</header>
			<div class="content-body">
				<div class="inner-column">

			<?php
			foreach ($section["content"] as $content) {?>
			<p><?=$content?></p>
			<?php } ?>
			</div>
			</div>
		</section>
		<?php
		}
		include('contact.php');
		?>

	</article>
	<?php }

	generatePage($igw);
?>