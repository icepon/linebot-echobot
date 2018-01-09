<?php

require_once '../vendor/autoload.php';
include 'watson.php';
include 'segment.php'; //ตัดคำ
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('faM/uDL/hhAcUUtJi5ZcbZ/mhlLVer58i1HucRdUuk1gsFHHlMTHekmW7Xtm1VABIYcSJWC7mkPYtJuNiYYP8xCjqd76X3+9Mpb8Uqc3uQ9we2+RykiD9l9HPyPTnF5UFP+RLYQaQGEFhGSrUaDCgwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '54d2d282675abc08a1b75e726c7a5192']);
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

$access_token = 'faM/uDL/hhAcUUtJi5ZcbZ/mhlLVer58i1HucRdUuk1gsFHHlMTHekmW7Xtm1VABIYcSJWC7mkPYtJuNiYYP8xCjqd76X3+9Mpb8Uqc3uQ9we2+RykiD9l9HPyPTnF5UFP+RLYQaQGEFhGSrUaDCgwdB04t89/1O/w1cDnyilFU=';


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
				$reply = "กรมธรรม์ ".$pol_no." 💰เบี้ยที่ต้องชำระ 4,500 บาท";
				$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($reply);	
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
			
			//ตัดคำ
			$segment = new Segment();
    			$result = $segment->get_segment_array2($text);
    			$text2 = implode(' ', $result);
			
			
			//watson
			
      			//$data_arr = $watson->send_watson_conv_request($text2, '8c6db2da-7c90-4d5e-8496-d0d0b8a82e11');
	    		//$watson->set_context(json_encode($data_arr['context']));
      
			      
			$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
   
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($data_arr['output']['text'][0]);
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(json_encode($data_arr, JSON_UNESCAPED_UNICODE));
			
			//if ($data_arr['intent']['confidence'][0] < 0.5){
				//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($unknown[array_rand($unknown)]);
			//}
			$response = $bot->replyMessage($replyToken, $outputText);
			//end watson
			//if ($text == "userid") {
			//$outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($event['source']['userId']);	
			//$response = $bot->replyMessage($replyToken, $outputText); }
		}
	}
}

