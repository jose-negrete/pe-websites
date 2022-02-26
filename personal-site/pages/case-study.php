<?php 

	foreach($data['caseStudies'] as $caseStudy){

		if( $_GET['id'] === $caseStudy['id']){
			$id = $caseStudy['id'];
			$heading = $caseStudy['heading'];
			$goals = $caseStudy['goals'];
			$research = $caseStudy['research'];
			$design = $caseStudy['design'];
			$code = $caseStudy['code'];
		}
	}

	function spitHTML($content, $tag){
		echo "<h1 class='section-heading'>" . $content['heading'] . "</h1>";

		foreach($content['paragraphs'] as $paragraph){
			echo "<$tag>" . $paragraph . "</$tag>";
		}
	}

?>

<section class="title">
	<div class="inner-column">
		<div class="title-content">
			<h1><?=$heading?></h1>
		</div>
	</div>
</section>

<section class="goals">
	<div class="inner-column">
		<div class="section-content">
			<h1 class="section-heading"><?=$goals['heading']?></h1>
			<ul>
				<?php 
					for($i = 0; $i <= count($goals['paragraphs'])-1; $i++){
						$num = $i + 1;
						$paragraph = $goals['paragraphs'][$i];

						echo "
						<li>
							<h1>$num</h1>
							<p>$paragraph</p>
						</li>";
					}
				?>
			</ul>
		</div>
	</div>
</section>

<section class="research">
	<div class="inner-column">
		<div class="section-content">
			<?php spitHTML($research, 'p'); ?>
		</div>
	</div>
</section>

<section class="design">
	<div class="inner-column">
		<div class="section-content">
			<?php spitHTML($design, 'p'); ?>
		</div>
	</div>
</section>

<section class="code">
	<div class="inner-column">
		<div class="section-content">
			<?php spitHTML($code, 'p'); ?>
		</div>
	</div>
</section>












