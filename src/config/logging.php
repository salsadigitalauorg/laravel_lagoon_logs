<?php

return [
    'channels' => [
        'LagoonLogs' => [
            'driver' => 'custom',
            'via' => 'amazeeio\LagoonLogs\LagoonLoggerFactory',
        ]
    ],

];
