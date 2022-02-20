<?php 

	$enemies = $data['enemies'];
			
	foreach ($enemies as $enemy){
		if ($page == $enemy['id']){

			$name = $enemy['name'];
			$reasons = $enemy['reasons'];

			echo "<h2>$name is on my 💩 list because...</h2>";
			
			echo "<ul>";

			foreach($reasons as $reason){
				echo "<li>$reason</li>";
			} 

			echo "</ul>";
		}
	} 

	include('form.php');

?>