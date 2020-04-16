<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
    'baseUrl' => 'http://localhost:8000',
    'production' => false,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'path' => 'recipe/{filename}',
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 7,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => 'contact@milon.im',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'সহজ রেসিপি',

    // The description of the site. This is used in for the site's default metadata
    'siteDescription' => 'রান্না করা খুব কঠিন কোন কাজ না, আমি যেহেতু পারছি, পারবেন আপনিও...',

    // The name of the site Author. Your name! This is used when building the rss feed
    'siteAuthor' => 'মিলন',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => 'https://twitter.com/to_milon',
            'icon' => 'fab fa-twitter',
        ],
        'facebook' => [
            'link' => 'https://www.facebook.com/page.milon.im',
            'icon' => 'fab fa-facebook-f',
        ],
        'rss' => [
            'link' => '/feed.xml',
            'icon' => 'fas fa-rss',
        ]
    ],

    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => 'UA-162769200-1',

    'banglaDate' => function ($page, $date) {
        // format date
        $str = date("F j, Y", strtotime($date));

        // translate number
        $str = $page->translateNumber($str);

        // translate day
        $enDay = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $enShortDay = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $bnDay = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

        $str = str_replace($enDay, $bnDay, $str);
        return str_replace($enShortDay, $bnDay, $str);
    },

    'translateNumber' => function($page, $number) {
        $enNum = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $bnNum = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return str_replace($enNum, $bnNum, $number);
    },

    'randomBackground' => function ($page) {
        $random = rand(1, 10);
        return "/assets/images/backgrounds/bg-$random.jpg";
    },
];
