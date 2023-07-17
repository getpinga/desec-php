<?php

require 'vendor/autoload.php';

$api = new \deSEC\deSEC("your-api-token");  // Replace with your actual API token

try {
    $response = $api->getDomain('example.com');
    print_r($response);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
