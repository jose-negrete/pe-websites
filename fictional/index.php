<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fictional – A friendly & quirky typeface with a cartoonesque character</title>
	<link rel="shortcut icon" href="https://fictional-typeface.com/assets/images/favicon.png">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- 

		I'm copying this website...

		https://fictional-typeface.com/

	-->
	
	<section class="charset">
		<div class="inner-column">
			<div class="charset-content">
				<ul>
		
						<?php
							$active = '';

							if ($_GET['classAssign']==='active') {
								$active = 'active';
							}

							include('database.php');

							$letters = $data['letters'];

							foreach($letters as $letter){
								echo "
								<li>
									<button><a class='<?=active?>' href='?classAssign=active'>$letter</a></button>
								</li>
								";
							}
						?>
				</ul>
			</div>
		</div>
	</section>
	
</body>
</html>