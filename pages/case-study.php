<?php 

	foreach($data['caseStudies'] as $caseStudy){

		if( $_GET['id'] === $caseStudy['id']){
			$id = $caseStudy['id'];
			$heading = $caseStudy['heading'];
			$goals = $caseStudy['goals'];
			$research = $caseStudy['research'];
			$design = $caseStudy['design'];
			$code = $caseStudy['code'];
			$img1 = $caseStudy['images'][0];
			$img2 = $caseStudy['images'][1];
			$img3 = $caseStudy['images'][2];
			$lightColor = $caseStudy['colors']['light'];
			$darkColor = $caseStudy['colors']['dark'];
			$liveSite = $caseStudy['liveSite'];
		}
	}

	$lightTheme = $id . '__light';
	$darkTheme = $id . '__dark';

	function spitHTML($content, $tag){
		echo "<h1 class='section-heading'>" . $content['heading'] . "</h1>";

		foreach($content['paragraphs'] as $paragraph){
			echo "<$tag>" . $paragraph . "</$tag>";
		}
	}

?>
<style>
	.light {
		background-color: <?=$lightColor?>;
		color: <?=$darkColor?>;
	}

	.dark {
		background-color: <?=$darkColor?>;
		color: <?=$lightColor?>;
	}

	header {
		background-color: <?=$lightColor?>;	
		box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.4);
	}

</style>

<a 
	class="live-site" 
	href="<?=$liveSite?>" 
	target="_blank">
	<picture>
		<?php include('images/live-site.svg'); ?>
	</picture>
</a>

<?php 
	include('modules/case-study/title.php');
	include('modules/case-study/goals.php');
	include('modules/case-study/research.php');
	include('modules/case-study/design.php');
	include('modules/case-study/code.php');
?>
















