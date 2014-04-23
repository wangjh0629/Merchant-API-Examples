<?php

$key = urlencode('an_example_api_key');
$parent_sku = urlencode('red-shoe');
$sku = urlencode('red-shoe-12');
$inventory = urlencode('10');
$price = urlencode('10');
$shipping_cost = urlencode('3');
$size = urlencode('12');

$url = sprintf(
    "https://merchant.wish.com/api/v1/variant/add?key=%s&sku=%s&inventory=%s&price=%s&size=%s&shipping_cost=%s&parent_sku=%s",
    $key, $sku, $inventory, $price, $size, $shipping_cost, $parent_sku);

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
