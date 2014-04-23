<?php

$key = urlencode('an_example_api_key');
$sku = urlencode('blue-shoe-11');
$inventory = urlencode('1000');
$price = urlencode('10.11');
$shipping_cost = urlencode('10.00');

$url = sprintf(
    "https://merchant.wish.com/api/v1/variant/update?key=%s&sku=%s&inventory=%s&price=%s&shipping_cost=%s",
    $key, $sku, $inventory, $price, $shipping_cost);

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
