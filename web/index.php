<?php

require_once '../vendor/autoload.php';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["LINEBOT_ACCESS_TOKEN"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["LINEBOT_CHANNEL_SECRET"]]);
echo "1.1";
echo "1.2";
