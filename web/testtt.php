<?php
require_once '../vendor/autoload.php';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '1efe3c53bbd84320ce616b832c262094']);
$prind = "Ub67a42c2b7fbb4a11e1962cd6f3e6036";
$iceuser = "U9f0c0e8e2ad753d0067fd7c3f9ab644e";

$access_token = 'AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=';




$m_type = $_POST["action"];

if (strtolower($m_type) == "inb_memo") {
		$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb1.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "MEMO CODE";
			$nb24 = "DBS IVP CHESQ";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ข้อมูลเพิ่มติม", "https://awa.aia.co.th/login/")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->pushMessage($iceuser, $outputText);	
}
else if (strtolower($m_type) == "inb_reject") {
  
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
			$response = $bot->pushMessage($iceuser, $outputText);
}
else if (strtolower($m_type) == "inb_pending") {
  
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
			$response = $bot->pushMessage($iceuser, $outputText);
}
else if (strtolower($m_type) == "inb_approve") {
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
			$response = $bot->pushMessage($iceuser, $outputText);	}
else if (strtolower($m_type) == "1nb_memo") {
		$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/nb1.PNG";
			$imgurl2 = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/memo.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nวันที่ 31/10/2561";
			$nb23 = "MEMO CODE";
			$nb24 = "DBS IVP CHESQ";
			$action1 = array (
				//New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อบริษัท", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B8%87%E0%B8%A8%E0%B8%98%E0%B8%A3+%E0%B8%97%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B4%E0%B8%A1%E0%B9%84%E0%B8%97%E0%B8%A2+T123456789+%E0%B8%82%E0%B8%AD%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B9%80%E0%B8%95%E0%B8%B4%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD+31%2F01%2F60")
			);
			$action2 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ข้อมูลเพิ่มติม", "https://awa.aia.co.th/login/")
			);
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb23, $nb24,$imgurl2, $action2);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("แจ้งเตือนสถานะกรมธรรม์ใหม่", $carousel);
			$response = $bot->pushMessage($prind, $outputText);	
}
else if (strtolower($m_type) == "1nb_reject") {
  
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
			$response = $bot->pushMessage($prind, $outputText);
}
else if (strtolower($m_type) == "1nb_pending") {
  
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
			$response = $bot->pushMessage($prind, $outputText);
}
else if (strtolower($m_type) == "1nb_approve") {
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
			$response = $bot->pushMessage($prind, $outputText);	}
else if (strpos( $m_type , "billpa" ) !== false){ 
	if (strtolower($m_type) == "1billpa") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
	$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "billno" ) !== false){ 
	if (strtolower($m_type) == "1bill") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
	$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "billpo" ) !== false){ 
	if (strtolower($m_type) == "1billpo") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
	$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "apl" ) !== false){ 
	if (strtolower($m_type) == "1apl") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "eti" ) !== false){ 
	if (strtolower($m_type) == "1eti") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
	$imgurl = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/eti.PNG";	
			
			$nb21 = "กธ. T123456789";
			$nb22 = "คุณ พงศธร ทับทิมไทย\nสิ้นสุดความคุ้มครอง 31/10/2561";
			$action1 = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("โทรแจ้งลูกค้า", "tel:1581"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%98%E0%B8%A7%E0%B8%B1%E0%B8%8A%E0%B8%8A%E0%B8%B1%E0%B8%A2+%E0%B8%88%E0%B8%87%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%94%E0%B8%B5+T123456789+%E0%B8%A1%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%82%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2+%28ETI%29++%E0%B8%AA%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87+12%2F02%2F2561+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%93%E0%B8%B2%E0%B8%8A%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8")
				,New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("สอบถามเบี้ย+เงื่อนไข", "tel:023528888")
			);
			
			$column1 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column2 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			$column3 = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder($nb21, $nb22,$imgurl, $action1);
  			
			$columns = array();	
				
			$columns[] = $column1;
			$columns[] = $column2;
			$columns[] = $column3;
				
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
					
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("กรมธรรม์ขยายเวลา", $carousel);
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "lap" ) !== false){ 
	if (strtolower($m_type) == "1lap") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "cl_submit" ) !== false){ 
	if (strtolower($m_type) == "1cl_submit") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "cl_pending" ) !== false){ 
	if (strtolower($m_type) == "1cl_pending") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "cl_approve" ) !== false){ 
	if (strtolower($m_type) == "1cl_approve") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else if (strpos( $m_type , "cl_reject" ) !== false){ 
	if (strtolower($m_type) == "1cl_reject") {
		$target = $prind;
	}
	else{
		$target = $iceuser;
	}
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
	
$response = $bot->pushMessage($target, $outputText);
}
else
{
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($m_type);
$response = $bot->pushMessage($iceuser, $textMessageBuilder);
}
