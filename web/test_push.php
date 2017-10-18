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
   $imgPath = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/blank2.png?_ignored=";
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 255, 255, 255);
    $string = "http://recentsolutions.net";
    $fontSize = 3;
    $x = 115;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);
	// A few settings
$image = imagejpeg($image);

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
else if (strtolower($m_type) == "img")
{
	//$img_url = "https://raw.githubusercontent.com/icepon/linebot-echobot/master/blank2.png?_ignored=";
	
	$img_url = LoadJpeg();
	
	//test img map
	$actionArray = array();
        array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            'tel:1581',
            // Button is 100px on 700px image. So 149px on base size(1040px)
            new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(84, 445, 369, 130)));
	
	array_push($actionArray, new LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder(
            'https://lineit.line.me/share/ui?url=%E0%B8%88%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%99%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2',
            // Button is 100px on 700px image. So 149px on base size(1040px)
            new LINE\LINEBot\ImagemapActionBuilder\AreaBuilder(575, 446, 364, 130)));
	
        $imagemapMessageBuilder = new \LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder (
          $img_url, // prevent cache
          "จ่ายเงิน",
          new LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder(600, 1040),
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
