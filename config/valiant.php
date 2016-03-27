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

	'email_confirmation' => env('VALIANT_EMAIL_CONFIRMATION', true),

    /*
    |--------------------------------------------------------------------------
    | Client Download URL
    |--------------------------------------------------------------------------
    |
    | Set the download url displayed in the download page.
    |
    */

    'client_download_url' => env('VALIANT_CLIENT_DOWNLOAD_URL'),
	
];