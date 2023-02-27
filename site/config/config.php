<?php

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  header("HTTP/1.1 200 OK");
}
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: content-type, authorization, origin, x-requested-with');
header('Access-Control-Allow-Methods', 'GET, OPTIONS');

return [
  'api' => [
    'basicAuth' => true,
    'allowInsecure' => true // Use in development
  ]
];
