<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The sketchiest dude on the web">
	<meta property="og:image" content="[[]]">
	<title>J. Negrete - Developer / Designer</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<?php include('database.php');?>

	<header class="site-header">
		<div class="inner-column">
			<nav class="site-menu">
				<a href="./">JN</a>
				<a href="../igw" target="_blank">Live Site</a>
				<a href="#contact">Contact</a>
				<a href="https://github.com/jose-negrete/pe-websites/tree/master/igw" target="_blank">GitHub</a>
			</nav>
		</div>
	</header>

	<article>
		<header>
			<div class="inner-column">
				<h1><span>Case Study:</span> <span>Intergalactic Plant World</span></h1>
			</div>
		</header>
		<section>
			<div class="inner-column">
				<div class="goals content">
					<h2>Goals</h2>

					<ul>
						<li>Appeal to the general public without alienating their niche market (hippies).</li>
						<li>To let the public know they’re open for direct sales to customers as well as sales to other shops.</li>
						<li>To send the message that this a friendly place to hang out and soak in the vibes.</li>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class="research content">

					<h2>Research</h2>

					<p>I studied the sites of their competitors so I could find themes and make unique design choices. I quickly found that this shop wasn't at all like the others — but what they do have is an eccentric story and business model. One that doesn't really mesh well with your classic e-commerce site. Since they didn’t plan on doing any online sales and didn’t even have a product list I figured, why not just tell a story and use extremely effective images. This got us on the right track to accomplishing our goals.</p>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class ="design content">
					<h2>Design</h2>

					<p>For the logo I wanted to create something that was a nod to hippie culture without being explicit. I came across this cool skull drawing on etsy that matched perfectly. Even had succulents sticking out of it. Doesn't even have to say the company name. This will be something that locals would use as a bumper sticker.</p>

					<p>To find a font for the header I took a screen shot of each google font I found interesting and would place it next to the skull to see what fit best. Megrim was the obvious winner because it had a futuristic look (which looks great for words like intergalactic and world) and the A's and W's had large open counters and apertures that reminded me of those diamond-shaped planters that are popular for housing succulents.</p>
				</div>
			</div>
		</section>

		<section>
			<div class="inner-column">
				<div class="code content">
					<h2>Code</h2>
					<p>For the header I used a cool css property called filter to invert the colors. Also added a shadow to the to the text. When you hover over the links in the navigation it shows a bunch of red dotted lines. This is the border-property. I had to make so the border changes from zero to full opacity when you hover so that it doesn’t push the rest of the content every time it appears. To keep the design cohesive, I also used red dots to break up the sections.</p>

					<p>Since this is a fairly simple page I only needed to design for 2 different screen sizes. I made it so on small screen sizes the images connect but when you expand the page it disconnects them and gives the image rounded corners adds a subtle shadow.</p>
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