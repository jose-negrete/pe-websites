<section class="projects">
	<h4>PROJECTS–</h4>
	<div class="project-card">
		<?php 

			$projectsCrap = file_get_contents('projects-crap.json');
			$projectsJunk = json_decode($projectsCrap, true);

			foreach ($projectsJunk as $junk) {
				$title = $junk['title'];
				$blurb = $junk['blurb'];
				$site = $junk['site'];
				$caseStudy = $junk['caseStudy'];

				echo '
					<div class="projects-card">
						<h1>' . $title . '</h1>
						<p>' . $blurb . '</p>
						<div class="project-links">
							<a href=' . $site . '>SITE</a>
							<a href=' . $caseStudy . '>CASE STUDY</a>
						</div>
					</div>';

			}
		?>
	</div>
</section>