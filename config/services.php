<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'linkedin' => [
        'client_id' => '784xiacjj6by9z',
        'client_secret' => 'MLk1gBB6sEoKPeth',
        'redirect' => 'http://localhost:8000/auth/callback/linkedin',
      ],
    'github' => [
        'client_id' => '2652dab4883363762a3d',
        'client_secret' => '02b41e897c1e1e9ae2a606dde2136f5afe4c796f',
        'redirect' => 'http://localhost:8000/auth/callback/github',
      ],
    'facebook' => [
        'client_id' => '552231908529627',
        'client_secret' => '37bf5b5c9c36ee79886c04fa55e8b53f',
        'redirect' => 'http://localhost:8000/auth/callback/facebook',
      ],
    'google' => [
        'client_id' => '348597239935-jf70tcdklbvauppn3espetinemk3b14r.apps.googleusercontent.com',
        'client_secret' => 'pDWJFF9uT1HOl5ArGL7Snpfg',
        'redirect' => 'http://localhost:8000/auth/callback/google',
      ],
];
