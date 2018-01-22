<?php

return [
    /*
     * Driver options used for running browser.
     */
    'driver' => [
        'options' => [
            '--disable-gpu',
            '--headless'
        ],

        'url' => 'http://localhost:9515',
    ],

    /*
     * Storage path used when storing screenshots or log entries.
     */
    'storage' => [
        'logs' => 'app/public/Browser/logs',
        'screenshots' => 'app/public/Browser/screenshots',
    ]
];