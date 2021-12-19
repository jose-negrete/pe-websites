
<style>
	ul, ol {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	body {
		background-color: #F5F1F0;
		font-family: sans-serif;
		color: #7951C3;
	}

	.monsters {
		display: flex;
		flex-flow: row wrap;
		gap: 20px;
		justify-content: space-around;
	}

	.monster {
		margin:  20px 0;
	}

	.monster-list {
		background-color: #5AF4B9;
		flex-basis: 45%;
		box-shadow: -4px 4px dimgrey;
	}

	card {
		display: block;
		padding: 10px;
	}

	h2 {
		background-color: #D9F556;
		color: #F93EA0;
		text-align: center;
		border: 2px solid #F93EA0;
		padding: 4px;
	}

	card li span:not(:last-of-type):after {
		content: ", ";
	}

</style>

<section class="monsters">

<?php

$monstersData = file_get_contents('monsters.json');
// Gets the json file. Saved to a variable.

$monsters = json_decode( $monstersData, true);
// Wtf is this thing?

function renderTypesX($types) {
	$template = '';

	foreach ($types as $type) {
		$template = $template . "<span>" . $type . "</span>";
	}

	return $template;
}

function renderTypes($types) {

	

	return implode(", ", $types);
}

echo "<ul class='monster-list'>";


foreach ($monsters as $monster) {
include('monster-card.php');
}

echo "</ul>";

/*
echo "<pre>";
var_dump( $monsters );
// wtf is this doing? looks like a mistake. I'll turn it off. 

echo "</pre>";
*/

?>

</section>




