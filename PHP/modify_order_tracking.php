<?php

$key = urlencode('an_example_api_key');
$id = urlencode('098765432112345678901234');
$tracking_provider = urlencode('usps');
$tracking_number = urlencode('12345678');

$url = sprintf(
    "https://merchant.wish.com/api/v1/order/modify-tracking?key=%s&tracking_provider=%s&tracking_number=%s&id=%s",
    $key, $tracking_provider, $tracking_number, $id);

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
