<?php

$key = urlencode('an_example_api_key');
$name = urlencode('red shoe');
$parent_sku = urlencode('red-shoe');
$sku = urlencode('red-shoe-11');
$inventory = urlencode('100');
$price = urlencode('100');
$shipping_cost = urlencode('10');
$description = urlencode('this is a cool shoe');
$tags = urlencode('red,shoe,cool');
$main_image = urlencode('http://i.imgur.com/Q1a32kD.jpg');
$extra_images = urlencode('http://i.imgur.com/Cxagv.jpg|http://i.imgur.com/Cxagv.jpg');

$url = sprintf(
    "https://merchant.wish.com/api/v1/product/add?key=%s&main_image=%s&name=%s&description=%s&tags=%s&sku=%s&inventory=%s&price=%s&shipping_cost=%s&extra_images=%s&parent_sku=%s",
    $key, $main_image, $name, $description, $tags, $sku, $inventory, $price, $shipping_cost, $extra_images, $parent_sku);

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
