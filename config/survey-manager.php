<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes
    'route_prefix'              =>  'survey',

    // The prefix used in api endpoints
    'api_prefix'                =>  'api',

    // The prefix used in admin route
    'admin_prefix'              =>  'admin',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    */

    // route middleware
    'route_middleware'          =>  ['web'],

    // api middleware
    'api_middleware'            =>  ['api'],

    // admin middleware
    'admin_middleware'          =>  ['web'],

];
