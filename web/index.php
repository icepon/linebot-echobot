<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('linebot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('rHESonstdV3FniND+25WHjgb+mTxTOeikt7zCGV9h0LgBFzCprU8IQwrXpgreO2TGyewjB87Imwmyz/RbxqF2N/i7mA+gMnmaS2cTF5GKLozTwE25XEHvRiaCtL74zveIKzb/UVfbaU4poxxB3WcrQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'e8726b9bfd344a12c189f4fc6512da8a']);

$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
  
  foreach ($events as $event) {
	if (!($event instanceof MessageEvent)) {
		$logger->info('Non message event has come');
		continue;
	}
	if (!($event instanceof TextMessage)) {
		$logger->info('Non text message has come');
		continue;
	}
	$replyText = $event->getText();
	$logger->info('Reply text: ' . $replyText);
	$resp = $bot->replyText($event->getReplyToken(), $replyText);
	$logger->info($resp->getHTTPStatus() . ': ' . $resp->getRawBody());
  }


} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  error_log('parseEventRequest failed. InvalidSignatureException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  error_log('parseEventRequest failed. UnknownEventTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  error_log('parseEventRequest failed. UnknownMessageTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  error_log('parseEventRequest failed. InvalidEventRequestException => '.var_export($e, true));
}

