<?php
return array(
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "15d4f91c5c9581",
    "password" => "2f6339897274c0",
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false,
    'stream' => [
        'ssl' => [
            'allow_self_signed' => true,
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
      ],
    'markdown' => [
    'theme' => 'default',
    'paths' => [
        resource_path('views/vendor/mail'),
    ],
],

);