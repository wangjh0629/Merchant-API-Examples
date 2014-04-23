<?php

$key = urlencode('an_example_api_key');
$start = urlencode('200');
$limit = urlencode('100');
$since = urlencode('2014-01-20');

$url = sprintf(
    "https://merchant.wish.com/api/v1/order/multi-get?key=%s&start=%s&limit=%s&since=%s",
    $key, $start, $limit, $since);

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
