<?php

return [
'driver' => env('MAIL_DRIVER', 'smtp'),
'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
'port' => env('MAIL_PORT', 2525),
'from' => ['address' => 'fylyp90@hotmail.com', 'name' => 'Filip'],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME'),
'password' => env('MAIL_PASSWORD'),
'sendmail' => '/usr/sbin/sendmail -bs',

];
