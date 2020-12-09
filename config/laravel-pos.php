<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'currency' => env('LARAVEL_POS_CURRENCY', 949),
    'locale' => env('LARAVEL_POS_LOCALE','tr'),
    'default_bank' => env('LARAVEL_POS_BANK','ziraat'),
    'bin_file_path' => env('LARAVEL_POS_BIN_FILE_PATH', 'resources/bin.json'),
    'banks' => [
        'ZİRAAT BANKASI' => [
            'name' => env('LARAVEL_POS_ZIRAAT_BANK_NAME',''),
            'base_url' => env('LARAVEL_POS_ZIRAAT_BASE_URL',''),
            'merchant_id' => env('LARAVEL_POS_ZIRAAT_MERCHANT_ID', ''),
            'store_key' => env('LARAVEL_POS_ZIRAAT_STORE_KEY', ''),
        ]
    ]
];
