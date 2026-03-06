<?php
$css_files = [
    'bootstrap.min.css',
    'owl.carousel.min.css',
    'slicknav.css',
    'flaticon.css',
    'hamburgers.min.css',
    'progressbar_barfiller.css',
    'gijgo.css',
    'animate.min.css',
    'animated-headline.css',
    'magnific-popup.css',
    'fontawesome-all.min.css',
    'themify-icons.css',
    'slick.css',
    'nice-select.css',
    'style.css'
];

$nav_menu = [
    ['label' => 'Home',      'link' => '#home'],
    ['label' => 'About',     'link' => '#about'],
    ['label' => 'Portfolio', 'link' => '#portfolio'],
    ['label' => 'Pricing',   'link' => '#price'],
    ['label' => 'Contact',   'link' => '#contact']
];

// Footer Menu
$footer_menu = [
    ['label' => 'Home',           'link' => '#home'],
    ['label' => 'About',          'link' => '#about'],
    ['label' => 'Portfolio',      'link' => '#portfolio'],
    ['label' => 'Refund',         'link' => '/refund'],
    ['label' => 'Privacy Policy', 'link' => '/privacy-policy'],
    ['label' => 'Disclaimer',     'link' => '/disclaimer'],
];

// Social Links
$footer_social = [
    ['icon' => 'fab fa-twitter',     'link' => '#'],
    ['icon' => 'fab fa-facebook-f',  'link' => '#'],
    ['icon' => 'fab fa-pinterest-p', 'link' => '#'],
];

$js_files = [
    'vendor/modernizr-3.5.0.min.js',
    'vendor/jquery-1.12.4.min.js',
    'popper.min.js',
    'bootstrap.min.js',
    'jquery.slicknav.min.js',
    'owl.carousel.min.js',
    'slick.min.js',
    'wow.min.js',
    'animated.headline.js',
    'jquery.magnific-popup.js',
    'gijgo.min.js',
    'jquery.nice-select.min.js',
    'jquery.sticky.js',
    'jquery.barfiller.js',
    'jquery.counterup.min.js',
    'waypoints.min.js',
    'jquery.countdown.min.js',
    'hover-direction-snake.min.js',
    'contact.js',
    'jquery.form.js',
    'jquery.validate.min.js',
    'mail-script.js',
    'jquery.ajaxchimp.min.js',
    'plugins.js',
    'main.js'
];


// ================= HEADER =================
$site = [
    'name'        => 'AuroraLens',
    'brand'       => 'Aurora Visuals',
    'title'       => 'AuroraLens | Cinematic Photography & Visual Narratives',
    'description' => 'AuroraLens is a modern photography studio crafting cinematic visuals, authentic emotions, and powerful visual narratives for brands and individuals.',
    'phone'       => '+1 (540) 615-3098',
    'phone_link'  => '+15406153098',
    'logo_text'   => 'Aurora Visuals'
];


// ================= HERO SLIDER =================
$hero_slider = [
    [
        'bg_class'   => 'slider-bg1',
        'count'      => '01',
        'title'      => 'Cinematic',
        'subtitle'   => 'Storytelling',
        'text'       => 'Turning real-life moments into cinematic visuals that feel honest, emotional, and timeless.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot1.png'
    ],
    [
        'bg_class'   => 'slider-bg2',
        'count'      => '02',
        'title'      => 'Creative',
        'subtitle'   => 'Photography',
        'text'       => 'Blending artistic vision with technical precision to create photographs that speak naturally.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot2.png'
    ],
    [
        'bg_class'   => 'slider-bg3',
        'count'      => '03',
        'title'      => 'Modern',
        'subtitle'   => 'Visual Craft',
        'text'       => 'Clean, expressive imagery designed to leave a strong and lasting visual impact.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot3.png'
    ]
];


// ================= GALLERY =================
$gallery_section = [
    'title' => 'Moments Captured with Purpose',
    'description' => 'Every photograph is carefully composed to preserve emotions, atmosphere, and the essence of the moment.',
    'button_text' => 'View Portfolio',
    'button_link' => '#'
];

$gallery_items = [
    [
        'image' => 'assets/img/gallery/gallery1.png',
        'caption' => 'Travel Narratives',
        'col' => 'col-xl-5 col-lg-5 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery2.png',
        'caption' => 'Conceptual Frames',
        'col' => 'col-xl-7 col-lg-7 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery3.png',
        'caption' => 'Lifestyle Stories',
        'col' => 'col-xl-6 col-lg-6 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery4.png',
        'caption' => 'Nature Expressions',
        'col' => 'col-xl-6 col-lg-6 col-md-6 col-sm-6'
    ]
];


// ================= ABOUT =================
$about_section = [
    'title' => "Creating Visuals That Feel Real",
    'description' => "At AuroraLens, photography goes beyond aesthetics. It’s about understanding people, environments, and emotions to create visuals that feel natural, meaningful, and visually powerful.",
    'button_text' => 'Discover More',
    'button_link' => '#contact'
];


// ================= SERVICES =================
$categories_section = [
    'title' => 'Visual Experiences Crafted with Intent',
    'description' => 'Our approach focuses on authenticity, storytelling, and visual clarity to deliver images that remain relevant over time.',
    'services' => [
        [
            'icon' => 'assets/img/icon/services1.svg',
            'title' => 'Creative Direction',
            'delay' => '.2s'
        ],
        [
            'icon' => 'assets/img/icon/services2.svg',
            'title' => 'Professional Photography',
            'delay' => '.4s'
        ],
        [
            'icon' => 'assets/img/icon/services3.svg',
            'title' => 'Advanced Retouching',
            'delay' => '.6s'
        ],
        [
            'icon' => 'assets/img/icon/services4.svg',
            'title' => 'Premium Photo Albums',
            'delay' => '.8s'
        ]
    ]
];


// ================= TESTIMONIALS =================
$testimonials = [
    'background' => 'assets/img/gallery/section_bg03.png',
    'items' => [
        [
            'message' => 'The visuals were natural, cinematic, and full of emotion. Every frame felt thoughtfully composed.',
            'name' => 'Sophia Martin',
            'designation' => 'Brand Strategist',
            'image' => 'assets/img/icon/testimonial.png'
        ],
        [
            'message' => 'Professional, creative, and extremely detail-oriented. The final output exceeded expectations.',
            'name' => 'Daniel Wilson',
            'designation' => 'Startup Founder',
            'image' => 'assets/img/icon/testimonial.png'
        ]
    ]
];


// ================= CONTACT =================
$contactSection = [
    'title' => 'Start Your Visual Journey',
    'subtitle' => 'Have a concept, brand, or special moment in mind? Let’s collaborate and create visuals that truly represent your story.',
    'form_title' => 'Get in Touch',
    'address' => [
        'city' => 'Buttonwood, California.',
        'detail' => 'Rosemead, CA 91770'
    ],
    'phone' => [
        'number' => '+1 (540) 615-3098',
        'time' => 'Mon to Fri 9am to 6pm'
    ],
    'email' => [
        'address' => 'hello@auroralens.com',
        'note' => 'We respond within one business day'
    ],
    'form_action' => 'thank-you.php'
];

?>