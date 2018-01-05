<?php

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('b+X18LM7MI9l2fgwWm9z/Y1cPqRPvP8zqOcHdE4dgQRxcWWYg084kquxoshlg5JCX12eBoyy+ycOEF6299yOkajoKMO2F2GovYgK815HDuA5PVLqOzghQi0CuEGSBDLoVj+oeI+fLnnfBxsK+VDbdQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '5b7ff1fb07b2b202ad8771278a07de69']);


$access_token = 'b+X18LM7MI9l2fgwWm9z/Y1cPqRPvP8zqOcHdE4dgQRxcWWYg084kquxoshlg5JCX12eBoyy+ycOEF6299yOkajoKMO2F2GovYgK815HDuA5PVLqOzghQi0CuEGSBDLoVj+oeI+fLnnfBxsK+VDbdQdB04t89/1O/w1cDnyilFU=';

echo  $_GET["userId"];
echo  $_GET["m_type"];
echo  $_GET["m_text"];



/*
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
else
{
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET["m_text"]);
$response = $bot->pushMessage($_GET["userId"], $textMessageBuilder);
}
*/
