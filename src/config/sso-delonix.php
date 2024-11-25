<?php

return [
    'secret' => env('DELONIX_SSO_SECRET'),
    'token' => [
        'length' => 48,
        'lifetime' => 60
    ],
];
