<?php

return [
    'wemx_sso_secret' => env('DELONIX_SSO_SECRET'),
    'token_length' => 48,
    'token_lifetime' => 60 // lifetime of a token in seconds
];
