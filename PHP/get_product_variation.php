<?php

$key = urlencode('an_example_api_key');
$sku = urlencode('red-shoe-8');

$url = sprintf(
    "https://merchant.wish.com/api/v1/variant?key=%s&sku=%s",
    $key, $sku);

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
