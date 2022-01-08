<?php 

// header

$header = [
		"earthIcon" => "https://res.cloudinary.com/dk-find-out/image/upload/q_80,w_1920,f_auto/DK_Structure2_Final_Main-out_xabtn8.jpg",
		"placeholder" => "This is the Heading"
	];

$headerImg = $header[earthIcon] ;
$headerText = $header[placeholder];


// main

$main = [
	"solarSystem" => "https://cdn.mos.cms.futurecdn.net/VL7nBnqLZMhQt5VkPzzJVF-1200-80.jpg",
	"placeholder" => "Hello there,<br>
		Here's some text.<br>
		Boring blah blah blah!",
	"neil" => "I'm Neil DeGrasse Tyson.",
	"bill" => "I'm Bill Nye.",
	"alien" => "I'm an alien."
];

$mainImg = $main[solarSystem];
$mainText = $main[placeholder];
$neilText = $main[neil];
$billText = $main[bill];
$alienText = $main[alien];

// modules

$module = [
	// module images
	"neil" => "https://cdn.vox-cdn.com/thumbor/A0p5SL2jOf11kO2r6nz6RIWBJfw=/137x0:2359x1667/1400x1400/filters:focal(137x0:2359x1667):format(png)/cdn.vox-cdn.com/uploads/chorus_image/image/55898625/1_9eB_32e8YEq0jrkKpRs2ng.0.png",
	"bill" => "https://www.factinate.com/wp-content/uploads/2019/02/nyesquarethumb2.jpg",
	"alien" => "https://pyxis.nymag.com/v1/imgs/07f/762/6ec01dddd29c0a9d9895b71c20c0bd911d-alien.rsquare.w1200.jpg",

	// module text
	"header" => "This is Important",
	"subheader" => "This isn't as important",
	"copy" => "Don't even bother reading",
	"linkContent" => "CLICK!",
	"link__one" => "neil.php",
	"bill__link" => "bill.php",
	"alien__link" => "alien.php"
];

// footer

$footer = [
	"placeholder__one" => "This is the first block of info",
	"placeholder__two" => "This is the second block of info"
];

?>


