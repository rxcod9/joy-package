<?php

return [

    /*
     * If enabled for replace-keyword package.
     */
    'enabled' => env('REPLACE_KEYWORD_ENABLED', true),

    /*
    | Here you can specify for which data type slugs replace-keyword is enabled
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'allowed_slugs' => array_filter(explode(',', env('REPLACE_KEYWORD_ALLOWED_SLUGS', '*'))),

    /*
    | Here you can specify for which data type slugs replace-keyword is not allowed
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'not_allowed_slugs' => array_filter(explode(',', env('REPLACE_KEYWORD_NOT_ALLOWED_SLUGS', ''))),

    /*
     * The config_key for replace-keyword package.
     */
    'config_key' => env('REPLACE_KEYWORD_CONFIG_KEY', 'joy-replace-keyword'),

    /*
     * The route_prefix for replace-keyword package.
     */
    'route_prefix' => env('REPLACE_KEYWORD_ROUTE_PREFIX', 'joy-replace-keyword'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\ReplaceKeyword\\Http\\Controllers',
    ],
];
