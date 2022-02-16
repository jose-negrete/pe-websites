<?php $staff = $data['pages']['staff']; ?>
<section>
	<p><?=$staff['intro']?><p>

	<div class='roster'>
		<?php 
			foreach ($staff['roster'] as $roster){
				$name = $roster['name'];
				$img = $roster['img'];

				echo "
				<div class='staff-member'>
					<h3>$name</h3>
					<img src=$img>
				</div>";

			}
		?>
	</div>
</section>