<?php
require_once '../vendor/autoload.php';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '1efe3c53bbd84320ce616b832c262094']);


$access_token = 'AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=';

echo  $_GET["userId"];
echo  $_GET["m_type"];
echo  $_GET["m_text"];

//Image builder
function LoadJpeg($imgname)
{
    /*
    $im = @imagecreatefromjpeg($imgname);

   
    if(!$im)
    {
        
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }
*/
    return $imgname;
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
	$img_url = "https://img.wongnai.com/p/s/2016/06/29/81e4c5272de045c1a68834aea8ba9ee0.jpg";
	$imgg = LoadJpeg($img_url);
	$outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($imgg, $imgg);
	$response = $bot->pushMessage($_GET["userId"], $outputText);
}
else
{
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET["m_text"]);
$response = $bot->pushMessage($_GET["userId"], $textMessageBuilder);
}
