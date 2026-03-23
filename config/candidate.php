<?php

return [
    'jwt_ttl' => env('JWT_TTL', 3600),
    'api_prefix' => env('API_PREFIX', 'api/v1'),
    'submission_types' => ['suggestion', 'complaint', 'request'],
    'submission_statuses' => ['pending', 'reviewed'],
    'poster_template_categories' => ['festival', 'rally', 'announcement', 'daily_greeting'],
    'asset_types' => ['template', 'background', 'icon'],
];
