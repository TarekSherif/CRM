<?php
return array(
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "ba9a5d80b93eaa",
  "password" => "7d6105d1ec531a",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false,

  'markdown' => [
    'theme' => 'default',
    'paths' => [
        resource_path('views/vendor/mail'),
    ],
],

);