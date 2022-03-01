<?php 
	$footer = $data['footer'];
	$footerLinks = $footer['links'];
	$footerText = $footer['text'];
	$randomBlog = $footer['blogLinks'];
	$randomBlog = $randomBlog[rand(0, count($randomBlog))];
?>
<footer>
	<div class="inner-column">
		<div class="footer-content">
			
			<div class="text-content">
				<?php 

					$footerHeading = "";
					$footerParagraph = "";

					if ( isset($_GET['page']) ){

						foreach($footerText as $text){
							$id = $text['id'];

							if ( $id === $_GET['page'] ){
								$footerHeading = $text['heading'];
								$footerParagraph = $text['paragraph'];

								echo "<h1>$footerHeading</h1>";
								echo "<p>$footerParagraph</p>";
							}
						}
					} else {

						$footerHeading = $footerText[0]['heading'];
						$footerParagraph = $footerText[0]['paragraph'];

						echo "<h1>$footerHeading</h1>";
						echo "<p>$footerParagraph</p>";
					}
				?>
			</div>
			<?php 
				if (isset($_GET['page']) && $_GET['page'] === 'case-study') {

					echo "
					<div class='more-crap'>";

					if ($_GET['id'] === 'igw'){
						$crapLink = "?page=case-study&id=alpha";
					} else {
						$crapLink = "?page=case-study&id=igw";
					}

					echo "
						<a href='$crapLink'>Read Another Case&nbsp;Study</a>
						<a href='$randomBlog' target='_blank'>Read a Random Blog&nbsp;Post</a>
					</div>";
					
				}
					
			?>
			<ul class="footer-links">
				<?php 
					foreach($footerLinks as $links){
						$title = $links['title'];
						$link = $links['link'];

						echo "<a href='$link'>$title</a>";
					}
				?>
			</ul>
			<h4>Made by Jose. Powered by the dollar menu.</h4>
		</div>
	</div>
</footer>