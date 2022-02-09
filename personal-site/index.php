<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The sketchiest dude on the web">
	<meta property="og:image" content="[[]]">
	<title>J. Negrete - Developer / Designer</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class="site-header">
		<div class="inner-column">
			<nav class="site-menu">
				<a href="#about">JN</a>
				<a href="#projects">Projects</a>
				<a href="#contact">Contact</a>
				<a href="#blog">Blog</a>
			</nav>
		</div>
	</header>

	<main>
		<section id="about">
			<div class="inner-column">
				<div class="about-content">
					<p>Jose Negrete is a web developer and UX designer who helps small businesses and non-profits with bringing their ideas to the next level by using the most dangerous tool known to modern man (the web). Unlike my competitors, I have an adaptive skill set that is valuable at every stage of the&nbsp;design&nbsp;process.</p>
				</div>
			</div>
		</section>

		<section id="projects">
			<div class="inner-column">
				<header>
						<h1>Projects</h1>
				</header>

				<div class="projects-body">
					<?php
						include("database.php");
						include("cardGenerator.php");

						foreach ($projectsContent as $data) {
							generateCard($data);
						}
					?>
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="inner-column">
				<header>
					<h1>Blog</h1>
				</header>

				<div class ="blog-body">
					<?php

						// go through each key/value pair in the object...
						foreach ($blogContent as $data) {

							// ...and apply this function
							generateCard($data);
						}
					?>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="inner-column">
				<header>
						<h1>Contact</h1>
				</header>

				<address>
					<div class="email">
						<h2>Email:</h2>
						<a href="mailto:jnegrete.nyc@gmail.com">jnegrete.nyc@gmail.com</a>
					</div>

					<div class="phone">
						<h2>Phone:</h2>
						<a href="#">(555)555-5555</a>
					</div>
				</address>
			</div>
		</section>
	</main>
	<footer>
		<div class="inner-column">
			<div class="footer-content">
				<a href="https://codepen.io/j-negrete" target="_blank">CodePen</a>
				<a href="https://github.com/jose-negrete" target="_blank">GitHub</a>
				<a href="https://fishouttawater.substack.com/" target="_blank">Substack</a>
				<a href="https://www.reddit.com/user/purpleplatypusparty" target="_blank">Reddit</a>
				<a href="https://dev.to/jnegrete" target="_blank">dev.to</a>
				<a href="https://community.codenewbie.org/jnegrete" target="_blank">CodeNewbie</a>
			</div>
		</div>
	</footer>
</body>

</html>