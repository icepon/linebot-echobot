<?php
require_once '../vendor/autoload.php';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '1efe3c53bbd84320ce616b832c262094']);


$access_token = 'AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=';

echo  $_GET["userId"];
echo  $_GET["m_type"];
echo  $_GET["m_text"];

//Image builder
function LoadJpeg()
{
	echo 'A1';
   $imgPath = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/blank2.png?_ignored=";
    $image = imagecreatefrompng($imgPath);
    $color = imagecolorallocate($image, 255, 255, 255);
    $string = "http://recentsolutions.net";
    $fontSize = 3;
    $x = 115;
    $y = 185;
	echo 'A2';
    imagestring($image, $fontSize, $x, $y, $string, $color);
	// A few settings
$image = imagepng($image);

// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
    return src;
}



//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET["m_text"]);
//$response = $bot->pushMessage($_GET["userId"], $textMessageBuilder);

$m_type = $_GET["m_type"];

if (strtolower($m_type) == "bill1") {
			$actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Barcode จ่ายเงิน", "http://iaia-uat.aia.co.th/pay?p=T690321979&a=8197890&d=020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ส่งต่อข้อความ", "https://lineit.line.me/share/ui?url=%e0%b8%84%e0%b8%b8%e0%b8%93%e0%b8%9e%e0%b8%87%e0%b8%a8%e0%b8%98%e0%b8%a3+T123456789+%e0%b8%84%e0%b8%a3%e0%b8%9a%e0%b8%81%e0%b8%b3%e0%b8%ab%e0%b8%99%e0%b8%94+31%2f01%2f61+%e0%b8%88%e0%b8%b3%e0%b8%99%e0%b8%a7%e0%b8%99+50%2c000+%e0%b8%9a%e0%b8%b2%e0%b8%97+http%3A%2F%2Fiaia-uat.aia.co.th%2Fpay%3Fp%3dT690321979%26a%3d8197890%26d%3d020714"),
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ติดต่อลูกค้า ✆", "tel:1581")
			);
			$b_description = "กรุณาแจ้ง คุณพงศธร T123456789 ครบกำหนด 31/01/61 จำนวน 50,000 บาท";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $b_description,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($b_description, $button);
			$response = $bot->pushMessage($_GET["userId"], $outputText);	}
else if (strtolower($m_type) == "nb1") {
  $actions = array (
				New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("ตรวจสอบข้อมูล", "https://awa.aia.co.th/login/")
			);
			$b_description = "คุณพงศธร T123456789 MEMO 31/01/61";	
			$button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder(null, $b_description,null,  $actions);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder($b_description, $button);
			$response = $bot->pushMessage($_GET["userId"], $outputText);
}
else if (strtolower($m_type) == "nb4i") {
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
			$response = $bot->pushMessage($_GET["userId"], $outputText);	}
else if (strtolower($m_type) == "img")
{
	//$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/blank2.png?_ignored=";
	$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/fa_image_240.jpg?_ignored=";
	
	//Test use Imagemap URI action object array as null
	$actionArray = array();
	//URI action
        array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            "http://google.co.th/",
            new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(1040, 0, 1040, 1040)));
		//new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(0, 0, 0, 0)));
	//array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            //'fb:profile/laosice',
            //new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(575, 446, 364, 130)));
	
	
	
        $imagemapMessageBuilder = new \LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder (
          $img_url, // prevent cache
          "จ่ายเงิน",
          new LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder(1040, 1040),
          $actionArray
        );
	
	
	
	//image
	$outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($img_url, $img_url);
	$response = $bot->pushMessage($_GET["userId"], $outputText);
	//imagemap
	//$response = $bot->pushMessage($_GET["userId"], $imagemapMessageBuilder);
} 
else if (strtolower($m_type) == "img2")
{
	//$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/blank2.png?_ignored=";
	$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/fa_rich2.jpg?_ignored=";
	//Test use Imagemap URI action object array as null
	$actionArray = array();
	//URI action
        //array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            //'fb://profile/laosice',
            //new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(84, 445, 369, 130)));
		//new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(0, 0, 0, 0)));
	//array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            //'fb:profile/laosice',
            //new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(575, 446, 364, 130)));
	
	
	
        $imagemapMessageBuilder = new \LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder (
          $img_url, // prevent cache
          "จ่ายเงิน",
          new LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder(1040, 1040),
          $actionArray
        );
	
	
	//$outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($img_url, $img_url);
	//$outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($imgg, $imgg);
	//$response = $bot->pushMessage($_GET["userId"], $outputText);
	$response = $bot->pushMessage($_GET["userId"], $imagemapMessageBuilder);
} 
else
{
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET["m_text"]);
$response = $bot->pushMessage($_GET["userId"], $textMessageBuilder);
}
