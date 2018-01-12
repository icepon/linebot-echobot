<?php
require_once '../vendor/autoload.php';
include 'segment.php'; //ตัดคำ
$segment = new Segment();
  if(isset($_POST['message'])){
    // Unique identifier of the workspace.
    $workspace_id = '70f86286-7a9a-4c63-880f-7b0eaa774ce8';
    // Release date of the API version in YYYY-MM-DD format.
    $release_date = '2017-05-26';
    // Username of a user for the service credentials.
    $username = 'd295e811-1964-4e83-a0d9-67df9642bef9';
    // Password of a user for the service credentials.
    $password = 'hqmhc7ZbODqv';
    
    

    
    
    
    
    
    
    // Make a request message for Watson API in json.
    //ตัดคำ
    $text_ =  $_POST['message'];
    if (!empty($text_)) {
    //$segment = new Segment();
    
    $result2 = $segment->get_segment_array($text_);
    $text2 = implode(' ', $result2);
    $data['input']['text'] = $text2;
    }
    else{
    $data['input']['text'] = $_POST['message'];
    }
    if(isset($_POST['context']) && $_POST['context']){
      $data['context'] = json_decode($_POST['context'], JSON_UNESCAPED_UNICODE);
    }
    $data['alternate_intents'] = false;
    $json = json_encode($data, JSON_UNESCAPED_UNICODE);

    // Post the json to the Watson API via cURL.
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://watson-api-explorer.mybluemix.net/conversation/api/v1/workspaces/'.$workspace_id.'/message?version='.$release_date);
    curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
    curl_setopt($ch, CURLOPT_POST, true );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = trim( curl_exec( $ch ) );
    curl_close($ch);

   $request->setUrl('https://icechatbot-a7be.restdb.io/rest/chatlog');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'x-apikey' => '0125cd923825abe857eac7066f134b0b10cfb',
  'content-type' => 'application/json'
));


  $response = $request->send();

    
    
    // Responce the result.
    //$toreply = json_encode($result, JSON_UNESCAPED_UNICODE);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
  }
