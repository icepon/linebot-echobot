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
		$message_text=strtolower(trim($event->message->text));
		switch ($message_text) {
			case "text" : 
				$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("text message");
				break;
			case "location" :
				$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder("Eiffel Tower", "Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France", 48.858328, 2.294750);
				break;
			case "button" :
				$actions = array (
   					// general message action
   					New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("button 1", "text 1"),
   					// URL type action
   					New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Google", "http://www.google.com"),
   					// The following two are interactive actions
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("next page", "page=3"),
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Previous", "page=1")
 				);
				$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
 				$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder("button text", "description", $img_url, $actions);
 				$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
				break;
			case "confirm" :
				$actions = array (
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("yes", "ans=y"),
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("no", "ans=N")
 				);
 				$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder("problem", $actions);
 				$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
				 break;
			default :
				$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("demo command: text, location, button, confirm to test message template");	
				break;
 
		}
/*		if ($event->message->text=="t1") {
			$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("ข้อความช่วยเหลือ");
		} else {
			$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("พิมพ์ ? เพื่อขอความช่วยเหลือ");
		}
*/
    } else {
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(":)");
		$logger->info('message type is ' . $event->message->type);
    }
} else if ($event->type=="postback") {

}else {
	$logger->info('event type is not message');
}

$response = $bot->replyMessage($event->replyToken, $textMessageBuilder);
$logger->info(print_r($event->replyToken, true));
$logger->info(print_r($response, true));
return;
