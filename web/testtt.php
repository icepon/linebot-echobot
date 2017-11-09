<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '1efe3c53bbd84320ce616b832c262094']);
$access_token = 'AdlGlZFCmua0+/PYr/y/iI7dF2c7DeVXkhG/FKp9K4Pp8qAuEWTv7yAx7vDX1t3B31gVTyIwIMhyO4g1XWptfVyFJ7kmUGdDrfB4Pd/UspZp0iIMrLeVq+YJIV0ZY0arNIDv4eVmwLOCm2yns5ezewdB04t89/1O/w1cDnyilFU=';
$puserid = "Ub67a42c2b7fbb4a11e1962cd6f3e6036";
$iuserid = "U9f0c0e8e2ad753d0067fd7c3f9ab644e";

$m_type = $_POST["action"];

if (strtolower($m_type) == "inb_approve") {
     
}

/*
if(isset($_POST['1nb_approve'])){
     $message= "The insert function is called.";
    }
    if(isset($_POST['inb_approve'])){
      $message="The select function is called.";
    }

function 1nb_approve() {
  echo "The insert function is called.";
    exit;
   
}
function inb_approve() {
  echo "The insert function is called.";
    exit;

}


function 1nb_reject() {
    echo "The insert function is called.";
    exit;
}*/
?>
