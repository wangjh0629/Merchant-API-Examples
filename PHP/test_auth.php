<?php

$key = urlencode('an_example_api_key');

$url = sprintf("https://merchant.wish.com/api/v1/auth_test?key=%s", $key);

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
