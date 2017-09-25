<?php

require_once '../vendor/autoload.php';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '1efe3c53bbd84320ce616b832c262094']);
echo "<span>
<script type='text/javascript' src='//media.line.me/js/line-button.js?v=20140411' ></script>
<script type='text/javascript'>
new media_line_me.LineButton({'pc':false,'lang':'en','type':'a'});
</script>
</span>";
/*echo "1.2";
$replyToken = $event['replyToken'];
$response = $bot->replyText($replyToken, "hello!");
echo "1.3";
*/
$kin = array("โรงอาหาร","เป็ด","เต๊นท์","ราเมง","กินคลีน","ไม่กิน ลดความอ้วน");
$rand_kin = $kin[array_rand($kin)];
$access_token = 'AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=';

//Mesage to be send
//NB
$nb2 = "คุณพงศธร T123456789 ทุนประกัน 500,000 บาท ปฏิเสธ เมื่อ 31/01/60 เนื่องจากกฏเกณฑ์ของบริษัท";
$nb3 = "คุณพงศธร T123456789 อนุมัติเบื้องต้น 31/01/60 เบี้ยรวม 10,000. 00 บาท ขณะนี้รอจดหมายตอบรับจากลูกค้า";
$nb4 = "คุณนรากร T123456789 อนุมัติ 31/01/60 เบี้ยรวม 10,000.00 บาท";
//Billing
$bill2 = "คุณพงศธร T123456789 ข้อเสนอเพิ่มความคุ้มครองในปีต่ออายุกรมธรรม์";
$bill3 = "กรุณาแจ้ง คุณพงศธร T123456789 ชำระเบี้ย 500,000 บ. ภายใน 12/02/60";
$bill4 = "คุณพงศธร T123456789 ข้อเสนอเพิ่มความคุ้มครองในปีต่ออายุกรมธรรม์";


// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			//Start here **
			
			if ($text == "สวัสดี"){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("สวัสดีจ้าาาา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ทำไรอยู่") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("ไม่บอก อิอิ");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "แนน") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("แนนสวย");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "555") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("หัวเราะพ่อง");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "เครียด") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("เครียดมาเล่นกับเรา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "เก็บ") {
			$user_id =$event['source']['userId'];
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($user_id);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ไอซ์") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("จ๋าาาาาาา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "กินไรดี2") {
			//$messages = [ 'type'=>'text','text'=>$kin[rand(0, count($kin) - 1)]]; 
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($kin[array_rand($kin)]);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "กินไรดี") {
			//$messages = [ 'type'=>'text','text'=>$kin[rand(0, count($kin) - 1)]]; 
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messages);	
			//$response = $bot->replyMessage($replyToken, $outputText); 
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("กิน", "กิน"),
				New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("ไม่กิน", "ไม่กิน")
			);
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $kin[array_rand($kin)],null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($kin[array_rand($kin)], $button);
			$response = $bot->replyMessage($replyToken, $outputText);
			}
			else if ($text == "กิน") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("จัดไป");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ไม่กิน") {
			
			//$messages = [ 'type'=>'text','text'=>$kin[rand(0, count($kin) - 1)]]; 
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messages);	
			//$response = $bot->replyMessage($replyToken, $outputText); 
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("กิน", "กิน"),
				New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("ไม่กิน", "ไม่กิน")
			);
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $rand_kin,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($rand_kin, $button);
			$response = $bot->replyMessage($replyToken, $outputText);
			}
			//#NB1
			else if (strtolower($text) == "nb1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ตรวจสอบข้อมูล", "https://awa.aia.co.th/login/")
			);
			$b_description = "คุณพงศธร T123456789 MEMO 31/01/61";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $b_description,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($b_description, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "nb2") {
			//$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $nb2,null,  null);
			//$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($nb2, $button);
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($nb2);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "nb3") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($nb3);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "nb4") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($nb4);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			//bill1
			else if (strtolower($text) == "bill1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $b_description,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($b_description, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "bill2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill2, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "bill3") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B9%81%E0%B8%88%E0%B9%89%E0%B8%87+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2+500%2C000+%E0%B8%9A.+%E0%B8%A0%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%99+12%2F02%2F60+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill3,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill3, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "bill4") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill4,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill4, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else {
			$messages = [ 'type'=>'text','text'=>"อิอิ"];
			}
			/*
			$actions = array (
				// general message action
				New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("button 1", "text 1"),
				// URL type action
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Google", "http://www.google.com"),
				// The following two are interactive actions
				New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("next page", "page=3"),
				New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Previous", "page=1")
			);
			//$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
			//$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder("button text", "description", $img_url, $actions);
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder("button text", "description",null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
			$response = $bot->replyMessage($replyToken, $outputText);
			*/
			//$response = $bot->replyText($replyToken, "hello!");
			/*
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";*/
		}
	}
}
echo "OK";
