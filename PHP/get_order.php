<?php

$key = urlencode('an_example_api_key');
$id = urlencode('123456789009876543210164');

$url = sprintf(
    "https://merchant.wish.com/api/v1/order?key=%s&id=%s",
    $key, $id);

$context = stream_context_create(array(
    'http' => array(
        'method'        => 'GET',
        'ignore_errors' => true,
    ),
));

// Send the request
$response = file_get_contents($url, TRUE, $context);
echo $response;
echo "\n";
?>
