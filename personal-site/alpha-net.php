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
	<?php include('database.php');?>

	<header class="site-header">
		<div class="inner-column">
			<nav class="site-menu">
				<a href="./">JN</a>
				<a href="../php/lesson-99" target="_blank">Live Site</a>
				<a href="#contact">Contact</a>
				<a href="https://github.com/jose-negrete/pe-websites/tree/master/php/lesson-99" target="_blank">GitHub</a>
			</nav>
		</div>
	</header>

	<article>
		<header>
			<div class="inner-column">
				<h1><span>Case Study:</span> <span>The Alpha-Net</span></h1>
			</div>
		</header>
		<section>
			<div class="inner-column">
				<div class="goals content">
					<h2>Goals</h2>

					<ul>
						<li>Implement basic design principles I’ve recently learned. </li>
						<li>Dynamically share and store data for each student with PHP.</li>
						<li>Make this site interesting to an outsider.</li>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class="research content">

					<h2>Research</h2>

					<p>So there’s this thing called the AlphaNet. This is a student directory. It’s pretty basic. Just some cards with their name, maybe an image, and some info.For the version on the main site we styled all our cards individually.</p>

					<p>For school I had to create my own version of the AlphaNet where I  implement things I’ve learned so far in the course like generating HTML with PHP, having a cohesive design, and a bunch of other stuff.</p>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class ="design content">
					<h2>Design</h2>

					<p>I decided to keep it simple with 2 colors. I wanted something that would get a passing grade on the contrast checker without being super boring and bland.</p>

					<p>I think my favorite css property is mix-blend-mode. I used the lighten property on all the images. Just connects the images to the content. When an image is untreated it looks kind of out of place to me. Allows you to use more colors and get a little weirder. Also lots of happy mistakes since I don’t know all the property yet. The images with the lightened blend-mode gave it this 70s yearbook sort of vibe that I liked.</p>

					<p>Since I was going for that retro vibe, I decided to use a display font for the headers. I thought shrikhand blended in well with the style that’s already somewhat established. Kept the rest basic. Roboto for the blurb and monospace for the links.</p>

					<p>Another thing to consider was that no one outside of PE has any clue what the AlphaNet is. We need some information at the top of the page. Threw together some quick copy and problem solved.</p>

					<p>The card content being in a column created some problems. I decided to make it responsive so that the column layout remains on the small screen sizes, then changes to a row at a larger viewport sizes. Looks a bit nicer.</p>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class="code content">
					<h2>Code</h2>
					<p>I decided to stored all the student information as objects in a JSON file. Should be easy to read and understand the key/value pairs. Imported that data from the JSON and used a shuffle function so that the order in which the objects are read are randomized on reload.</p>

					<p>To make life a little easier and php a little less uglier, I saved all the values from the objects to their own variables.</p>

					<p>I used a foreach loop to generate the html for all the cards. Just have to place the variables in the right spot and it’ll dynamically create all the cards without having to code every single one. If I just added another object to the JSON file and it’ll generate like the others. EZ-PZ.</p>

					<p>In case a student failed to add a description or text content for their button, I created an if statement that would generate default strings. Also If the description is super long, it can make the other cards look weird when they’re in a row. I needed to set a character limit for the description so I created an if statement with some library functions. Used strlen() function checks the string length (duh). Also used substr() function which takes in a string as an argument and an index number to signify where you want the display of characters to start and end.</p>

					<p>I wanted to see if I could generate an id with an if statement inside a foreach loop for Derek. Ran into some issues with the variables not working. Lots of trial and error. Eventually got it in a working state. Now when you click Derek’s link in the intro paragraph at the top of the page it will scroll down to his card. I’m a freaking wizard.</p>
				</div>
			</div>
		</section>

		<?php include('contact.php');?>

	</article>
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