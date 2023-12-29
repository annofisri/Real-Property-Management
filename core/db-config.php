<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'real_property');
define('ROOT_PATH', __DIR__ . '/..');
define('MAX_UPLOAD_IMAGE_SIZE', 1024 * 1024 * 20);


define('ALLOWED_IMAGE_TYPES', [
    'jpeg',
    'png',
    'jpg',
]);


define('STALL_TYPES', [
    'platinum' => [
        'name' => 'Platinum Sponsor',
        'price' => '16,00,000',
        'color' => '#8DC63F',
        'size' => '6 x 15',
        'quantity' => '(1 no)',
    ],
    'diamond' => [
        'name' => 'Diamond Sponsor',
        'price' => 1300000,
        'color' => '#B3B0D9',
        'size' => '6 x 12',
        'quantity' => '(2 no)',

    ],
    'gold' => [
        'name' => 'Gold Sponsor',
        'price' => '10,00,000',
        'color' => '#4ABFD9',
        'size' => '6 x 10',
        'quantity' => '(2 no)',
    ],
    'silver' => [
        'name' => 'Silver Sponsor',
        'price' => '6,50,000',
        'color' => '#F391BC',
        'size' => '6 x 10',
        'quantity' => '(5 no)',
    ],
    'international_exhibitor' => [
        'name' => 'For International Exhibitor',
        'price' => '1,00,000',
        'color' => '#E5D44C',
        'size' => '3 x 3',
        'quantity' => '9sq/meter',
    ],

    'vendor_registred' => [
        'name' => 'Vendor Registered',
        'price' => '75,000',
        'color' => '#C3C4C6',
        'size' => '3 x 3',
        'quantity' => '9sq/meter',
    ],

]);
