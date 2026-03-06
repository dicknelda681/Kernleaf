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
    'name'        => 'Kernleaf',
    'brand'       => 'Kernleaf Creative',
    'title'       => 'Kernleaf | Editorial Photography & Concept Craft',
    'description' => 'Kernleaf produces deliberate editorial photography built on clarity, narrative depth, and visual restraint for thoughtful brands and creators.',
    'phone'       => '+1 (646) 555-8614',
    'phone_link'  => '+16465558614',
    'logo_text'   => 'Kernleaf'
];


// ================= HERO SLIDER =================
$hero_slider = [
    [
        'bg_class'   => 'slider-bg1',
        'count'      => '01',
        'title'      => 'Intentional',
        'subtitle'   => 'Concepts',
        'text'       => 'Every image begins with purpose, shaped through planning and visual logic.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot1.png'
    ],
    [
        'bg_class'   => 'slider-bg2',
        'count'      => '02',
        'title'      => 'Measured',
        'subtitle'   => 'Moments',
        'text'       => 'Scenes guided with care to preserve authenticity and emotional truth.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot2.png'
    ],
    [
        'bg_class'   => 'slider-bg3',
        'count'      => '03',
        'title'      => 'Enduring',
        'subtitle'   => 'Work',
        'text'       => 'Photography created to remain meaningful long after trends fade.',
        'signature'  => 'assets/img/icon/signature.png',
        'dot_image'  => 'assets/img/hero/slider-dot3.png'
    ]
];


// ================= GALLERY =================
$gallery_section = [
    'title' => 'Editorial Selections',
    'description' => 'A focused collection highlighting structure, atmosphere, and visual intent.',
    'button_text' => 'See Full Portfolio',
    'button_link' => '#portfolio'
];

$gallery_items = [
    [
        'image' => 'assets/img/gallery/gallery1.png',
        'caption' => 'Geometric Space',
        'col' => 'col-xl-5 col-lg-5 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery2.png',
        'caption' => 'Character Studies',
        'col' => 'col-xl-7 col-lg-7 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery3.png',
        'caption' => 'Urban Context',
        'col' => 'col-xl-6 col-lg-6 col-md-6 col-sm-6'
    ],
    [
        'image' => 'assets/img/gallery/gallery4.png',
        'caption' => 'Soft Contrast',
        'col' => 'col-xl-6 col-lg-6 col-md-6 col-sm-6'
    ]
];


// ================= ABOUT =================
$about_section = [
    'title' => "Photography With Direction",
    'description' => "Kernleaf approaches photography as a structured craft. Each project is guided by research, pacing, and visual coherence to deliver work that communicates with clarity and confidence.",
    'button_text' => 'Our Approach',
    'button_link' => '#about'
];


// ================= SERVICES =================
$categories_section = [
    'title' => 'Services',
    'description' => 'A refined workflow designed to support consistency and creative focus.',
    'services' => [
        [
            'icon' => 'assets/img/icon/services1.svg',
            'title' => 'Visual Research & Planning',
            'delay' => '.2s'
        ],
        [
            'icon' => 'assets/img/icon/services2.svg',
            'title' => 'Location & Controlled Shoots',
            'delay' => '.4s'
        ],
        [
            'icon' => 'assets/img/icon/services3.svg',
            'title' => 'Detailed Image Refinement',
            'delay' => '.6s'
        ],
        [
            'icon' => 'assets/img/icon/services4.svg',
            'title' => 'Final Asset Preparation',
            'delay' => '.8s'
        ]
    ]
];


// ================= TESTIMONIALS =================
$testimonials = [
    'background' => 'assets/img/gallery/section_bg03.png',
    'items' => [
        [
            'message' => 'Kernleaf delivered imagery that felt considered, calm, and strategically strong.',
            'name' => 'Margaret Ellis',
            'designation' => 'Brand Lead',
            'image' => 'assets/img/icon/testimonial.png'
        ],
        [
            'message' => 'Clear direction, efficient collaboration, and results we continue to use.',
            'name' => 'Daniel Whitmore',
            'designation' => 'Editorial Producer',
            'image' => 'assets/img/icon/testimonial.png'
        ]
    ]
];


// ================= CONTACT =================
$contactSection = [
    'title' => 'Begin the Conversation',
    'subtitle' => 'Share your ideas and let Kernleaf translate them into focused visual work.',
    'form_title' => 'Contact Studio',
    'address' => [
        'city' => 'New York City, USA.',
        'detail' => 'Available for international assignments'
    ],
    'phone' => [
        'number' => '+1 (646) 555-8614',
        'time' => 'Monday – Friday, 9am – 6pm'
    ],
    'email' => [
        'address' => 'contact@kernleaf.com',
        'note' => 'Replies within one business day'
    ],
    'form_action' => 'thank-you.php'
];
?>