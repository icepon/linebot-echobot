<?php

require_once '../vendor/autoload.php';
include 'config.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('LineBot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["LINEBOT_ACCESS_TOKEN"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["LINEBOT_CHANNEL_SECRET"]]);
echo "1.1";
$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];

try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  error_log('parseEventRequest failed. InvalidSignatureException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  error_log('parseEventRequest failed. UnknownEventTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  error_log('parseEventRequest failed. UnknownMessageTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  error_log('parseEventRequest failed. InvalidEventRequestException => '.var_export($e, true));
}
echo "1.2";
foreach ($events as $event) {
	echo "3";
	//echo $events;
  if (!($event instanceof \LINE\LINEBot\Event\MessageEvent)) {
	  echo "3.1";
    error_log('Non message event has come');
    //continue;
  }
  if (!($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
	  echo "3.2";
    error_log('Non text message has come');
    //continue;
  }

  if (($event instanceof \LINE\LINEBot\Event\PostbackEvent)) {
	  echo "3.3";
    error_log('Postback message has come');
   // continue;
  }
echo "3.4";
  // Message Event = LocationMessage
  if  ($event instanceof LINE\LINEBot\Event\MessageEvent\LocationMessage) {
	  error_log("location -> ".$event->getLatitude().",".$event->getLongitude());
	
	  // get location nearby data
	  $result=getFanLocationNearby($event->getLatitude(), $event->getLongitude());
	  
	  if ($result!=null) {
		$columns = array();
		$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
		while($row = mysqli_fetch_array($result)){
			$actions = array(
				new \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Profile","action=getLocation&lat=".$row['entity_id']),
				new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Chat","http://line.me/ti/p/~@hsg0716r"),
				new \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Map","action=getLocation&lat=".$row['field_location_lat']."&lng=".$row['field_location_lng'])
			);
			$column = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("name ".$row['entity_id'], "description ".$row['entity_id'], $img_url , $actions);
			$columns[] = $column;
		}
		$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
		$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("Location Nearby", $carousel);
		$bot->replyMessage($event->getReplyToken(), $outputText);
	  }

  }
  echo "2.1";
	
  // Message Event = TextMessage
  if (($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
		$messageText=strtolower(trim($event->getText()));
	  echo "2.2";
	  echo $messageText;
		switch ($messageText) {
			case "text" : 
				$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("text message");
				echo "2";
				break;
			case "location" :
				$outputText = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder("Eiffel Tower", "Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France", 48.858328, 2.294750);
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
 				$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
				break;
			case "carousel" :
				$columns = array();
				$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
				for($i=0;$i<5;$i++) {
					$actions = array(
						new \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Add to Card","action=carousel&button=".$i),
						new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("View","http://www.google.com")
					);
					$column = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("Title", "description", $img_url , $actions);
					$columns[] = $column;
				}
				$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
				$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("Carousel Demo", $carousel);

				break;	
			case "image" :
				$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
 				$outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($img_url, $img_url);
				break;	
			case "confirm" :
				$actions = array (
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("yes", "ans=y"),
   					New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("no", "ans=N")
 				);
 				$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder("problem", $actions);
 				$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
				 break;
			default :
				$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("type: text, location, button, confirm or share your location to test message template");	
				break;
 
		}
	  	echo "1";
		$response = $bot->replyMessage($event->getReplyToken(), $outputText);
  }

  


}  
