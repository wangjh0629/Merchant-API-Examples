<?php

$key = urlencode('an_example_api_key');
$sku = urlencode('blue-shoe-11');
$inventory = urlencode('100');

$url = sprintf(
    "https://merchant.wish.com/api/v1/variant/update-inventory?key=%s&sku=%s&inventory=%s",
    $key, $sku, $inventory);

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
