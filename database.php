<?php
  $projectsContent = [
    [ 
      "heading" => "Intergalactic Plant World",
      "description" => "I built a website for a succulent shop ran by hippies that would appeal to the general public without alienating their already established clientele.",
      "links" => [
        [
          "url" => "../igw",
          "name" => "Website"
        ],
        [
          "url" => "./igw.php",
          "name" => "Case Study"
        ]
      ]
    ],
    [ 
      "heading" => "The Alpha-Net",
      "description" => "I redesigned the student directory for Alpha-3 at Perpetual Education so that an outsider would know what this is and would be interested to learn more.",

      "links" => [
        [
          "url" => "../lesson-99",
          "name" => "Website"
        ],
        [
          "url" => "./alpha-net.php",
          "name" => "Case Study"
        ]
      ]
    ],
    [
      "heading" => "Super Responsive Layout&nbsp;Challenge",
      "description" => "I put my design skills to the test by building a website with a lot of moving parts that adapts to every screen size while retaining cleanliness.",
      "links" => [
        [
          "url" => "../super-responsive-layout-challenge",
          "name" => "Website"
        ],
        [
          "url" => "#",
          "name" => "Case Study"
        ]
      ]
    ]
  ];

  $blogContent = [
    [ 
      "heading" => "Perpetual Education: Week&nbsp;13",
      "description" => "Jose gets turnt while in the early stages of the design process and as a result, it totally backfires and forces him to reexamine his life choices.",
      "links" => [
        [
          "url" => "https://fishouttawater.substack.com/p/perpetual-education-week-13",
          "name" => "Read More"
        ]
      ]
    ],
    [ 
      "heading" => "Perpetual Education: Week&nbsp;12",
      "description" => "Jose does a ridiculous amount of research in order to design a legit looking e-commerce site for electric bikes and executes it with unflagging fervor.",
      "link1" => "https://fishouttawater.substack.com/p/perpetual-education-week-12",
      "links" => [
        [
          "url" => "https://fishouttawater.substack.com/p/perpetual-education-week-12",
          "name" => "Read More"
        ]
      ]
    ],
    [
      "heading" => "Perpetual Education: Week&nbsp;11",
      "description" => "Jose uses his newly acquired skills of basic design principles and applies it to an already existing site so that it makes sense to the outside world.",
      "link1" => "https://fishouttawater.substack.com/p/perpetual-education-week-11",
      "links" => [
        [
          "url" => "https://fishouttawater.substack.com/p/perpetual-education-week-11",
          "name" => "Read More"
        ]
      ]
    ]
  ];

$igw = [
  "header" => [
    "liveSite" => "https://peprojects.dev/alpha-3/jose/igw/",
    "gitHub" => "https://github.com/jose-negrete/"
  ],
  "title" => "Intergalactic Plant World",
  "goals" => [
    "heading" => "Goals",
    "list" => [
    "Appeal to the general public without alienating their niche market (hippies).",
    "To let the public know they’re open for direct sales to customers as well as sales to other shops.",
    "To send the message that this a friendly place to hang out and soak in the vibes"
    ]
  ],
  "sections" => [
    [
      "heading" => "Research",
      "content" => [
        "I studied the sites of their competitors so I could find themes and make unique design choices. I quickly found that this shop wasn't at all like the others — but what they do have is an eccentric story and business model. One that doesn't really mesh well with your classic e-commerce site. Since they didn’t plan on doing any online sales and didn’t even have a product list I figured, why not just tell a story and use extremely effective images. This got us on the right track to accomplishing our goals.",
        "For the logo I wanted to create something that was a nod to hippie culture without being explicit. I came across this cool skull drawing on etsy that matched perfectly. Even had succulents sticking out of it. Doesn't even have to say the company name. This will be something that locals would use as a bumper sticker.",
        "To find a font for the header I took a screen shot of each google font I found interesting and would place it next to the skull to see what fit best. Megrim was the obvious winner because it had a futuristic look (which looks great for words like intergalactic and world) and the A's and W's had large open counters and apertures that reminded me of those diamond-shaped planters that are popular for housing succulents."
      ]
    ],
    [
        "heading" => "Design",
        "content" => [
          "For the logo I wanted to create something that was a nod to hippie culture without being explicit. I came across this cool skull drawing on etsy that matched perfectly. Even had succulents sticking out of it. Doesn't even have to say the company name. This will be something that locals would use as a bumper sticker.",
          "To find a font for the header I took a screen shot of each google font I found interesting and would place it next to the skull to see what fit best. Megrim was the obvious winner because it had a futuristic look (which looks great for words like intergalactic and world) and the A's and W's had large open counters and apertures that reminded me of those diamond-shaped planters that are popular for housing succulents."
        ]
      ],
      [
        "heading" => "Code",
        "content" => [
          "For the header I used a cool css property called filter to invert the colors. Also added a shadow to the to the text. When you hover over the links in the navigation it shows a bunch of red dotted lines. This is the border-property. I had to make so the border changes from zero to full opacity when you hover so that it doesn’t push the rest of the content every time it appears. To keep the design cohesive, I also used red dots to break up the sections.",
          "Since this is a fairly simple page I only needed to design for 2 different screen sizes. I made it so on small screen sizes the images connect but when you expand the page it disconnects them and gives the image rounded corners adds a subtle shadow."
        ]
      ]
   ]
];

$resume = [
  "jobs" => [
    [
      "heading" => [
        "companyName" => "360 Cities",
        "jobTitle" => "Data Collector",
        "yearsEmployed" => "2018 - 2020"
      ],
      "description" => "Traveled across the country collecting 360 camera footage. The company was based in England so they weren't privy to ghetto in the states. I'd show up to skid row wearing a backpack with a long extensional pole sticking out that had an expensive 360 camera attached. It was fun and dangerous."
    ],
    [
      "heading" => [
        "companyName" => "Freelance",
        "jobTitle" => "Medical Editor",
        "yearsEmployed" => "2016 - 2019"
      ],
      "description" => "I took a 4 day workshop on medical editing so I could freelance and make ok money. The work was super dry. You just reference the AMA manaual of style to format medical documents. No one ever checked my work and whenever I would do a thorogh job of editing, it would usually lead to trouble. It was ok but hard to get steady work."
    ],
    [
      "heading" => [
        "companyName" => "Global Supplies",
        "jobTitle" => "Data Entry",
        "yearsEmployed" => "2013 - 2016"
      ],
      "description" => "This super sketchy dude in Sunset Park runs this wacky business where they fulfill Amazon order by just reordering stuff from Wal-Mart. The dude made a fortune. It was just this crummy warehouse full of people copying and pasting customer info from Amazon directly onto Wal-Mart checkout. It was weird and felt wrong but hey, gotta pay the bills."
    ],
    [
      "heading" => [
        "companyName" => "Freelance",
        "jobTitle" => "Production Assistant",
        "yearsEmployed" => "2011 - 2015"
      ],
      "description" => "Sort of a mish-mash of TV, film, random events. I would find gigs here and there. It was all over the place. I worked the Met Gala every year which was fun. It was hilarous seeing all these images of celebrities wearing some fancy designer clothing in the same exact spot I was sweating and covered in sawdust an hour before."
    ]
  ]
];


?>











