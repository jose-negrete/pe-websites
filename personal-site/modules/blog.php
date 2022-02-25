<?php 
	$blogHeading = $data['blog']['heading'];
	$blogBody = $data['blog']['body'];
?>

<section class="blog">
	<div class="inner-column">
		<div class="blog-content">
			<div class="intro-container">
				<div class="text-container">
					<div class="text-content">
						<h1><?=$blogHeading?></h1>
						<p><?=$blogBody?></p>
					</div>
				</div>
			</div>
			<div class="blog-container">
				<h2 class="title">Blog</h2>
				
				<?php 
					echo "<ul>";

					foreach($data['blog']['list'] as $list) {
						$heading = $list['heading'];
						$body = $list['body'];
						$link = $list['link'];

						echo "
						<li>
							<h2>$heading</h2>
							<p>$body</p>
							<div class='links'>
								<a href='$link'>Read More</a>
							</div>
						</li>";
					}

					echo "</ul>";
				?>

			</div>
		</div>
	</div>
</section>