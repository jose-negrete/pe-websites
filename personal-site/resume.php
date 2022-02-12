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
				<a href="./">JN</a>
				<a href="#experience">Experience</a>
				<a href="#contact">Contact</a>
				<a href="https://fishouttawater.substack.com/archive?utm_source=menu-dropdown" target="_blank">Blog</a>
			</nav>
		</div>
	</header>

	<article class='resume'>
		
		<section id=experience>
			<div class="inner-column">
				<header>
					<h1>Experience</h1>
				</header>

		<?php 
			include('database.php');

			$jobs = $resume['jobs'];

			foreach($jobs as $job) {

				$companyName = $job['heading']['companyName'];
				$jobTitle = $job['heading']['jobTitle'];
				$years = $job['heading']['yearsEmployed'];
				$description = $job['description']; ?>

				<div class="job">
					<div class="header-content">
						<h2><?=$companyName?></h2>
						<h3><?=$jobTitle?></h3>
						<h4><?=$years?></h4>
					</div>

					<div class="description-content">
						<p><?=$description?></p>
					</div>
				</div>

		<?php } ?>

			</div>
		</section>

		<?php include('contact.php');?>
		
	</article>




