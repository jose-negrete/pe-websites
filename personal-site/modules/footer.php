<?php 
	$footer = $data['footer'];
?>
<footer>
	<div class="inner-column">
		<div class="footer-content">
			
			<div class="text-content">
				<h1>Ok, now I'm getting stalker vibes.</h1>
				<p>Why are you still on the fence? Just write me a damn email already. If this site didn't do the trick then these links probably won't win you over either.</p>
			</div>
			<ul class="footer-links">
				<?php 
					foreach($footer as $links){
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