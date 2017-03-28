<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Loging
$logger = new Logger('linebot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

//POST
$input = file_get_contents('php://input');
$json = json_decode($input);
$event = $json->events[0];

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient("rHESonstdV3FniND+25WHjgb+mTxTOeikt7zCGV9h0LgBFzCprU8IQwrXpgreO2TGyewjB87Imwmyz/RbxqF2N/i7mA+gMnmaS2cTF5GKLozTwE25XEHvRiaCtL74zveIKzb/UVfbaU4poxxB3WcrQdB04t89/1O/w1cDnyilFU=");
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => "e8726b9bfd344a12c189f4fc6512da8a"]);

if ("message" == $event->type) {      
    if ("text" == $event->message->type) {
		if ($event->message->text=="?") {
			$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("ข้อความช่วยเหลือ");
		} else {
			$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("พิมพ์ ? เพื่อขอความช่วยเหลือ");
		}
    } else {
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("พิมพ์ ? เพื่อขอความช่วยเหลือ");
		$logger->info('message type is not text -> ' + $event->message->type);
    }
} else {
	$logger->info('event type is not message');
}

$response = $bot->replyMessage($event->replyToken, $textMessageBuilder);
syslog(LOG_EMERG, print_r($event->replyToken, true));
syslog(LOG_EMERG, print_r($response, true));
return;
