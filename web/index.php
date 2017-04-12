<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$signature = $request->headers->get(HTTPHeader::LINE_SIGNATURE);

$bot = new LINEBot(new CurlHTTPClient('rHESonstdV3FniND+25WHjgb+mTxTOeikt7zCGV9h0LgBFzCprU8IQwrXpgreO2TGyewjB87Imwmyz/RbxqF2N/i7mA+gMnmaS2cTF5GKLozTwE25XEHvRiaCtL74zveIKzb/UVfbaU4poxxB3WcrQdB04t89/1O/w1cDnyilFU='), [
            'channelSecret' => 'e8726b9bfd344a12c189f4fc6512da8a',
        ]);
try {
    $events = $bot->parseEventRequest($request->getContent(), $signature);
	$message_events = [];
	foreach ($events as $event) {
    	if (!($event instanceof MessageEvent) && !($event instanceof PostbackEvent)) {
        	continue;
    	}
    $message_events[] = $event;
	$logger->info(print_r($event,true));
	}

} catch (Exception $e) {
	$logger->info($e->getMessage());
}