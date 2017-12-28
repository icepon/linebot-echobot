<?php

require_once '../vendor/autoload.php';
include 'watson.php';

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
$nb2 = "❎ กรมธรรม์ใหม่ ❎\n\nคุณพงศธร ทับทิมไทย\nT123456789\nปฏิเสธการรับประกัน ทุนประกัน 10,000,000 บาท เมื่อ 31/01/60 เพราะขาดเอกสาร/สิ่งที่ขอเกี่ยวกับสุขภาพ";
$nb2n = "❎ แจ้งเตือนกรมธรรม์ใหม่ ❎\n • สถานะ: ปฏิเสธ\n • วันที่: 31/01/60\n • พงศธร ทับทิมไทย\n • T123456789";
$nb2d = "❎ ปฏิเสธ ❎\n\n เนื่องจาก:\n • ขาดเอกสาร/สิ่งที่ขอเกี่ยวกับสุขภาพ";


$nb3 = "✅ กรมธรรม์ใหม่ ✅\n\nคุณพงศธร ทับทิมไทย\nT123456789\nอนุมัติเบื้องต้น 31/01/60 เบี้ยรวม 1,000,000.00 บาท ขณะนี้รอจดหมายตอบรับ Counter Offer จากลูกค้า";
$nb4 = "✅ กรมธรรม์ใหม่ ✅\n\nคุณพงศธร ทับทิมไทย\nT123456789\nอนุมัติ 31/01/60 เบี้ยรวม 10,000.00 บาท";
//Billing
$bill2 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณพงศธร ทับทิมไทย T123456789 ยังไม่ได้ชำระเบี้ยฯ ครบกำหนด 12/01/60 จำนวน 10,000 บ. หรือ 12,000 บ. พร้อมข้อเสนอเพิ่มเติม";
$bill21 = "  ❗ แจ้งเตือนการชำระเบี้ย ❗\n • พงศธร ทับทิมไทย\n • T123456789\n • จำนวนเบี้ย 10,000 บ.\n • กำหนดชำระ: 12/01/60";
$bill22 = "❗ ข้อเสนอเพิ่มความคุ้มครอง ❗\n • พงศธร ทับทิมไทย\n • T123456789\n • จำนวนเบี้ย 12,000 บ.\n • กำหนดชำระ: 12/01/60";


$bill3 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณพงศธร ทับทิมไทย T123456789 ยังไม่ได้ชำระเบี้ยฯ จำนวน 10,000 บ. กธ.อาจขาด 10/02/60";
$bill4 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณพงศธร ทับทิมไทย T123456789 ยังไม่ได้ชำระเบี้ยฯ จำนวน 10,000 บ. หรือ 12,000 บ. พร้อมข้อเสนอเพิ่มเติม กธ.อาจขาด 10/02/60";
$bill5 = "💡 เตือนการชำระเบี้ย 💡\n\nคุณพงศธร ทับทิมไทย T123456789 คุ้มครองอุบัติเหตุ ใกล้ถึงกำหนดชำระ 12/02/60 กรุณาแจ้งเตือนลูกค้าให้ชำระเบี้ยเพื่อต่ออายุ";
//Conservation
$con1 = "❗ กรมธรรม์ขยายเวลา ❗\n\nคุณธวัชชัย จงรักดี T123456789 มีสถานะเป็นขยายเวลา (ETI)  สิ้นสุดความคุ้มครอง 12 ก.พ. 2561 กรุณาแจ้งลูกค้าชำระเบี้ยเพื่อต่ออายุ";
$con3 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณธวัชชัย จงรักดี T123456789 ยังไม่ได้ชำระเบี้ยฯ เกินกำหนดแล้ว 52 วัน กรุณาแจ้งลูกค้าชำระเบี้ยฯ";
$con2 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณธวัชชัย จงรักดี T123456789 ยังไม่ได้ชำระเบี้ยฯ เกินกำหนดแล้ว 45 วัน กรุณาแจ้งลูกค้าชำระเบี้ยฯ";
$con4 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณธวัชชัย จงรักดี T123456789 ยังไม่ได้ชำระเบี้ยฯ เกินกำหนดแล้ว 60 วัน กรุณาแจ้งลูกค้าชำระเบี้ยฯ";
$con5 = "❗ เตือนการชำระเบี้ย ❗\n\nคุณธวัชชัย จงรักดี T123456789 ยังไม่ได้ชำระเบี้ยฯ หากชำระภายใน 12/02/2561 ไม่ต้องส่งหนังสือรับรองสุขภาพ (สงวนสิทธิ์หากมีประวัติ)";
//Claim
$cl1 = "✅ การเรียกร้องสินไหม ✅\n\nคุณธวัชชัย จงรักดี บริษัทฯได้รับเรื่องการเรียกร้องสินไหมแล้ว อยู่ระหว่างการพิจารณา 12/01/60";
$cl2 = "💡 การเรียกร้องสินไหม 💡\n\nคุณธวัชชัย จงรักดี บริษัทฯได้ขอเอกสารเพิ่มเติมจากโรงพยาบาล... เพื่อประกอบการพิจารณาสินไหม";
$cl3 = "❗ การเรียกร้องสินไหม ❗\n\nคุณธวัชชัย จงรักดี บริษัทฯปฏิเสธการจ่ายสินไหม เพราะไม่อยู่ในเงื่อนไข";
$cl4 = "✅ การเรียกร้องสินไหม ✅\n\nคุณธวัชชัย จงรักดี บริษัทฯอนุมัติการจ่ายสินไหม จำนวน 2,000 บาท (เต็มจำนวน/บางส่วน)";
//APL
$apl = "❗ เตือนการชำระเบี้ย ❗\n\nคุณธวัชชัย T123456789 กำหนดชำระเบี้ย 12/01/61 และมีสถานะกู้ชำระอัตโนมัติ กรุณาติดต่อลูกค้าเพื่อชำระเบี้ย และ/หรือ เงินกู้อัตโนมัติ";

//watson
 $watson = new watson_api();
 $watson->set_credentials('d295e811-1964-4e83-a0d9-67df9642bef9', 'hqmhc7ZbODqv');

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		
		//POST BACK EVENT
		if ($event['type'] == 'postback'){
			$replyToken = $event['replyToken'];
			$data = $event['postback']['data'];
			
			if(strpos( $data , "memocode" ) !== false){
				$memo = "Memo 💡\n- ตรวจเลือด DBS\n- เอ็กซ์เรย์ไต (I.V.P.) โดยการฉีดสีพร้อมทั้งแนบใบอ่านผลมาด้วย\n- กรุณาตอบคำถามการเจ็บหน้าอก (กรณียังไม่บรรลุนิติภาวะ ต้องมีลายเซ็นของบิดา/มารดา หรือผู้ใช้อำนาจปกครอง)" ;
				$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($memo);	
			$response = $bot->replyMessage($replyToken, $outputText);
			}
			else if(strpos( $data , "payamount" ) !== false){
				$pol_no = substr($data,10);
				$reply = "กรมธรรม์ ".$pol_no." 💰เบี้ยที่ต้องชำระ 4,500 บาท"
				$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($memo);	
			$response = $bot->replyMessage($replyToken, $outputText);
			}
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("Check policy : ".$data);	
			$response = $bot->replyMessage($replyToken, $outputText);
		}
		
		// Reply only when message sent is in 'text' format
		else if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			//watson
			
      			//$data_arr = $watson->send_watson_conv_request($text, '70f86286-7a9a-4c63-880f-7b0eaa774ce8');
	    		//$watson->set_context(json_encode($data_arr['context']));
      
			      
		
   
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($data_arr['output']['text'][0]);
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(json_encode($data_arr['context']));
			//$response = $bot->replyMessage($replyToken, $outputText);
			//end watson
			
			//Start here **
			if ($text == "สวัสดี"){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("สวัสดีจ้าาาา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ทำไรอยู่") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("ไม่บอก อิอิ");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			//else if ($text == "แนน") {
			else if(strpos( $text , "แนน" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("แนนสวย");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if(strpos( $text , "555" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("5555555555");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if(strpos( $text , "เครียด" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("เครียดมาเล่นกับเรา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "เก็บ") {
			$user_id =$event['source']['userId'];
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($user_id);	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ไอซ์") {
				
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("จ๋าาาาาาา");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "userid") {
				
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($event['source']['userId']);	
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
			else if ($text == "ขอหวย2ตัว") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(rand(00,99));	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ขอหวย3ตัว") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(rand(000,999));	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if(strpos( $text , "ขอรางวัลที่" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(rand(000000,999999));	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "หวยกิน") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("สม");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if(strpos( $text , "เอ๋สวย" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("เอ๋สวยมาก");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if(strpos( $text , "เอ๋" ) !== false){
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("เอ๋สวย");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "สาธุ") {
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("เจริญพร");	
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if ($text == "ชวนเพื่อนสมัคร") {
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("มาสมัครกันเถอะ");
			$multipleMessageBuilder = new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder();
			$img_url = "https://img.wongnai.com/p/s/2016/06/29/81e4c5272de045c1a68834aea8ba9ee0.jpg";
			$multipleMessageBuilder->add(new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("icechatbot.herokuapp.com/icechatbot.html"))
				->add(new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($img_url, $img_url));
			$response = $bot->replyMessage($replyToken, $multipleMessageBuilder); }
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
			
			$b_description = "💡 กรมธรรม์ใหม่ 💡\n\nคุณพงศธร ทับทิมไทย\nT123456789\nขอเอกสารเพิ่มเติมเมื่อ 31/01/60";
			$b_memo = "Memo\nกรุณาตอบคำถามเกี่ยวกับแอลกอฮอล์ (กรณียังไม่บรรลุนิติภาวะ ต้องมีลายเซ็นของบิดา/มารดา หรือผู้ใช้อำนาจปกครอง)";
			
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $b_description,null, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $b_memo,null, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb1i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb1.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "MEMO CODE";
			$nb24 = "DBS IVP CHESQ";
				$postbackdata = "memocode";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("ข้อมูลเพิ่มติม", $postbackdata)
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581")
				);
			//$b_description = "กรมธรรม์ใหม่ \n\nคุณพงศธร ทับทิมไทย T123456789 ขอเอกสารเพิ่มเติมเมื่อ 31/01/60";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $nb2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($nb2, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			
			//New template
			else if (strtolower($text) == "nb2n") {
			
			
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $nb2n,null, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $nb2d,null, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb2i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb2.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/more.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "เนื่องจาก";
			$nb24 = "ขาดเอกสาร / สิ่งที่ขอ (เกี่ยวกับสุขภาพ)";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb4i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb4.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb3") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามรายละเอียด", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+%E0%B8%81%E0%B8%98.+T123456789+%E0%B8%AD%E0%B8%99%E0%B8%B8%E0%B8%A1%E0%B8%B1%E0%B8%95%E0%B8%B4%E0%B9%80%E0%B8%9A%E0%B8%B7%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B9%89%E0%B8%99+31%2F01%2F60+%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%A3%E0%B8%A7%E0%B8%A1+1%2C000%2C000.00+%E0%B8%9A%E0%B8%B2%E0%B8%97+%E0%B8%82%E0%B8%93%E0%B8%B0%E0%B8%99%E0%B8%B5%E0%B9%89%E0%B8%A3%E0%B8%AD%E0%B8%88%E0%B8%94%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B8%95%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%B1%E0%B8%9A+Counter+Offer+%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%84%E0%B9%89%E0%B8%B2")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $nb3,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($nb3, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			
			else if (strtolower($text) == "nb3i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb3.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/more.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "เนื่องจาก";
			$nb24 = "รอจดหมายตอบรับจากลูกค้า";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "nb4") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%81%E0%B8%A3+%E0%B8%AD%E0%B8%B1%E0%B8%95%E0%B8%96%E0%B8%81%E0%B8%A3+%E0%B8%81%E0%B8%98.+T123456789+%E0%B8%AD%E0%B8%99%E0%B8%B8%E0%B8%A1%E0%B8%B1%E0%B8%95%E0%B8%B4+31%2F01%2F60+%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%A3%E0%B8%A7%E0%B8%A1+10%2C000.00+%E0%B8%9A%E0%B8%B2%E0%B8%97")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $nb4,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($nb4, $button);
			$response = $bot->replyMessage($replyToken, $outputText);  }
			//bill1
			else if (strtolower($text) == "bill1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			//$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/Screen%20Shot%202560-09-25%20at%2011.26.48%20PM.png";
			$b_description = "❗ เตือนการชำระเบี้ย ❗\n\nคุณพงศธร ทับทิมไทย T123456789 ยังไม่ได้ชำระเบี้ยฯ จำนวน 10,000 บ. ครบกำหนด 12/01/60";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $b_description,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($b_description, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "billpa") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/pa.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nกำหนดชำระ 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนการชำระเบี้ย", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "bill1i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/bill.PNG";	
			
			$nb21 = "กธ. T123456789 จำนวนเบี้ย 50,000 บาท";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nกำหนดชำระ 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนการชำระเบี้ย", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			/*else if (strtolower($text) == "bill2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill2, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "billpo") {
			
			$response = $bot->replyMessage($replyToken, $outputText);
			}*/
			else if (strtolower($text) == "bill2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยเดิม", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยพร้อมข้อเสนอ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill2, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "bill2i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/bill.PNG";
			$imgurl2  = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/po.PNG";
			
			$nb21 = "กธ.T123456789 จำนวนเบี้ย 1,000,000 บาท";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nกำหนดชำระ 31/10/2561";
				
			$nb23 = "กธ.T123456789 จำนวนเบี้ย 1,200,000 บาท";
			$nb24 = "คุณ พงศธร ทับทิมไทย\nกำหนดชำระ 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%81%E0%B8%A3+T123456789+%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF%E0%B8%9E%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1+%E0%B8%84%E0%B8%A3%E0%B8%9A%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94+12%2F01%2F60+%E0%B8%88%E0%B8%B3%E0%B8%99%E0%B8%A7%E0%B8%99+12%2C000+%E0%B8%9A.+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3DT690321979%26a%3D8197890%26d%3D020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ข้อมูลเพิ่มติม", "https://awa.aia.co.th/login/"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
				
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนการชำระเบี้ย", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			//Test carousel
			else if (strtolower($text) == "bill2c") {
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยเดิม", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
				);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยพร้อมข้อเสนอ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			//$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill2,null,  $actions);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $bill21,null, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder(null, $bill22,null, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
				$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);	
			
				
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill2, $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			
			else if (strtolower($text) == "bill3") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill3,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill3, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "bill4") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยเดิม", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อ เบี้ยพร้อมข้อเสนอ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
			);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill4,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill4, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "bill5") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+T123456789+%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%AD%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("บาร์โค้ดเพื่อชำระเบี้ยฯ", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714")
				);
			//$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $bill5,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($bill5, $button);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			//Conservation
			else if (strtolower($text) == "apl") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/apl.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nสิ้นสุดความคุ้มครอง 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+T123456789+%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0+12%2F01%2F61+%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B8%81%E0%B8%B9%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B8%AD%E0%B8%B1%E0%B8%95%E0%B9%82%E0%B8%99%E0%B8%A1%E0%B8%B1%E0%B8%95%E0%B8%B4%C2%A0%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2+%E0%B9%81%E0%B8%A5%E0%B8%B0%2F%E0%B8%AB%E0%B8%A3%E0%B8%B7%E0%B8%AD+%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B8%84%E0%B8%B7%E0%B8%99%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%99%E0%B8%81%E0%B8%B9%E0%B9%89%E0%B8%AD%E0%B8%B1%E0%B8%95%E0%B9%82%E0%B8%99%E0%B8%A1%E0%B8%B1%E0%B8%95%E0%B8%B4"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ยฯ+เงื่อนไข", "tel:023528888")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("เตือนการชำระเบี้ย", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			else if (strtolower($text) == "con1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $con1,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($con1, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			
			//ETI
			else if (strtolower($text) == "eti") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/eti.PNG";	
			
			$eti1 = "กธ. T1000000001";
			$eti2 = "กธ. T2000000002";
			$eti3 = "กธ. T3000000003";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nสิ้นสุดความคุ้มครอง 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("ตรวจสอบเบี้ย+เงื่อนไข", "payamount:T1000000001")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("ตรวจสอบเบี้ย+เงื่อนไข", "payamount:T2000000002")
			);
			$action3 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($eti1, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($eti2, $nb22,$imgurl, $action2);
  			$column3 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($eti3, $nb22,$imgurl, $action3);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
			$columns[] = $column3;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("กรมธรรม์ขยายเวลา", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			//Lapse carousel
			else if (strtolower($text) == "lap") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/lap1.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/lap2.PNG";
			$imgurl3 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/lap3.PNG";
			$imgurl4 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/lap4.PNG";
			$imgurl5  = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/more.PNG";
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย";
				
			$nb23 = "เพิ่มเติมอีก 5 รายการ";
			$nb24 = "กรุณาตรวจสอบข้อมูลกรมธรรม์เพิ่มเติม";
				
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			$action3 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			$action4 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			$action5 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ตรวจสอบข้อมูล", "https://awa.aia.co.th/login/"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl2, $action2);
  			$column3 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl3, $action3);
  			$column4 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl4, $action4);
			$column5 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl5, $action5);
  				
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
			$columns[] = $column3;
			$columns[] = $column4;
			$columns[] = $column5;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);	
			
				
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("เตือนการชำระเบี้ย", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "con2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=".$con2_f);
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF+%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7+45+%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $con2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($con2, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "con3") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF+%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7+52+%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $con3,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($con3, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "con4") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF+%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7+60+%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $con4,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($con4, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "con5") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%AF+%E0%B8%AB%E0%B8%B2%E0%B8%81%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B8%A0%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%99+12%2F01%2F2561+%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87%E0%B8%AA%E0%B8%B7%E0%B8%AD%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%A0%E0%B8%B2%E0%B8%9E+%28%E0%B8%AA%E0%B8%87%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B4%E0%B8%97%E0%B8%98%E0%B8%B4%E0%B9%8C%E0%B8%AB%E0%B8%B2%E0%B8%81%E0%B8%A1%E0%B8%B5%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%A7%E0%B8%B1%E0%B8%95%E0%B8%B4%29")
			);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $con5,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($con5, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			//Claim
			else if (strtolower($text) == "cl1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อฝ่ายสินไหม", "tel:1581")
				);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $cl1,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($cl1, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "cl2") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อฝ่ายสินไหม", "tel:1581")
				);	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $cl2,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($cl2, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "cl3") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อฝ่ายสินไหม", "tel:1581")
				);
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $cl3,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($cl3, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			else if (strtolower($text) == "cl4") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อฝ่ายสินไหม", "tel:1581")
				);
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $cl4,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($cl4, $button);
			$response = $bot->replyMessage($replyToken, $outputText); }
			
			//New claim
			else if (strtolower($text) == "cl1i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/claim1.PNG";
			//$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อ Call center", "tel:1581")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("การเรียกร้องสินไหม", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "cl2i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/claim2.PNG";
			//$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581"),
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อ Call center", "tel:1581")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("การเรียกร้องสินไหม", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "cl3i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/claim3.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/more.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "เนื่องจาก";
			$nb24 = "ไม่อยู่ในเงื่อนไขของบริษัท";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581")
				);
			$action2 = array (
			New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อ Call center", "tel:1581")	
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("การเรียกร้องสินไหม", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			else if (strtolower($text) == "cl4i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/claim4.PNG";
			//$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789 จำนวน 20,000 บาท";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("การเรียกร้องสินไหม", $carousel);
			$response = $bot->replyMessage($replyToken, $outputText);	}
			
			//Minor claim pending case
			else if (strtolower($text) == "cl5i") {
			$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/claim2.PNG";
			//$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อโรงพยาบาล", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อ Call center", "tel:1581")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			//$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			//$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("การเรียกร้องสินไหม", $carousel);
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
