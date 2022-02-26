<?php 
	$aboutHeading = $data['about']['heading'];
	$aboutBody = $data['about']['body'];
?>
<section class="about">
	<div class="inner-column">
		<div class="about-content">
			<div class="intro-container">
				<div class="text-container">
					<div class="text-content">
						<h1><?=$aboutHeading?></h1>
						<p><?=$aboutBody?></p>
					</div>
				</div>
			</div>
	
			<picture class="big-name">
				<!-- Remove includes and add the SVG using the <img> tag instead dimwit. -->
				<?php include('images/big-name.svg') ;?>
			</picture>
	
			<picture class="cat-image">
				<img src="images/cat.jpg">
			</picture>
			<picture class="psychic-image">
				<img src="images/psychic.jpg">
			</picture>	
		</div>					
	</div>
</section>