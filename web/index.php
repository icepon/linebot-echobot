<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('linebot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$bot = new \LINE\LINEBot (
   new \LINE\LINEBot\HTTPClient\CurlHTTPClient("rHESonstdV3FniND+25WHjgb+mTxTOeikt7zCGV9h0LgBFzCprU8IQwrXpgreO2TGyewjB87Imwmyz/RbxqF2N/i7mA+gMnmaS2cTF5GKLozTwE25XEHvRiaCtL74zveIKzb/UVfbaU4poxxB3WcrQdB04t89/1O/w1cDnyilFU="),
   ['ChannelSecret' => "e8726b9bfd344a12c189f4fc6512da8a"]
 );

$signature = $_SERVER["HTTP_". \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$body = file_get_contents("php://input");
try {
	$events = $bot->parseEventRequest($body, $signature);
	$$logger->info("x");

} catch (Exception $e) {
	var_dump($e);
} 
