<?php
require '../../lib/squeeks-Pusher-PHP/lib/Pusher.php';
require '../../config.php';

$channel_name = 'my-channel';
$event_name = 'my_event';
$event_data = array('message' => 'Hello world!');

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
$response = $pusher->trigger($channel_name, $event_name, $event_data, null, true);
print_r($response);
?>