<div class='inner-column module-container'>
	<?php	

		foreach ($module as $mod) {

			// images
			$neil = $module[neil];
			$bill = $module[bill];
			$alien = $module[alien];

			// text
			$header = $module[header];
			$subheader = $module[subheader];
			$copy = $module[copy];
			$link = $module[link];
			$linkContent = $module[linkContent];
			$neil__link = $module[link__one];
		}

		echo 
				"<div class='module'>
					<picture>
						<img src=$neil>
					</picture>
					<div class='module-text'>
						<h2 class='attention-voice'>$header</h2>
						<p class='calm-voice'>$subheader</p> 
						<p class='weak-voice'>$copy</p>
						<a href=$neil__link>$linkContent</a>
					</div>
				</div>

				<div class='module'>
					<picture>
						<img src=$bill>
					</picture>
					<div class='module-text'>
						<h2 class='attention-voice'>$header</h2>
						<p class='calm-voice'>$subheader</p> 
						<p class='weak-voice'>$copy</p>
						<a href=$module[bill__link]>$linkContent</a>
					</div>
				</div>

				<div class='module'>
					<picture>
						<img src=$alien>
					</picture>
					<div class='module-text'>
						<h2 class='attention-voice'>$header</h2>
						<p class='calm-voice'>$subheader</p> 
						<p class='weak-voice'>$copy</p>
						<a href=$module[alien__link]>$linkContent</a>
					</div>
				</div>";
	?>
</div>