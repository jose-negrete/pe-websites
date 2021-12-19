<?php 
	$name = $monster["name"]["english"];
	$type = $monster["type"];
	$hp = $monster["base"]["HP"];
	$attack = $monster["base"]["Attack"];
	$defense = $monster["base"]["Defense"];
	$spAttack = $monster["base"]["Sp. Attack"];
	$spDefense = $monster["base"]["Sp. Defense"];
	$speed = $monster["base"]["Speed"];


?> 
	<li class='monster'>
		<card>
			<h2>Name: <span><?=$name?></span></h2>
			<ol>
				<li>Type: <?=renderTypes($type)?></li>
				<li>HP: <?=$hp?></li>
				<li>Attack: <?=$attack?></li>
				<li>Defense: <?=$defense?></li>
				<li>Sp. Attack: <?=$spAttack?></li>
				<li>Sp. Defense: <?=$spDefense?></li>
				<li>Sp. Speed: <?=$speed?></li>
			</ol>
		</card>
	</li>
