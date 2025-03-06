<?php
return [
  'api' => [
    'basicAuth' => true,
    'allowInsecure' => true
  ],
  'kql' => [
    'auth' => true
  ],
  'headless' => [
    'cors' => [
      'allowOrigin' => '*',
      'allowMethods' => 'GET, POST, OPTIONS',
      'allowHeaders' => '*',
      'maxAge' => '86400',
    ]
    ],
    'debug'  => true,
];
