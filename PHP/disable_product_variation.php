<?php

$key = urlencode('an_example_api_key');
$sku = urlencode('blue-shoe-11');

$url = sprintf(
    "https://merchant.wish.com/api/v1/variant/disable?key=%s&sku=%s",
    $key, $sku);

$context = stream_context_create(array(
    'http' => array(
        'method'        => 'POST',
        'ignore_errors' => true,
    ),
));

// Send the request
$response = file_get_contents($url, TRUE, $context);
echo $response;
echo "\n";
?>
