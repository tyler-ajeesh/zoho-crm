<?php

return [

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'client_id' =>  env('ZOHOCRM_CLIENT_ID', null),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'client_secret' =>  env('ZOHOCRM_CLIENT_SECRET', null),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'redirect_uri' =>  env('ZOHOCRM_REDIRECT_URI', null),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'current_user_email' =>  env('ZOHOCRM_CURRENT_USER_EMAIL', null),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'application_log_file_path' =>  storage_path('app/zoho/crm/oauth/logs'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'token_persistence_path' =>  storage_path('app/zoho/crm/oauth/tokens'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'accounts_url' =>  env('ZOHOCRM_ACCOUNTS_URL', 'https://accounts.zoho.com'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'sandbox' =>  env('ZOHOCRM_SANDBOX', false),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'api_base_url' =>  env('ZOHOCRM_API_BASE_URL', 'www.zohoapis.com'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'api_version' =>  env('ZOHOCRM_API_VERSION', 'v2'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'access_type' =>  env('ZOHOCRM_ACCESS_TYPE', 'offline'),

    /*
    |--------------------------------------------------------------------------
    | title
    |--------------------------------------------------------------------------
    |
    | description
    |
    */

    'persistence_handler_class' =>  env('ZOHOCRM_PERSISTENCE_HANDLER_CLASS', 'ZohoOAuthPersistenceHandler'),
];
