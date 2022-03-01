<section class="goals dark">
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