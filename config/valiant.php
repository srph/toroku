<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email Confirmation
    |--------------------------------------------------------------------------
    |
    | Enable/disable email confirmation
    |
    */

	'email_confirmation'   => env('VALIANT_EMAIL_CONFIRMATION', true),

    /*
    |--------------------------------------------------------------------------
    | Client Download URL
    |--------------------------------------------------------------------------
    |
    | Set the download url displayed in the download page.
    |
    */

    'client_download_url'   => env('VALIANT_CLIENT_DOWNLOAD_URL'),

    'client_mirror_urls'    => [
        env('VALIANT_CLIENT_MIRROR_URL_1', ''),
        env('VALIANT_CLIENT_MIRROR_URL_2', ''),
        env('VALIANT_CLIENT_MIRROR_URL_3', ''),
        env('VALIANT_CLIENT_MIRROR_URL_4', ''),
        env('VALIANT_CLIENT_MIRROR_URL_5', ''),
    ],
	
];