<?php

$key = urlencode('an_example_api_key');
$id = urlencode('123456789009876543211234')
$name = urlencode('Awesome shoe');
$description = urlencode('This shoe is the best on Wish');
$tags = urlencode('shoe, awesome, size 11')

$url = sprintf(
    "https://merchant.wish.com/api/v1/product/update?key=%s&id=%s&name=%s&description=%s&tags=%s",
    $key, $id, $name, $description, $tags);

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
