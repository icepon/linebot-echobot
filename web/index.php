<?php

require_once '../vendor/autoload.php';

//POST
$input = file_get_contents('php://input');
$json = json_decode($input);

print_r($json);
