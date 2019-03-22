<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'd35cf23ccbe8fe38f0ce',
            'client_secret' => '29177b31cb99de4afb24441555fcb02573352bec',
            'redirect_uri' => 'http://localhost/forum/public/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
