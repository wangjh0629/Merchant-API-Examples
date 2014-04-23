<?php

$key = urlencode('an_example_api_key');
$id = urlencode('098765432112345678901234');
$reason_code = urlencode('0');

$url = sprintf(
    "https://merchant.wish.com/api/v1/order/refund?key=%s&reason_code=%s&id=%s",
    $key, $reason_code, $id);

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
