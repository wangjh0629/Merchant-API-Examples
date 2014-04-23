<?php

$key = urlencode('an_example_api_key');
$id = urlencode('4ef2858a9795c776ce000120');

$url = sprintf("https://merchant.wish.com/api/v1/product?key=%s&id=%s", $key, $id);

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
