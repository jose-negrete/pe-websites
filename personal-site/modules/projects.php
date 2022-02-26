<?php 
	$projectsHeading = $data['projects']['heading'];
	$projectsBody = $data['projects']['body'];
?>

<section class="projects">
	<div class="inner-column">
		<div class="projects-content">
			<div class="intro-container">
				<div class="text-container">
					<div class="text-content">
						<h1><?=$projectsHeading?></h1>
						<p><?=$projectsBody?></p>
					</div>
				</div>
			</div>
			<div class="projects-container">
				<h2 class="title">Projects</h2>
				
				<?php 
					echo "<ul>";

					foreach($data['projects']['list'] as $list) {
						$num = $list['id'];
						$heading = $list['heading'];
						$body = $list['body'];
						$links = $list['links'];

						echo "
						<li>
							<h1>$num</h1>
							<h2>$heading</h2>
							<p>$body</p>
							<div class='links'>";

						foreach($links as $link){
							$title = $link['title'];
							$hyperLink = $link['link'];

							echo "
							<a href='$hyperLink' target='_blank'>$title</a>";
						}

						echo 	"
							</div>
						</li>";
					}

					echo "</ul>";
				?>
				<picture>
					<img src="images/bird.jpg">
				</picture>
			</div>
		</div>
	</div>
</section>